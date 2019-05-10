<?php
include_once './../src/setup.php';
include_once './layout/structure.php';

$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$userRepository = new \User\UserRepository($dbh);
$skillRepository = new \Skill\SkillRepository($dbh);
$experienceRepository = new \Experience\ExperienceRepository($dbh);

$user = $userRepository->fetch();
$skills = $skillRepository->fetchAll();
$experience = $experienceRepository->fetchAll();

$user["experience"] = $experience;
$user["skills"] = $skills;

loadStructure('./view/accueil.php', 'acceuil', $user);