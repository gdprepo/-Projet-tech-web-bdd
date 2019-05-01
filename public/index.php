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
  </head>
  <body>
    <?php include_once "header.php" ?>
    <div class="content">
      <div>
        <button id="demo" onclick="myFonction()" class="btn-admin btn-danger">Admin MODE</button>
      </div>
      <h1>Présentation</h1>
      <div>
        <div class="container">
          <label>   Nom :</label> <?php echo $user["lastname"]; ?><br>
          <label>Prenom :</label> <?php echo $user["firstname"]; ?><br>
          <img src="<?php echo $user["picture_url"] ?>" style="height:400px ;margin-left:30%;margin-right:auto;"><img>
        </div>
        <div id="cv_user" style="display:none;">
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
                  <input type="text" name="picture_url"><br><br>
                  <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
                </div>

            </form>
          </li>
        </div>
        <div>
          <h3>Compétence</h3>
          <ul>
            <?php foreach ($user["skills"] as $skill): ?>
            <li> 
              <p><?php echo $skill["text"]; ?></p>
              <p><?php echo $skill["level"]; ?></p>
            </li>
            <?php endforeach; ?>
            <div id="cv_skill" style="display:none;">
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
                      <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
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
      if (document.getElementById("cv_user").style.display == 'none')
      {
          document.getElementById("cv_user").style.display = 'block';
          document.getElementById("cv_skill").style.display = 'block';
      }
      else 
      {
          document.getElementById("cv_user").style.display = 'none';
          document.getElementById("cv_skill").style.display = 'none';
          
      }
    }
  </script>

</html>