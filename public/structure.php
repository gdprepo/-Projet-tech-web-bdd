<?php

function loadStructure($page, $title, $data) {
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title><?php echo $title; ?></title>
        <?php include_once "include-headers.html"?>
      </head>
      <body>
        <?php include_once "header.php"?>
        <div>
          <button id="demo" onclick="toggleAdmin()" type="button" class="btn btn-dark btn-admin">Admin MODE</button>
        </div>
        <div class="container-fluid main-container">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <img src="<?php echo $data["picture_url"] ?>" class="card-img-top" alt="Picture of me">
                <div class="card-body">
                  <h5 class="card-title">Présentation</h5>
                  <p class="card-text">
                    <label>   Nom :</label> <?php echo $data["lastname"]; ?><br>
                    <label>Prenom :</label> <?php echo $data["firstname"]; ?><br>
                  </p>
                  <div class="admin-mode" style="display:none;">
                    <form action="/editUser.php" method="post">
                      <div>
                        <label>Prenom</label>
                        <input type="text" name="lastname" style="width:50%; margin-left:0%; margin-right:auto;">
                        </div>
                      <div>
                        <label>Nom</label>
                        <input type="text" name="firstname" style="width:50%; margin-left:0%; margin-right:auto;">
                      </div>
                      <div>
                        <label>Image</label>
                        <input type="text" name="picture_url" style="width:50%; margin-left:0%; margin-right:auto;">
                      </div>
                      <div>
                        <button style="margin-left:0%; margin-top:20px;margin-right:auto;" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <?php require_once $page ?>             
            </div>
          </div>
        </div>
        <?php include_once "footer.php"?>
        <script>
          function toggleAdmin() {
            $('.admin-mode').toggle();   
          }
        </script>
      </body>
    </html>
    <?php
}
?>