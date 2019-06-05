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
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/index.php"><?php echo $user["firstname"]; echo $user["lastname"];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/index.php">Acceuil<span class="sr-only">(current)</span></a>
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
        <li class="nav-item active">
          <a class="nav-link" href="/admin.php">Admin Login</a>
        </li>';
      } else if ($webOS){

      }

      session_start();
      if ($_SESSION["admin"] === true ||  $_SESSION["newsession"]===true) {
        echo '
        <li class="nav-item active">
          <a style="color:#FF0000" class="nav-link" href="/exitAdmin.php">Exit Admin</a>
        </li>';
        
      } else {

      }
        ?>

    </ul>
  </div>
</nav>