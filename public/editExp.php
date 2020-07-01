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
    "start_date" => $_POST["start_date"],
    "end_date" => $_POST["end_date"],
    "title" => $_POST["title"],
    "description" => $_POST["description"],
    "organisme" => $_POST["organisme"],
];

$expRepository = new \Experience\ExperienceRepository($dbh);


if (null !== $data["start_date"] &&  null !== $data["end_date"] &&  null !== $data["title"] &&  null !== $data["description"] &&  null !== $data["organisme"]) {
    header("Location: index.php");
    $expRepository->update($data);
    die();
}




