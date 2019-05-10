<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$data = [
    "title" => $_POST["title"],
    "picture" => $_POST['picture'] ?: null,
    "logiciel" => $_POST["logiciel"],
    "lien" => $_POST["lien"],
];

$projetRepository = new \Projet\ProjetRepository($dbh);



if (null !== $data["name"] &&  null !== $data["description"] &&  null !== $data["start_date"] &&  null !== $data["end_date"]) {
    $parcourRepository->update($data);
}




