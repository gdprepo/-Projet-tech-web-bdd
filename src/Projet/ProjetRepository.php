<?php

namespace Projet;

class ProjetRepository {

    private $dbh = null;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function fetchAll() {
        $stmt = $this->dbh->prepare('SELECT * from realisation');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    } 
}