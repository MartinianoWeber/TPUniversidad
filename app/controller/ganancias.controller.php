<?php

require_once './app/models/ganancias.model.php';
require_once './app/views/ganancias.view.php';


class Ganancias{
    private $view;
    private $model;

  public function __construct() {
        $this->model = new gananciasModel();
        $this->view = new gananciasView();
    }

    public function showGanancias(){
        $ganancias = $this->model->getAllGanancias();
        $this->view->showGanancias($ganancias);
    }
}

?>