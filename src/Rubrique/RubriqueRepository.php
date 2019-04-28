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
}