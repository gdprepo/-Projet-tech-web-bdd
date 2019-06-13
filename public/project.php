<?php 
include_once ('./../src/setup.php');
include_once './layout/structure.php';

try {
        $dbh = new PDO('mysql:host=nombdd.mysql.db;dbname=nombdd', 'userserveur', 'pwdbdd');
} catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
}

$projetRepository = new \Projet\ProjetRepository($dbh);
$userRepository = new \User\UserRepository($dbh);

$projet = $projetRepository->fetchAll();
$user = $userRepository->fetch();
$user["projet"] = $projet;


loadStructure('./view/project.php', 'Portfolio | CV Gabin.D', $user);


?>



