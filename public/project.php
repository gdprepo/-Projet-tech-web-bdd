<?php 
include_once ('./../src/setup.php');
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

$projetRepository = new \Projet\ProjetRepository($dbh);
$userRepository = new \User\UserRepository($dbh);

$projet = $projetRepository->fetchAll();
$user = $userRepository->fetch();
$user["projet"] = $projet;


loadStructure('./view/project.php', 'Portfolio | CV Gabin.D', $user);


?>



