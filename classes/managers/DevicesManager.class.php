<?php

require_once (CLASSES_PATH . "/framework/AbstractManager.class.php");
require_once (CLASSES_PATH . "/dal/mappers/DevicesMapper.class.php");
require_once (CLASSES_PATH . "/dal/dto/Device.class.php");
require_once (CLASSES_PATH . "/managers/CarwashDevicesManager.class.php");

class DevicesManager extends AbstractManager {

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
        $this->mapper = DevicesMapper::getInstance();
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
            self::$instance = new DevicesManager();
        }
        return self::$instance;
    }

    public function updateDeviceParameters($serialNumber, $deviceTitle,  $amd100Qty, $amd200Qty, $amd500Qty,  $server_ping_url, $not_working, $server_host) {
        $deviceDtos = $this->selectByField("serial_number", $serialNumber);
        if (empty($deviceDtos)) {
            $createDto = $this->createDto();
            $createDto->setSerialNumber($serialNumber);
            $createDto->setTitle($deviceTitle);
            $createDto->setAmd100Qty($amd100Qty);
            $createDto->setAmd200Qty($amd200Qty);
            $createDto->setAmd500Qty($amd500Qty);
            $createDto->setLastPing(date('Y-m-d H:i:s'));
            $createDto->setServerPingUrl($server_ping_url);
            $createDto->setNotWorking($not_working);
            $createDto->setServerHost($server_host);
            $this->insertDto($createDto);            
            return true;
        } else {
            $deviceDto = $deviceDtos[0];
            $deviceDto->setTitle($deviceTitle);
            $deviceDto->setAmd100Qty($amd100Qty);
            $deviceDto->setAmd200Qty($amd200Qty);
            $deviceDto->setAmd500Qty($amd500Qty);
            $deviceDto->setLastPing(date('Y-m-d H:i:s'));
            $deviceDto->setServerPingUrl($server_ping_url);
            $deviceDto->setNotWorking($not_working);
            $deviceDto->setServerHost($server_host);
            $this->updateByPk($deviceDto);
        }
        return false;
    }

    public function getBySerialNumber($serialNumber) {
        $dtos = $this->selectByField('serial_number', $serialNumber);
        if (!empty($dtos)) {
            return $dtos[0];
        }
        return null;
    }

    public function setDeviceIsBusy($deviceId, $isBusy) {
        $deviceDto = $this->selectByPK($deviceId);
        if (isset($deviceDto)) {
            $deviceDto->setIsBusy($isBusy);
            $this->updateByPk($deviceDto);
            return true;
        }
        return false;
    }
    public function resetDeviceCounter($deviceId) {
        $deviceDto = $this->selectByPK($deviceId);
        if (isset($deviceDto)) {
            $deviceDto->setAmd100Qty(0);
            $deviceDto->setAmd200Qty(0);
            $deviceDto->setAmd500Qty(0);
            $this->updateByPk($deviceDto);
            return true;
        }
        return false;
    }

    public function convertToDeviceObject($deviceDto) {
        $datetime = new DateTime('-10 seconds');
        $tenSecondsBeforeNow = $datetime->format("Y-m-d H:i:s");
        $device = new Device();
        $device->setId($deviceDto->getId());
        $device->setSerialNumber($deviceDto->getSerialNumber());
        $device->setTitle($deviceDto->getTitle());
        $device->setStatisticsPagePasscode($deviceDto->getStatisticsPagePasscode());
        $device->setResetCounterButton($deviceDto->getResetCounterButton());
        $device->setAmd100Qty($deviceDto->getAmd100Qty());
        $device->setAmd200Qty($deviceDto->getAmd200Qty());
        $device->setAmd500Qty($deviceDto->getAmd500Qty());
        $device->setAmd100ChargeSeconds($deviceDto->getAmd100ChargeSeconds());
        $device->setAmd200ChargeSeconds($deviceDto->getAmd200ChargeSeconds());
        $device->setAmd500ChargeSeconds($deviceDto->getAmd500ChargeSeconds());
        $device->setIsBusy($deviceDto->getIsBusy());
        $device->setLastPing($deviceDto->getLastPing());
        $device->setServerPingUrl($deviceDto->getServerPingUrl());
        $device->setServerImagePostUrl($deviceDto->getServerImagePostUrl());
        $device->setCameraAvailable($deviceDto->getCameraAvailable());
        $device->setServerHost($deviceDto->getServerHost());
        $lastPing = $deviceDto->getLastPing();
        $deviceIsOn = $tenSecondsBeforeNow < $deviceDto->getLastPing() && !empty($lastPing);
        if (!$deviceIsOn) {
            $device->setStatus('off');
        } else {
            $device->setStatus($deviceDto->getIsBusy() == 1 ? 'busy' : 'free');
        }
        $totalAmd = $deviceDto->getAmd100Qty() * 100 + $deviceDto->getAmd200Qty() * 200 + $deviceDto->getAmd500Qty() * 500;
        $device->setTotalAmd($totalAmd);
        return $device;
    }

}

?>