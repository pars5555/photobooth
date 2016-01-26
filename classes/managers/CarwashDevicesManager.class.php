<?php

require_once (CLASSES_PATH . "/framework/AbstractManager.class.php");
require_once (CLASSES_PATH . "/dal/mappers/CarwashDevicesMapper.class.php");

class CarwashDevicesManager extends AbstractManager {

    /**
     * @var singleton instance of class
     */
    private static $instance = null;

    /**
     * Initializes DB mappers
     *

     * @return
     */
    function __construct() {
        $this->mapper = CarwashDevicesMapper::getInstance();
    }

    /**
     * Returns an singleton instance of this class
     *
     * @param object $config
     * @param object $args
     * @return
     */
    public static function getInstance() {

        if (self::$instance == null) {
            self::$instance = new CarwashDevicesManager();
        }
        return self::$instance;
    }

    public function addRow($carwashId, $deviceId) {
        $selectByFields = $this->selectByFields(['carwash_id' => $carwashId, "device_id" => $deviceId]);
        if (empty($selectByFields)) {
            $createDto = $this->createDto();
            $createDto->setCarwashId($carwashId);
            $createDto->setDeviceId($deviceId);
            return $this->insertDto($createDto);
        }
        return false;
    }

    public function getCarwashDevicesIdsArray($carwashId) {
        $dtos = $this->selectByField('carwash_id' , $carwashId);
        $ret = array();
        foreach ($dtos as $dto) {
            $ret [] = $dto->getDeviceId();
        }
        $ret = array_unique($ret);
        return $ret;
    }

}

?>