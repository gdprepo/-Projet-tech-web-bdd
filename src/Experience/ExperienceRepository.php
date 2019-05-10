<?php

namespace Experience;

class ExperienceRepository {

    private $dbh = null;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function fetchAll() {
        $stmt = $this->dbh->prepare('SELECT * from professionnal');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert(array $data ) {
        try {
            $stmt = $this->dbh->prepare("INSERT INTO professionnal (start_date, end_date, title, description, organisme) VALUES (:start_date, :end_date, :title, :description, :organisme)");
            $stmt->bindParam(':start_date', $data["start_date"]);
            $stmt->bindParam(':end_date', $data["end_date"]);
            $stmt->bindParam(':title', $data["title"]);
            $stmt->bindParam(':description', $data["description"]);
            $stmt->bindParam(':organisme', $data["organisme"]);
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }

    public function delete($id) {
        try {
            $stmt = $this->dbh->prepare("DELETE FROM professionnal WHERE id =  :id ");
            $stmt->bindParam(':id', $id);
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }

    public function update(array $data ) {
        try {
            $stmt = $this->dbh->prepare('UPDATE professionnal SET start_date = " '.$_POST['start_date'].' ", end_date = " '.$_POST['end_date'].' ", title = " '.$_POST['title'].'", description = " '.$_POST['description'].' ", organisme = " '.$_POST['organisme'].' " WHERE id=" '.$_POST['id'].' "');
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}