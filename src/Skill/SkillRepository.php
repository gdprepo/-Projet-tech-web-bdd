<?php

namespace Skill;

class SkillRepository {

    private $dbh = null;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function fetchAll() {
        $stmt = $this->dbh->prepare('SELECT * from skills');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    } 

    public function insert(array $data ) {
        try {
            $stmt = $this->dbh->prepare("INSERT INTO skills (text, level) VALUES (:text, :level)");
            $stmt->bindParam(':text', $data["text"]);
            $stmt->bindParam(':level', $data["level"]);
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}