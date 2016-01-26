<?php

require_once(CLASSES_PATH . "/framework/AbstractAction.class.php");
require_once(CLASSES_PATH . "/managers/AdminsManager.class.php");

/**
 * @author Karen Manukyan
 */
class LoginAction extends AbstractAction {

    public function service() {
        $login = $this->secure($_REQUEST['login']);
        $password = $this->secure($_REQUEST['password']);
        $adminsManager = AdminsManager::getInstance();
        $adminDto = $adminsManager->getByLoginPassword($login, $password);
        if ($adminDto) {
            $adminUser = new AdminUser($adminDto->getId());
            $adminUser->setUniqueId($adminDto->getHash());
            $this->sessionManager->setUser($adminUser, true, true);
        } else {
            $_SESSION['error_message'] = 'Wrong Login/Password!';
        $this->redirect('admin/login');
        }
        $this->redirect('admin');
    }

    public function getRequestGroup() {
        return RequestGroups::$guestRequest;
    }

}

?>