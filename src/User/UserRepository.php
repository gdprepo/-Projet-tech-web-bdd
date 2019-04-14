<?php

namespace User;

class UserRepository {

    private $dbh = null;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function fetch() {
        $stmt = $this->dbh->prepare('SELECT * from user');
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    } 
}