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
    "lastname" => $_POST["lastname"],
    "firstname" => $_POST["firstname"],
    "picture_url" => $_POST['picture_url'] ?: null,
];

$userRepository = new \User\UserRepository($dbh);


if (null !== $data["lastname"] &&  null !== $data["firstname"] &&  null !== $data["picture_url"]) {
    $userRepository->update($data);
}



