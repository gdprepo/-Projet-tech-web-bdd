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
$skillRepository = new \Rubrique\RubriqueRepository($dbh);

$data = [
    "id" => $_POST["id"] ?: null
];

if ($data["id"] !== null) {
    $skillRepository->delete($data["id"]);
}
