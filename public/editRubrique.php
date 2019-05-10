<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$data = [
    "activite" => $_POST["activite"] ?: null,
    "text" => $_POST["text"] ?: null
];

$rubriqueRepository = new \Rubrique\RubriqueRepository($dbh);


if (null !== $data["activite"] &&  null !== $data["text"]) {
    $rubriqueRepository->update($data);
}




