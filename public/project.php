<?php 
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$projetRepository = new \Projet\ProjetRepository($dbh);

$projet = $projetRepository->fetchAll();
$data = ["projet" => $projet]

?>



<!DOCTYPE html>
<html>
  <head>
    <title>Accueil</title>
    <?php include_once "include-headers.html" ?>
  </head>
  <body>
    <?php include_once "header.php" ?>
    <div class="content">
      <div>
        <h1>Projets / Réalisations</h1>
          <ul>
            <?php foreach ($data["projet"] as $skill): ?>
              <li> 
                <h3><?php echo $skill["id"];?> - <?php echo $skill["title"]; ?></h3>
                <a href="<?php echo $skill["lien"]; ?>">
                <img src="<?php echo $skill["picture"] ?>" style="height:250px; width:400px;margin-left:35%;margin-right:auto;"><img>
                </a>
                <p><?php echo $skill["logiciel"]; ?></p>
                <a href="<?php echo $skill["lien"]; ?>">lien vers le projet</a>
              </li>
            <?php endforeach; ?>
            <li>
              <form action="/addProjet.php" method="post">
                <div>
                <label>Titre</label>
                  <input type="text" name="title">
                  </div>
                <div>
                  <label>Lien du projet</label>
                  <input type="text" name="lien">
                </div>
                <div>
                  <label>Image</label>
                  <input type="text" name="picture">
                </div>
                <div>
                  <label>Logiciel</label>
                  <input type="text" name="logiciel">
                </div>
                <div>
                  <button type="submit" value="Ok">Ok</button>
                </div>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php include_once "footer.php" ?>
  </body>
</html>