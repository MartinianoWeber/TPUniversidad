<?php

require_once './app/models/home.model.php';
require_once './app/models/parking.model.php';
require_once './app/models/auto.model.php';
require_once './app/models/cliente.model.php';
require_once './app/views/home.view.php';
require_once './app/models/ganancias.model.php';
require_once './helpers/auth.php';


class Home {
    private $view;
    private $chequeo;
    private $parkingModel;
    private $autoModel;
    private $clienteModel;
    private $gananciasModel;

  public function __construct() {
        $this->chequeo = new Auth();
        $this->model = new HomeModel();
        $this->view = new HomeView();
        $this->parkingModel = new parkingModel();
        $this->autoModel = new Autos();
        $this->clienteModel = new Cliente();
        $this->gananciasModel = new gananciasModel();
    }
    
    public function showHome() {
        $this->chequeo->checkLoggedIn();
        $parking = $this->parkingModel->getAllData();

        $cliente = $this->clienteModel->getAllCliente();

        $autos = $this->autoModel->getAllAutos();
        
        $this->view->showHome($parking, $cliente, $autos);
    }

    public function addClient() {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $dni = $_POST['dni'];
        if(!empty($nombre) && !empty($telefono) && !empty($dni)){
            $this->clienteModel->sendClient($nombre, $telefono, $dni);
            header("Location: ".BASE_URL."home");
        }else{
            header("Location: ".BASE_URL."home");
        }
    }

    public function addAuto() {
        $patente = $_POST['patente'];
        $entrada = $_POST['entrada'];
        $cliente = $_POST['cliente'];
        $estacionamiento = $_POST['estacionamiento'];
        if(!empty($patente) && !empty($entrada) && !empty($cliente) && !empty($estacionamiento)){
            $this->autoModel->sendVehicle($patente, $entrada, $cliente, $estacionamiento);
            $this->parkingModel->updateParking($estacionamiento, false);
            
            header("Location: ".BASE_URL."home");
            
        }else{
            header("Location: ".BASE_URL."home");
        }
    }

    public function foundCar($id) {
        $response = $this->autoModel->selectId($id);
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $salida = date("H:i:00");
        $this->autoModel->updateVehicle($salida, $response->id);
        $horas = $salida - $response->entrada;
        $totalGanando = $horas * 155;
        $this->gananciasModel->sendGanancia($response->id, 155, $totalGanando, $horas);
        $this->parkingModel->updateParking($response->estacionamiento, true);

        header("Location: ".BASE_URL."home");
    }
}

?>

