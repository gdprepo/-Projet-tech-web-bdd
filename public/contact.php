<?php 
include_once './../src/setup.php';
include_once './layout/structure.php';

$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$userRepository = new \User\UserRepository($dbh);
$user = $userRepository->fetch();
$user["contact"] = [
  "name" => "Nom :",
  "mail" => "E-mail :",
  "message" => "Message :",
];

loadStructure('view/contact.php', 'Contact', $user);
