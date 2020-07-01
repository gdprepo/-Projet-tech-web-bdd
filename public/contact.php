<?php 
include_once './../src/setup.php';
include_once './layout/structure.php';

$dsn = 'mysql:dbname=gdbdd;host=127.0.0.1';
$user = 'projet-dev';
$password = 'dev';

try {
  $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}

$userRepository = new \User\UserRepository($dbh);
$user = $userRepository->fetch();
$user["contact"] = [
  "name" => "Nom :",
  "mail" => "E-mail :",
  "message" => "Message :",
];

loadStructure('view/contact.php', 'Contact | CV Gabin.D', $user);
