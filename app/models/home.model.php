<?php


class  HomeModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=gestionestacionamiento;charset=utf8', 'root', '');
       
    }

    public function getAllData() {
       $query = $this->db->prepare("SELECT * FROM maintabla");
        $query->execute();

        $response = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $response;
    }   
    
}



?>