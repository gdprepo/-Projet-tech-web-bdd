<?php
include_once ('./../src/setup.php');
try {
    $dbh = new PDO('mysql:host=nombdd.mysql.db;dbname=nombdd', 'userserveur', 'pwdbdd');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$data = [
    "lastname" => $_POST["lastname"],
    "firstname" => $_POST["firstname"],
    "picture_url" => $_POST['picture_url'] ?: null,
];

$userRepository = new \User\UserRepository($dbh);


if (null !== $data["lastname"] &&  null !== $data["firstname"] &&  null !== $data["picture_url"]) {
    $userRepository->update($data);
}



