<!DOCTYPE html>
<html>
  <head>
    <title>Accueil</title>
    <?php include_once "include-headers.html" ?>
  </head
  <body>
    <?php 
    $data = [
      "name" => "Nom :",
      "mail" => "E-mail :",
      "message" => "Message :",
    ]
    ?>
    <?php include_once "header.php" ?>
    <div class="content">
      <div>
        <div>
          <br>
          <h1 style="margin-top:20px;">Page Contact</h1>
          <h3 style="margin-top:3%;">Envoyer un message</h3>
          <form style="margin-left:40%; margin-right:auto;" action="/ma-page-de-traitement" method="post">
              <div>
                  <label for="name"><?php echo $data["name"]; ?></label>
                  <input type="text" id="name" name="user_name">
              </div>
              <div>
                  <label for="mail"><?php echo $data["mail"]; ?></label>
                  <input type="email" id="mail" name="user_mail">
              </div>
              <div>
                  <label for="msg"><?php echo $data["message"]; ?></label>
                  <textarea id="msg" name="user_message"></textarea>
              </div>
              <div class="button" style="margin-left:-30px; margin-bottom:50px;">
                <button type="submit">Envoyer le message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include_once "footer.php" ?>
  </body>
</html>