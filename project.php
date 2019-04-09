<!DOCTYPE html>
<html>
  <head>
    <title>Accueil</title>
    <?php include_once "include-headers.html" ?>
  </head
  <body>
  <?php 
    $data = [
      "firstname" => "Gabin",
      "lastname" => "Depaire",
      "picture_url" => "https://cdn2.iconfinder.com/data/icons/identificon/96/user-male-2-512.png",
      "projet" => [
        ["titre" => "Projet 1", "picture" => "https://st2.depositphotos.com/6831718/10851/v/950/depositphotos_108517528-stock-illustration-project-stats-icon-project-stats.jpg", "logiciel" => "Techno utilisé", "url" => "https://www.google.fr/"],
        ["titre" => "Projet 2", "picture" => "https://st2.depositphotos.com/6831718/10851/v/950/depositphotos_108517528-stock-illustration-project-stats-icon-project-stats.jpg", "logiciel" => "Techno utilisé", "url" => "https://www.google.fr/"],
        ["titre" => "Projet 3", "picture" => "https://st2.depositphotos.com/6831718/10851/v/950/depositphotos_108517528-stock-illustration-project-stats-icon-project-stats.jpg", "logiciel" => "Techno utilisé"], "url" => "https://www.google.fr/"],
    ]
    ?>
    <?php include_once "header.php" ?>
    <div class="content">
      <div>
        <h1>Projets / Réalisations</h1>
          <ul>
            <?php foreach ($data["projet"] as $skill): ?>
            <li> 
              <h3><?php echo $skill["titre"]; ?></h3>
              <img src="<?php echo $skill["picture"] ?>" style="height:300px;margin-left:40%;margin-right:auto;"><img>
              <p><?php echo $skill["logiciel"]; ?></p>
              <a href="<?php echo $skill["url"]; ?>">lien vers le projet</a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <?php include_once "footer.php" ?>
  </body>
</html>