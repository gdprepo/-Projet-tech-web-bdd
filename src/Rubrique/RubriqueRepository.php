<?php

namespace Rubrique;

class RubriqueRepository {

    private $dbh = null;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function fetchAll() {
        $stmt = $this->dbh->prepare('SELECT * from free_space');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert(array $data ) {
        try {
            $stmt = $this->dbh->prepare("INSERT INTO free_space (activite, text) VALUES (:activite, :text)");
            $stmt->bindParam(':activite', $data["activite"]);
            $stmt->bindParam(':text', $data["text"]);
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }

    public function update(array $data) {
        try {
            $stmt = $this->dbh->prepare('UPDATE free_space SET activite = " '.$_POST['activite'].' ", text = " '.$_POST['text'].' " WHERE id=" '.$_POST['id'].' "');
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }

    public function delete($id) {
        try {
            $stmt = $this->dbh->prepare("DELETE FROM free_space WHERE id =  :id ");
            $stmt->bindParam(':id', $id);
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}