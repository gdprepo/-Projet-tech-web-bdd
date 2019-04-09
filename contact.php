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
      "picture_url" => "https://static.wamiz.fr/images/news/facebook/article/age-adulte-acc-fb-5915c5fca3f43.jpg",
      "skills" => [
        ["name" => "Compétence 1", "level" => 28],
        ["name" => "Compétence 2", "level" => 72],
        ["name" => "Compétence 3", "level" => 148]
      ]
    ]
    ?>
    <?php include_once "header.php" ?>
    <div class="content">
      <h1>Présentation</h1>
      <div>
        <div>
          <label>Nom :</label> <?php echo $data["firstname"]; ?>
        </div>
        <div>
          <label>Prenom :</label> <?php echo $data["lastname"]; ?>
        </div>
        <div>
          <img src="<?php echo $data["picture_url"] ?>"><img>
        </div>
        <div>
          <h3>Compétence</h3>
          <ul>
            <?php foreach ($data["skills"] as $skill): ?>
            <li> 
              <p><?php echo $skill["name"]; ?></p>
              <p><?php echo $skill["level"]; ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <?php include_once "footer.php" ?>
  </body>
</html>