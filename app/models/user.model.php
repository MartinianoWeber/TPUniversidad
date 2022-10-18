<?php


class  userModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=gestionestacionamiento;charset=utf8', 'root', '');
    }

    public function getUser($user) {
       $query = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $query->execute([$user]);

        return $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
       
    }
    public function registroUser($tipo, $user, $hash) {
        $query = $this->db->prepare("INSERT INTO usuarios (tipo, usuario, contraseña) VALUES (?,?,?)");
         $query->execute([$tipo, $user, $hash]);
             }
}



?>