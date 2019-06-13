<?php
include_once ('./../src/setup.php');
try {
    $dbh = new PDO('mysql:host=nombdd.mysql.db;dbname=nombdd', 'userserveur', 'pwdbdd');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$data = [
    "level" => $_POST["level"] ? intval($_POST["level"], 10) : null,
    "text" => $_POST["text"] ?: null,
    "id" => $_POST["id"] ?: null,
];

$skillRepository = new \Skill\SkillRepository($dbh);


if (null !== $data["level"] &&  null !== $data["text"] &&  null !== $data["id"]) {
    $skillRepository->update($data);
}