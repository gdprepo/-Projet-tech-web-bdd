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
    "level" => $_POST["level"] ? intval($_POST["level"], 10) : null,
    "text" => $_POST["text"] ?: null,
    "id" => $_POST["id"] ?: null,
];

$skillRepository = new \Skill\SkillRepository($dbh);

if (null !== $data["level"] &&  null !== $data["text"] &&  null !== $data["id"]) {
    header('Location: /index.php');
    $skillRepository->update($data);
    die();
}