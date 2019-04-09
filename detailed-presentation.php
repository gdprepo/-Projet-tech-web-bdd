<!DOCTYPE html>
<html>
  <head>
    <title>Presentation Détaillée</title>
    <?php include_once "include-headers.html" ?>
  </head
  <body>
    <?php 
    $data = [
      "firstname" => "Gabin",
      "lastname" => "Depaire",
      "picture_url" => "https://cdn2.iconfinder.com/data/icons/identificon/96/user-male-2-512.png",
      "experience" => [
        ["titre" => "Titre 1", "debut" => 2009, "fin" => 2011, "exp" => "Resumé : diejiejdeifjiejfijiji "],
        ["titre" => "Titre 2", "debut" => 2012, "fin" => 2015, "exp" => "Resumé : diejiejdeifjiejfijiji "],
        ["titre" => "Titre 3", "debut" => 2016, "fin" => 2017, "exp" => "Resumé : diejiejdeifjiejfijiji "],
        ["titre" => "Titre 4", "debut" => 2018, "fin" => 2019, "exp" => "Resumé : diejiejdeifjiejfijiji "],
      ],
      "skills" => [
        ["name" => "Compétence 1", "level" => 28],
        ["name" => "Compétence 2", "level" => 72],
        ["name" => "Compétence 3", "level" => 148],
        ["name" => "Compétence 4", "level" => 148],
      ],
      "parcours" => [
        ["debut" => 2008, "fin" => 2009, "text" => "parcour texte 1"],
        ["debut" => 2009, "fin" => 2010, "text" => "parcour texte 2"],
        ["debut" => 2010, "fin" => 2011, "text" => "parcour texte 3"],
        ["debut" => 2011, "fin" => 2012, "text" => "parcour texte 4"],
      ],
      "rubrique" => [
        ["activite" => "Activité 1", "text" => "détails texte 1"],
        ["activite" => "Activité 2", "text" => "détails texte 1"],
        ["activite" => "Activité 3", "text" => "détails texte 1"],
        ["activite" => "Activité 4", "text" => "détails texte 1"],
      ],
      
    ]
    ?>
    <?php include_once "header.php" ?>
    <div class="content">
      <h1>Présentation Détaillée</h1>
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
          <h3>Experiences</h3>
          <ul>
            <?php foreach ($data["experience"] as $exp): ?>
            <li> 
              <p><?php echo $exp["titre"]; ?></p>
              <p><?php echo $exp["debut"]; ?> -
                <?php echo $exp["fin"]; ?><br>
                <?php echo $exp["exp"]; ?>
              </p><br>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div>
          <h3>Compétences</h3>
          <ul>
            <?php foreach ($data["skills"] as $skill): ?>
            <li> 
              <p><?php echo $skill["name"]; ?></p>
              <p><?php echo $skill["level"]; ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div>
          <h3>Rubriques Libres</h3>
          <ul>
            <?php foreach ($data["rubrique"] as $libre): ?>
            <li> 
              <p><?php echo $libre["activite"]; ?> :</p>
              <p><?php echo $libre["text"]; ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <?php include_once "footer.php" ?>
  </body>
</html>