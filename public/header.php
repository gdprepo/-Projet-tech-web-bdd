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

$theme = $_GET['theme'] ?? $_SESSION['theme'] ?? false;

if ($theme)
{
  $theme = (int) $theme;
  $_SESSION['theme'] = $theme;
  echo '<style>body{background-image:url("./bg/bg' . $theme . '.jpg")}</style>';
} else {
  $theme = 0;
  $_SESSION['theme'] = $theme;
  echo '<style>body{background-image:url("./bg/bg' . $theme . '.jpg")}</style>';
}

$userRepository = new \User\UserRepository($dbh);
$user = $userRepository->fetch();



$admin = $_SESSION["admin"] ?? false;
$newsession = $_SESSION["newsession"] ?? false;
?>


<div style="z-index: 2; position: relative" class="animated slideInDown text-white">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/index.php"><?php echo $user["firstname"]; echo $user["lastname"];?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav w-100">
        <li class="nav-item active">
          <a class="nav-link" href="/index.php">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/detailed-presentation.php">Présentation détaillée </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/project.php">Projets </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/contact.php">Contact</a>
        </li>
      <?php
        $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
        $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
        $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
        $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

        if ($iPod || $iPhone || $iPad || $Android) {
          echo '
          <li class="nav-item active animated jackInTheBox">
            <a class="nav-link" href="/admin.php">Admin Login</a>
          </li>';
        } else if ($webOS){

        }

        if ($admin ||  $newsession) {
          echo '
          <li class="nav-item active animated jackInTheBox">
            <a style="color:#FF0000" class="nav-link" href="/exitAdmin.php">Exit Admin</a>
          </li>';
          
        } else {
          if ($iPod || $iPhone || $iPad || $Android) {
            echo '
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Themes </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="?theme=1">Theme 1</a>
              <a class="dropdown-item" href="?theme=2">Theme 2</a>
              <a class="dropdown-item" href="?theme=3">Theme 3</a>
              <a class="dropdown-item" href="?theme=0">Sans Theme</a>
              </div>
            </li>
        
          ';
          } else {
            echo '
              <li class="nav-item dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Themes </a>
                <div style="z-index: 100" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="?theme=1">Theme 1</a>
                <a class="dropdown-item" href="?theme=2">Theme 2</a>
                <a class="dropdown-item" href="?theme=3">Theme 3</a>
                <a class="dropdown-item" href="?theme=0">Sans Theme</a>
                </div>

              </li>
          
            ';


          }

        }
        
          ?>
      </ul>
    </div>
  </nav>

  <script>
    $("#bg1").click(function() {
      alert('Theme1 activé');
      $('body').css("background-image", 'url("./bg/bg1.jpg")');
    })

    $("#bg2").click(function() {
      alert('Theme2 activé');
      $('body').css("background-image", 'url("./bg/bg2.jpg")');
    })

    $("#bg3").click(function() {
      alert('Theme3 activé');
      $('body').css("background-image", 'url("./bg/bg3.jpg")');
    })

    $("#bgNull").click(function() {
      alert('Sans Theme');
      $('body').css("background-image", "");
    })

  </script>

</div>