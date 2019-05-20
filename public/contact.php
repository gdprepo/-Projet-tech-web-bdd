<?php 
include_once './../src/setup.php';
include_once './layout/structure.php';

try {
  $dbh = new PDO('mysql:host=gdcvonliphgdbdd.mysql.db;dbname=gdcvonliphgdbdd', 'gdcvonliphgdbdd', 'Gabin170');
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

loadStructure('view/contact.php', 'Contact', $user);
