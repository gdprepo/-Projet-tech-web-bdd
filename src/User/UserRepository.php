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

    public function update(array $data) {
        try {
            $stmt = $this->dbh->prepare('UPDATE user SET lastname = " '.$_POST['lastname'].' ", firstname = " '.$_POST['firstname'].' ", picture_url = " '.$_POST['picture_url'].'" ');
            $stmt->execute();
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}