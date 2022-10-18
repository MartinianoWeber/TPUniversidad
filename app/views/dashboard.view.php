<?php

class dashboardView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showDashboard($historial){
        $this->smarty->assign('historial', $historial);
        $this->smarty->display('templates/dashboard.tpl');
    }
}


?>