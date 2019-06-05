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
            if ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/detailed-presentation.php") {
                header('Location: detailed-presentation.php'); 
            } elseif ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/index.php"){
                header('Location: index.php'); 
            } elseif ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/project.php") {
                header('Location: project.php');
            } elseif ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/contact.php") {
                header('Location: contact.php');
            }
            exit;
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}