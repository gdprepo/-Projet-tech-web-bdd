<?php

namespace Experience;

class ExperienceRepository {

    private $dbh = null;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function fetchAll() {
        $stmt = $this->dbh->prepare('SELECT * from professionnal');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    } 
}