<?php

class Cliente {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=gestionestacionamiento;charset=utf8', 'root', '');
       
    }
    public function getAllCliente() {
        $query = $this->db->prepare("SELECT * FROM cliente");
         $query->execute();
 
         $response = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
         
         return $response;
     }


     public function sendClient($nombre, $telefono, $dni) {
        $query = $this->db->prepare("INSERT INTO cliente (nombre, telefono, dni) VALUES(?,?,?)");
        $query->execute([$nombre, $telefono, $dni]);
    }

}

?>