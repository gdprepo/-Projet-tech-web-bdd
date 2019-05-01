<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$data = [
    "lastname" => $_POST["lastname"],
    "firstname" => $_POST["firstname"],
    "picture_url" => $_POST['picture_url'] ?: null,
];

$userRepository = new \User\UserRepository($dbh);


if (null !== $data["lastname"] &&  null !== $data["firstname"] &&  null !== $data["picture_url"]) {
    $userRepository->update($data);
}



