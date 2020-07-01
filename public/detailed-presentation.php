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

$skillRepository = new \Skill\SkillRepository($dbh);
$experienceRepository = new \Experience\ExperienceRepository($dbh);
$parcourRepository = new \Parcour\ParcourRepository($dbh);
$rubriqueRepository = new \Rubrique\RubriqueRepository($dbh);
$userRepository = new \User\UserRepository($dbh);

$skills = $skillRepository->fetchAll();
$experience = $experienceRepository->fetchAll();
$parcour = $parcourRepository->fetchAll();
$rubrique = $rubriqueRepository->fetchAll();
$user = $userRepository->fetch();

$user["experience"] = $experience;
$user["skills"] = $skills;
$user["parcours"] = $parcour;
$user["rubrique"] = $rubrique;


loadStructure('./view/presentation.php', 'Presentation | CV Gabin.D', $user);

?>