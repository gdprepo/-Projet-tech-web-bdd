<?php

namespace Parcour;

class ParcourRepository {

    private $dbh = null;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function fetchAll() {
        $stmt = $this->dbh->prepare('SELECT * from study');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert(array $data ) {
        try {
            $stmt = $this->dbh->prepare("INSERT INTO study (name, description, start_date, end_date) VALUES (:name, :description, :start_date, :end_date)");
            $stmt->bindParam(':name', $data["name"]);
            $stmt->bindParam(':description', $data["description"]);
            $stmt->bindParam(':start_date', $data["start_date"]);
            $stmt->bindParam(':end_date', $data["end_date"]);
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}