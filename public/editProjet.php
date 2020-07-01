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
    "title" => $_POST["title"],
    "picture" => $_POST['picture'] ?: null,
    "logiciel" => $_POST["logiciel"],
    "lien" => $_POST["lien"],
];

$projetRepository = new \Projet\ProjetRepository($dbh);


if (null !== $data["title"] &&  null !== $data["picture"] &&  null !== $data["logiciel"] &&  null !== $data["lien"]) {
    header("Location: project.php");
    $projetRepository->update($data);
    die();
}



