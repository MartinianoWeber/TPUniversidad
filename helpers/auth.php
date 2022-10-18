<?php

class Auth{
    public function login($usuario) {
        session_start();
        $_SESSION['ID_USER'] = $usuario[0]->id;
        $_SESSION['USER'] = $usuario[0]->usuario;
        $_SESSION['TIPO'] = $usuario[0]->tipo;
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL . 'login');
    }

    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: ' . BASE_URL . 'login');
            die();
        }    
    }

    public function autorizacion() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['TIPO'];
    }
}