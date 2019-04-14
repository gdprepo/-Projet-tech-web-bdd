<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$skillRepository = new \Skill\SkillRepository($dbh);
$experienceRepository = new \Experience\ExperienceRepository($dbh);
$parcourRepository = new \Parcour\ParcourRepository($dbh);
$rubriqueRepository = new \Rubrique\RubriqueRepository($dbh);
$userRepository = new \User\UserRepository($dbh);

$skills = $skillRepository->fetchAll();
$experience = $experienceRepository->fetchAll();
$parcour = $parcourRepository->fetchAll();
$rubrique = $rubriqueRepository->fetchAll();
$user = $userRepository->fetch();

$user["experience"] = $experience;
$user["skills"] = $skills;
$user["parcours"] = $parcour;
$user["rubrique"] = $rubrique;

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Presentation Détaillée</title>
    <?php include_once "include-headers.html" ?>
  </head
  <body>
    <?php include_once "header.php" ?>
    <div class="content">
      <h1>Présentation Détaillée</h1>
      <div>
        <div>
          <label>Nom :</label> <?php echo $user["firstname"]; ?>
        </div>
        <div>
          <label>Prenom :</label> <?php echo $user["lastname"]; ?>
        </div>
        <div>
          <img src="<?php echo $user["picture_url"] ?>"><img>
        </div>
        <div>
          <h3>Experiences Profesionnelles</h3>
          <ul>
            <?php foreach ($user["experience"] as $exp): ?>
            <li> 
              <p><?php echo $exp["start_date"]; ?> -
                <?php echo $exp["end_date"]; ?><br>
                <?php echo $exp["title"]; ?>
              </p><br>
              <p><?php echo $exp["description"]; ?></p>
              <p><?php echo $exp["organisme"]; ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div>
          <h3>Parcours Scolaire</h3>
          <ul>
            <?php foreach ($user["parcours"] as $parcour): ?>
            <li> 
              <h4><?php echo $parcour["name"]; ?></h4>
              <p><?php echo $parcour["description"]; ?></p>
              <p><?php echo $parcour["start_date"]; ?> - <?php echo $parcour["end_date"]; ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div>
          <h3>Compétences</h3>
          <ul>
            <?php foreach ($user["skills"] as $skill): ?>
            <li> 
              <p><?php echo $skill["text"]; ?></p>
              <p><?php echo $skill["level"]; ?></p>
            </li>
            <?php endforeach; ?>
            <li>
              <form action="/addSkill.php" method="post">
                <div>
                <label>Text</label>
                  <input type="text" name="text">
                  </div>
                <div>
                  <label>Level</label>
                  <input type="text" name="level">
                </div>
                <div>
                  <button type="submit" value="Ok">Ok</button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <div>
          <h3>Rubriques Libres</h3>
          <ul>
            <?php foreach ($user["rubrique"] as $libre): ?>
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