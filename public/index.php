<?php
include_once ('./../src/setup.php');
$dbh = new PDO('mysql:host=127.0.0.1;dbname=gdbdd;port=3306', 'gabindepaire', 'rootroot');

$userRepository = new \User\UserRepository($dbh);
$skillRepository = new \Skill\SkillRepository($dbh);

$user = $userRepository->fetch();
$skills = $skillRepository->fetchAll();

$user["skills"] = $skills;

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Accueil</title>
    <?php include_once "include-headers.html" ?>
  </head
  <body>
    <?php include_once "header.php" ?>
    <div class="content">
      <h1>Présentation</h1>
      <div>
        <div>
          <label>Nom :</label> <?php echo $user["lastname"]; ?><br>
          <label>Prenom :</label> <?php echo $user["firstname"]; ?><br>
          <img src="<?php echo $user["picture_url"] ?>" style="height:400px ;margin-left:30%;margin-right:auto;"><img>
        </div>
        <li>
              <form action="/addUser.php" method="post">
                <div>
                <label>Prenom</label>
                  <input type="text" name="lastname">
                  </div>
                <div>
                  <label>Nom</label>
                  <input type="text" name="firstname">
                </div>
                <div>
                  <label>Image</label>
                  <input type="text" name="picture_url">
                </div>
                <div>
                  <button type="submit" value="Ok">Ok</button>
                </div>
              </form>
            </li>
        <div>
          <h3>Compétence</h3>
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
      </div>
    </div>
    <?php include_once "footer.php" ?>
  </body>
</html>