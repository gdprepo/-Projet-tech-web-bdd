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

    public function insert(array $data ) {
        try {
            $stmt = $this->dbh->prepare('INSERT INTO realisation (title, picture, logiciel, lien) VALUES (:title, :picture, :logiciel, :lien)');
            $stmt->bindParam(':title', $data["title"]);
            $stmt->bindParam(':picture', $data["picture"]);
            $stmt->bindParam(':logiciel', $data["logiciel"]);
            $stmt->bindParam(':lien', $data["lien"]);

            var_dump($stmt->execute());

        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}