<?php
include_once ('./../src/setup.php');
try {
    $dbh = new PDO('mysql:host=gdcvonliphgdbdd.mysql.db;dbname=gdcvonliphgdbdd', 'gdcvonliphgdbdd', 'Gabin170');
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
    $expRepository->insert($data);
}



