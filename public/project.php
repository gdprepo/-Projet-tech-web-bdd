<?php 
include_once ('./../src/setup.php');
include_once './layout/structure.php';
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$projetRepository = new \Projet\ProjetRepository($dbh);
$userRepository = new \User\UserRepository($dbh);

$projet = $projetRepository->fetchAll();
$user = $userRepository->fetch();
$user["projet"] = $projet;


loadStructure('./view/project.php', 'projets', $user);


?>



