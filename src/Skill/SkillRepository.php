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
            $stmt->execute();
            if ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/detailed-presentation.php") {
                header('Location: detailed-presentation.php'); 
            } elseif ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/index.php"){
                header('Location: index.php'); 
            }
                exit;
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }

    public function delete($id) {
        try {
            $stmt = $this->dbh->prepare("DELETE FROM skills WHERE id =  :id ");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            if ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/detailed-presentation.php") {
                header('Location: detailed-presentation.php'); 
            } elseif ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/index.php"){
                header('Location: index.php'); 
            }
            exit;
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }

    public function update(array $data) {
        try {
            $stmt = $this->dbh->prepare('UPDATE skills SET text = " '.$_POST['text'].' ", level = " '.$_POST['level'].' " WHERE id=" '.$_POST['id'].' "');
            $stmt->execute();
            if ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/detailed-presentation.php") {
                header('Location: detailed-presentation.php'); 
            } elseif ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/index.php"){
                header('Location: index.php'); 
            }
            exit;
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}