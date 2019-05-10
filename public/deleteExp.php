<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');
$experienceRepository = new \Experience\ExperienceRepository($dbh);
 
$data = [
    "id" => $_POST["id"] ?: null
];

if ($data["id"] !== null) {
    $experienceRepository->delete($data["id"]);
}
