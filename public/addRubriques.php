<?php
include_once ('./../src/setup.php');
try {
    $dbh = new PDO('mysql:host=nombdd.mysql.db;dbname=nombdd', 'userserveur', 'pwdbdd');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$data = [
    "activite" => $_POST["activite"] ?: null,
    "text" => $_POST["text"] ?: null
];

$skillRepository = new \Rubrique\RubriqueRepository($dbh);


if (null !== $data["activite"] &&  null !== $data["text"]) {
    $skillRepository->insert($data);
}



