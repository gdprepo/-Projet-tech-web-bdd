<?php
include_once ('./../src/setup.php');

$dsn = 'mysql:dbname=gdbdd;host=127.0.0.1';
$user = 'projet-dev';
$password = 'dev';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
$parcourRepository = new \Parcour\ParcourRepository($dbh);
 
$data = [
    "id" => $_POST["id"] ?: null
];

if ($data["id"] !== null) {
    header("Location: detailed-presentation.php");
    $parcourRepository->delete($data["id"]);
    die();
}
