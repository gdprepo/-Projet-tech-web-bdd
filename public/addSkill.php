<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$data = [
    "level" => $_POST["level"] ? intval($_POST["level"], 10) : null,
    "text" => $_POST["text"] ?: null,
    "id" => $_POST["id"] ?: null,
];

$skillRepository = new \Skill\SkillRepository($dbh);


if (null !== $data["level"] &&  null !== $data["text"] &&  null !== $data["id"]) {
    $skillRepository->insert($data, $id);
}



