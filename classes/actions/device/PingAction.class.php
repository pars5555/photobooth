<?php

require_once(CLASSES_PATH . "/actions/BaseAction.class.php");
require_once(CLASSES_PATH . "/managers/DevicesManager.class.php");
require_once(CLASSES_PATH . "/managers/DevicePendingActionsManager.class.php");

/**
 * @author Karen Manukyan
 */
class PingAction extends BaseAction {

    public function service() {
        list($serialNumber, $deviceTitle,  $amd100Qty, $amd200Qty, $amd500Qty,  $server_ping_url, $not_working, $server_host) = $this->validateFields();
        $devicesManager = DevicesManager::getInstance();
        $devicesManager->updateDeviceParameters($serialNumber, $deviceTitle,  $amd100Qty, $amd200Qty, $amd500Qty,  $server_ping_url, $not_working, $server_host);
        $deviceDto = $devicesManager->getBySerialNumber($serialNumber);
        $deviceId = $deviceDto->getId();
        $devicePendingActionsManager = DevicePendingActionsManager::getInstance();
        $deviceNotSentActionObjects = $devicePendingActionsManager->getDeviceNotSentActionObjects($deviceId);
        $devicePendingActionsManager->setDeviceNotSentActionsAsSent($deviceId);
        $this->ok(array('actions' => $deviceNotSentActionObjects));
    }

    public function getRequestGroup() {
        return RequestGroups::$guestRequest;
    }

    public function validateFields() {
        if (!isset($_REQUEST['serial_number'])) {
            $this->error(array('message' => "No Serial Number!"));
        }       
        $serialNumber = $this->secure($_REQUEST['serial_number']);      
        $deviceTitle = $this->secure($_REQUEST['device_title']);      
        $server_ping_url = $this->secure($_REQUEST['server_ping_url']);      
        $not_working = $this->secure($_REQUEST['not_working']);
        $server_host = $this->secure($_REQUEST['server_host']);
                    
        if (!isset($_REQUEST['amd_100_qty'])) {
            $this->error(array('message' => "No AMD 100 Quantity!"));
        }      
      
        $amd100Qty = intval($_REQUEST['amd_100_qty']);
        if (!isset($_REQUEST['amd_200_qty'])) {
            $this->error(array('message' => "No AMD 200 Quantity!"));
        }
        $amd200Qty = intval($_REQUEST['amd_200_qty']);
        if (!isset($_REQUEST['amd_500_qty'])) {
            $this->error(array('message' => "No AMD 500 Quantity!"));
        }
        $amd500Qty = intval($_REQUEST['amd_500_qty']);
        return array( $serialNumber, $deviceTitle,  $amd100Qty, $amd200Qty, $amd500Qty,  $server_ping_url, $not_working, $server_host);
    }

}

?>