<?php
require_once './smarty/libs/Smarty.class.php';

class ParkingView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showParking($parking) {
        $this->smarty->assign('parkeos', $parking);
        $this->smarty->display('templates/parking.tpl');
    }
}
?>