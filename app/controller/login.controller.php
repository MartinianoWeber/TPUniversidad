<?php

require_once './app/models/user.model.php';
require_once './app/views/login.view.php';
require_once './helpers/auth.php';


class Login {
    private $model;
    private $view;
    private $authHelper;

  public function __construct() {

        $this->model = new userModel();
        $this->view = new LoginView();
        $this->authHelper = new Auth();
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function verifyUser() {
        if(!empty($_POST['tipo']) && !empty($_POST['user']) && !empty($_POST['password'])) {
            $tipo = $_POST['tipo'];
            $user = $_POST['user'];
            $password = $_POST['password'];  
            
            $usuario = $this->model->getUser($user);
       
 
            if(!empty($tipo) && $tipo == $usuario[0]->tipo  &&!empty($usuario) && password_verify($password, $usuario[0]->contraseña)) {
               session_start();
                $this->authHelper->login($usuario);
                
                header("Location: ".BASE_URL."home");
               
            } else {
                $this->view->showLogin('Acceso denegado');
            }
        }
        }

    public function logout(){
        $this->authHelper->logout();
    }
    
    public function registrar() {
        if(!empty($_POST['tipo']) && !empty($_POST['user']) && !empty($_POST['password'])) {
            $tipo = $_POST['tipo'];
            $user = $_POST['user'];
            $password = $_POST['password']; 
            $hash = password_hash($password, PASSWORD_DEFAULT);  
            
            $result = $this->model->registroUser($tipo, $user, $hash);
            if($result){
                header("Location: ".BASE_URL."login");
            }else{
                $this->view->showLogin('Error al registrar');
            }
        }
    }     

}

?>

