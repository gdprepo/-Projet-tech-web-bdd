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

    public function delete($id) {
        try {
            $stmt = $this->dbh->prepare("DELETE FROM study WHERE id =  :id ");
            $stmt->bindParam(':id', $id);
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }

    public function update(array $data ) {
        try {
            $stmt = $this->dbh->prepare('UPDATE study SET name = " '.$_POST['name'].' ", description = " '.$_POST['description'].' ", start_date = " '.$_POST['start_date'].'", end_date = " '.$_POST['end_date'].' " WHERE id=" '.$_POST['id'].' "');
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}