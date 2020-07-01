<?php
include_once './../src/setup.php';
include_once './layout/structure.php';

$dsn = 'mysql:dbname=gdbdd;host=127.0.0.1';
$user = 'projet-dev';
$password = 'dev';

try {
        $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
        print "Erreur OO !: " . $e->getMessage() . "<br/>";
        die();
}

$userRepository = new \User\UserRepository($dbh);
$skillRepository = new \Skill\SkillRepository($dbh);
$experienceRepository = new \Experience\ExperienceRepository($dbh);

$user = $userRepository->fetch();
$skills = $skillRepository->fetchAll();
$experience = $experienceRepository->fetchAll();

$user["experience"] = $experience;
$user["skills"] = $skills;



loadStructure('./view/accueil.php', 'Accueil - CV Gabin.D', $user);
