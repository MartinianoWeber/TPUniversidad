<?php

// require_once './app/models/parking.model.php';
require_once './app/views/parking.view.php';
require_once './app/models/parking.model.php';
require_once './helpers/auth.php';

class Parking {
    // private $model;
    private $view;

  public function __construct() {
        $this->model = new parkingModel();
        $this->view = new ParkingView();
        $this->chequeo = new Auth();

    }

    public function showParking() {
        $this->chequeo->checkLoggedIn();
        $user = $this->chequeo->autorizacion();
        $parking = $this->model->getAllData();
        $this->view->showParking($parking, $user);
    }
    public function addParking() {

        $estacionamiento = $_POST['estacionamiento'];
        if(!empty($estacionamiento)){
            $this->model->sendData($estacionamiento);
            header("Location: ".BASE_URL."parking");
        }else{
            header("Location: ".BASE_URL."home");
        }
    }

    public function deleteParking($id) {
        $this->model->deleteParking($id);
        header("Location: ".BASE_URL."parking");
    }

    public function updateParking($id) {

        

        // $this->model->updateParking($id, true);
        header("Location: ".BASE_URL."parking");
    }
}

?>