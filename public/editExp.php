<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$data = [
    "start_date" => $_POST["start_date"],
    "end_date" => $_POST["end_date"],
    "title" => $_POST["title"],
    "description" => $_POST["description"],
    "organisme" => $_POST["organisme"],
];

$expRepository = new \Experience\ExperienceRepository($dbh);


if (null !== $data["start_date"] &&  null !== $data["end_date"] &&  null !== $data["title"] &&  null !== $data["description"] &&  null !== $data["organisme"]) {
    $expRepository->update($data);
}




