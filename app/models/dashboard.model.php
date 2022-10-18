<?php


class  dashboardModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=gestionestacionamiento;charset=utf8', 'root', '');
    }

    public function getHistory(){
        $query = $this->db->prepare("SELECT * FROM autos E INNER JOIN cliente ES ON E.cliente = ES.id");
         $query->execute();
         $response = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
         return $response;
    }
}


?>