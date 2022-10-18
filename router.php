<?php
require_once './app/controller/home.controller.php';
require_once './app/controller/login.controller.php';
require_once './app/controller/parking.controller.php';
require_once './app/controller/ganancias.controller.php';
require_once './app/controller/dashboard.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    if (isset($_SESSION['user'])) {
        $action = 'home';
    } else {
        $action = 'login';
    }
}

$params = explode('/', $action);

$controllerHome = new Home();
$controllerLogin = new Login();
$controllerParking = new Parking();
$controllerGanancias = new Ganancias();
$controllerDashboard = new Dashboard();

switch ($params[0]) {
    case 'dashboard':
        $controllerDashboard->showDashboard();
        break;
    case 'home':
        $controllerHome->showHome();
        break;
    case 'addClient':
        $controllerHome->addClient();
        break;
    case 'addAuto': 
        $controllerHome->addAuto();
        break;
        case 'autosFue':
            $controllerHome->foundCar($params[1]);
        break;
    case 'login':
        $controllerLogin->showLogin();
        break;
    case 'verify':
        $controllerLogin->verifyUser();
        break;
    case 'registrar':
        $controllerLogin->registrar();
        break;
    case 'logout':
        $controllerLogin->logout();
        break;
    case 'parking':
        $controllerParking->showParking();
        break;
    case 'addEstacionamiento':
        $controllerParking->addParking();
        break;
    case 'eliminarParking':
        $controllerParking->deleteParking($params[1]);
        break;
    case 'ganancias':
        $controllerGanancias->showGanancias();
        break;
    default:
        echo ('404 Page not found');
        break;
}
