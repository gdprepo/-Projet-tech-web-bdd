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

    public function insert(array $data ) {
        try {
            $stmt = $this->dbh->prepare("INSERT INTO free_space (activite, text) VALUES (:activite, :text)");
            $stmt->bindParam(':activite', $data["activite"]);
            $stmt->bindParam(':text', $data["text"]);
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
            $stmt = $this->dbh->prepare('UPDATE free_space SET activite = " '.$_POST['activite'].' ", text = " '.$_POST['text'].' " WHERE id=" '.$_POST['id'].' "');
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
            $stmt = $this->dbh->prepare("DELETE FROM free_space WHERE id =  :id ");
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
}