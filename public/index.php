<?php
include_once './../src/setup.php';
include_once './layout/structure.php';

try {
        $dbh = new PDO('mysql:host=nombdd.mysql.db;dbname=nombdd', 'userserveur', 'pwdbdd');
} catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
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
