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
        ["titre" => "Projet 1", "picture" => "https://st2.depositphotos.com/6831718/10851/v/950/depositphotos_108517528-stock-illustration-project-stats-icon-project-stats.jpg", "texte" => "Résumé du projet deiojoijoijoijoijoj"],
        ["titre" => "Projet 2", "picture" => "https://st2.depositphotos.com/6831718/10851/v/950/depositphotos_108517528-stock-illustration-project-stats-icon-project-stats.jpg", "texte" => "Résumé du projet deiojoijoijoijoijoj"],
        ["titre" => "Projet 3", "picture" => "https://st2.depositphotos.com/6831718/10851/v/950/depositphotos_108517528-stock-illustration-project-stats-icon-project-stats.jpghttps://www.pme-web.com/wp-content/uploads/bfi_thumb/Outils-Gestion-de-projet-nbbkudn0pflrlumlok5nm2rumkqjeawlw2uxsd3ztk.png", "texte" => "Résumé du projet deiojoijoijoijoijoj"],      ]
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
              <p><?php echo $skill["texte"]; ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <?php include_once "footer.php" ?>
  </body>
</html>