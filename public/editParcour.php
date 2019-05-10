<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$data = [
    "name" => $_POST["name"],
    "description" => $_POST["description"],
    "start_date" => $_POST["start_date"],
    "end_date" => $_POST["end_date"],
];

$parcourRepository = new \Parcour\ParcourRepository($dbh);


if (null !== $data["name"] &&  null !== $data["description"] &&  null !== $data["start_date"] &&  null !== $data["end_date"]) {
   $parcourRepository->update($data);
}




