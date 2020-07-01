<?php 
  $check = $_SESSION["check"] ?? 0;

?>

<div class="content animated bounceInRight">
    <div>
      <form style="margin:10%;" action="/mail.php" method="post">
          <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">Entrer une adresse e-mail valide.</small>
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Sujet du Message</label>
              <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="sujet">
          </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea1">Votre Message</label>
              <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <?php
            if ($check == 1) {
              echo '
              <div id="welcomeDiv" style="display:block; padding: 5px" class="bg-primary text-white">Votre message a bien été envoyé - Rafraichir la page pour envoyer un autre message</div>
              ';
              sleep(5);
              $check = 0;
              header("Location: contact.php");
              exit;
            } elseif ($check == 2) {
              echo '
                <div style="padding: 5px" class="bg-danger text-white">Erreur - Invalide saisie remplir le formulaire correctement !</div>
              ';
              sleep(5);
              $check = 0;
              header("Location: contact.php");
            } else {
            }
          ?>
          <button name="answer" type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
</div>
