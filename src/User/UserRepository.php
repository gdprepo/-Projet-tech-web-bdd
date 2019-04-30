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

    public function insert(array $data ) {
        try {
            $stmt = $this->dbh->prepare("REPLACE INTO user (lastname, firstname, picture_url) VALUES (:lastname, :firstname, :picture_url)");
            $stmt = $this->dbh->prepare('SELECT * from user');
            $stmt = $this->dbh->exec('UPDATE user SET lastname = " '.$_POST['lastname'].' ", firstname = " '.$_POST['firstname'].' ", picture_url = " '.$_POST['picture_url'].'" ');
            $stmt->bindParam(':lastname', $data["lastname"]);
            $stmt->bindParam(':firstname', $data["firstname"]);
            $stmt->bindParam(':picture_url', $data["picture_url"]);
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}