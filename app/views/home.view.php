<?php
require_once './smarty/libs/Smarty.class.php';

class HomeView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showHome($parking, $cliente, $autos) {
        $this->smarty->assign('autosAll', $autos);
        $this->smarty->assign('estacionamientos', $parking);
        $this->smarty->assign('clientes', $cliente);
        $this->smarty->display('templates/home.tpl');
    }
}



?>