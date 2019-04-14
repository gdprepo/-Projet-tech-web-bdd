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
}