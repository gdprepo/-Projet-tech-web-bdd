<?php
include_once ('./../src/setup.php');
try {
    $dbh = new PDO('mysql:host=gdcvonliphgdbdd.mysql.db;dbname=gdcvonliphgdbdd', 'gdcvonliphgdbdd', 'Gabin170');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$data = [
    "activite" => $_POST["activite"] ?: null,
    "text" => $_POST["text"] ?: null
];

$rubriqueRepository = new \Rubrique\RubriqueRepository($dbh);


if (null !== $data["activite"] &&  null !== $data["text"]) {
    $rubriqueRepository->update($data);
}




