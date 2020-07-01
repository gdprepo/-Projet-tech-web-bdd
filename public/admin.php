<?php

ob_start();
include_once './../src/setup.php';
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

$userRepository = new \User\UserRepository($dbh);
$user = $userRepository->fetch();

$index=false;
$errorMsg = "";
$_SESSION["login"] = false;
$validUser = $_SESSION["login"];
if(isset($_POST["sub"])) {
  $validUser = $_POST["username"] == "admin" && $_POST["password"] == "MOTDEPASSE";
  if(!$validUser) {
    $errorMsg = "Invalid username or password.";
    $_SESSION["admin"]=false;
    $_SESSION["newsession"]=false;
  } else {
    $validUser = true;
    $index=true;
    $_SESSION["admin"]=true;
    $_SESSION["newsession"]=true;
  }
}
if($validUser) {
    $_SESSION["admin"]=true;
    $_SESSION["newsession"]=false;
    header("Location: /index.php"); die();
} else {
  $_SESSION["admin"]=false;
  $_SESSION["newsession"]=false;
}
ob_end_flush();

?>
<!DOCTYPE html>

<html>
  <head>
    <title>Login</title>
    <?php include_once "include-headers.html" ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid main-container">
      <form class="form-signin" name="input" method="post" action="">
        <h1 class="h3 mb-3 font-weight-normal">Admin Mode</h1>
        <label>
          <a href="./index.php">Retour a l'Accueil</a>
        </label>
        <input name="username" type="text" id="username" class="form-control" placeholder="Username" required="" autofocus="">
        <input style="" name="password" type="password" id="password" class="form-control" placeholder="Password" required="">
        <div class="error"><?= $errorMsg ?></div>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir
          </label><br>
        </div>
        <button style="" class="btn-lg btn-primary btn-block" value="Entrer" name="sub" type="submit">Sign in</button>
      </form>
    </div>
  </body>
</html>
