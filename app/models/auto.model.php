<?php

class Autos{

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=gestionestacionamiento;charset=utf8', 'root', '');
       
    }

    public function sendVehicle($patente, $entrada, $cliente, $estacionamiento) {
        $query = $this->db->prepare("INSERT INTO autos (patente, entrada, cliente, estacionamiento) VALUES(?,?,?,?)");
        $query->execute([$patente, $entrada, $cliente, $estacionamiento]);
        

    }

    public function getAllAutos() {
        $query = $this->db->prepare("SELECT * FROM autos WHERE salida IS NULL");
         $query->execute();
 
         $response = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
         
         return $response;
     }

     public function selectId($id) {
        $query = $this->db->prepare('SELECT * FROM autos  WHERE id=?');
        $query->execute([$id]);
        $response = $query->fetch(PDO::FETCH_OBJ);
        return $response;
    }

    public function updateVehicle($salida, $id) {
        $query = $this->db->prepare('UPDATE autos SET salida = ? WHERE id = ?');
        $query->execute([$salida, $id]);
    }
    
}

?>