<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$data = [
    "title" => $_POST["title"] ?: null,
    "picture" => $_POST['picture'] ?: null,
    "logiciel" => $_POST["logiciel"] ?: null,
    "lien" => $_POST["lien"] ?: null,
];

$projetRepository = new \Projet\ProjetRepository($dbh);


if (null !== $data["title"] &&  null !== $data["picture"] &&  null !== $data["logiciel"] &&  null !== $data["lien"]) {
    $projetRepository->insert($data);
}



