<?php
include_once ('./../src/setup.php');
try {
    $dbh = new PDO('mysql:host=nombdd.mysql.db;dbname=nombdd', 'userserveur', 'pwdbdd');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
$skillRepository = new \Rubrique\RubriqueRepository($dbh);

$data = [
    "id" => $_POST["id"] ?: null
];

if ($data["id"] !== null) {
    $skillRepository->delete($data["id"]);
}
