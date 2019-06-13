<?php
include_once ('./../src/setup.php');
try {
    $dbh = new PDO('mysql:host=nombdd.mysql.db;dbname=nombdd', 'userserveur', 'pwdbdd');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$data = [
    "name" => $_POST["name"],
    "description" => $_POST["description"],
    "start_date" => $_POST["start_date"],
    "end_date" => $_POST["end_date"],
];

$parcourRepository = new \Parcour\ParcourRepository($dbh);


if (null !== $data["name"] &&  null !== $data["description"] &&  null !== $data["start_date"] &&  null !== $data["end_date"]) {
    $parcourRepository->insert($data);
}



