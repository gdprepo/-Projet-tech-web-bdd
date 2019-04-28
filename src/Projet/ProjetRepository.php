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
            $stmt = $this->dbh->prepare("INSERT INTO realisation VALUES (:titleValue, :pictureValue, :logicielValue, :lienValue)");


            $stmt->bindValue(':titleValue', 'title', PDO::PARAM_STR);
            $stmt->bindValue(':pictureValue', 'picture', PDO::PARAM_STR);
            $stmt->bindValue(':logicielValue', 'logiciel', PDO::PARAM_STR);
            $stmt->bindValue(':lienValue', 'lien', PDO::PARAM_STR);
            var_dump($stmt->execute());

        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}