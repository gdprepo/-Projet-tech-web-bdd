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
          <label>Nom :</label> <?php echo $data["firstname"]; ?><br>
          <label>Prenom :</label> <?php echo $data["lastname"]; ?><br>
          <img src="<?php echo $data["picture_url"] ?>" style="height:300px ;margin-left:40%;margin-right:auto;"><img>
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