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

$data = [
    "activite" => $_POST["activite"] ?: null,
    "text" => $_POST["text"] ?: null
];

$rubriqueRepository = new \Rubrique\RubriqueRepository($dbh);


if (null !== $data["activite"] &&  null !== $data["text"]) {
    header("Location: detailed-presentation.php");
    $rubriqueRepository->update($data);
    die();
}




