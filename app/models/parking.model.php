<?php


class  parkingModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=gestionestacionamiento;charset=utf8', 'root', '');
       
    }

    public function getAllData() {
       $query = $this->db->prepare("SELECT * FROM estacionamientos");
        $query->execute();

        $response = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $response;
    }
    public function sendData($estacionamiento) {
        $query = $this->db->prepare("INSERT INTO estacionamientos (numeroEstacionamiento, libre) VALUES (?,?)");
         $query->execute([$estacionamiento, true]);
 
         $response = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
         
         return $response;
     }

        public function deleteParking($id) {
            $query = $this->db->prepare("DELETE FROM estacionamientos WHERE numeroEstacionamiento=?");
            $query->execute([$id]);
}

public function updateParking($numeroEstacionamiento, $libre) {
    $query = $this->db->prepare('UPDATE estacionamientos SET libre = ? WHERE numeroEstacionamiento = ?');
    $query->execute([$libre, $numeroEstacionamiento]);
}


}
