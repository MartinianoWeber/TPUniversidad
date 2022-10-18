<?php


class  gananciasModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=gestionestacionamiento;charset=utf8', 'root', '');
    }

    public function sendGanancia($autos, $valorHora, $totalGanado, $horas) {
        $query = $this->db->prepare("INSERT INTO ganancias (autos, valorHora, totalGanado, horas) VALUES(?,?,?,?)");
        $query->execute([$autos, $valorHora, $totalGanado, $horas]);
    }

    public function getAllGanancias() {
        $query = $this->db->prepare("SELECT * FROM ganancias");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}


?>