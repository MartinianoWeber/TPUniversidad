<?php

class gananciasView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showGanancias($ganancias){
        $this->smarty->assign('ganancias', $ganancias);
        $this->smarty->display('templates/ganancias.tpl');
    }
}


?>