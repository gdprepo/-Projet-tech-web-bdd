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
        <div>
          <button id="demo" onclick="myFonction()" class="btn-admin btn-danger">Admin MODE</button>
        </div>
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
            <div id="projet" style="display:none;">    
              <li>
                <form action="/addProjet.php" method="post">
                    <div>
                      <label>Titre</label>
                      <input type="title" name="title">
                    </div>
                    <div>
                      <label>Picture :</label>
                      <input type="picture" name="picture">
                    </div>
                    <div>
                      <label>Titre</label>
                      <input type="logiciel" name="logiciel">
                    </div>
                    <div>
                      <label>Description</label>
                      <input type="lien" name="lien">
                    </div>
                    <div>
                      <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
                    </div>
                  </div>
                </form>
              </li>
            </div>
          </ul>
        </div>
      </div>
    </div>
    <?php include_once "footer.php" ?>
  </body>

    <script>
      document.getElementById("demo").onclick = function() {myFunction()};
      
      function myFunction() {
        if (document.getElementById("projet").style.display == 'none')
        {
            document.getElementById("projet").style.display = 'block';
        }
        else 
        {
            document.getElementById("projet").style.display = 'none';
        }
      }
    </script>




</html>