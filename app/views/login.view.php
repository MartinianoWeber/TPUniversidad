<?php
require_once './smarty/libs/Smarty.class.php';

class LoginView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin($error = null) {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');

    }
}
?>