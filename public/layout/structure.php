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

        <?php
          session_start();
          if ($_SESSION["admin"] === true ||  $_SESSION["newsession"]===true) {
            echo '
            <div>
              <button id="demo" onclick="toggleAdmin()" type="button" class="btn btn-admin btn-lg btn-primary btn-block">Admin MODE</button>
            </div>';
            
          } else {

          }
        ?>
        <div class="container-fluid main-container">
          <div class="row">
            <div class="col-md-3" style="margin-bottom:30px;">
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
                        <label>Nom</label>
                        <input type="text" name="lastname" style="margin-left:10%; margin-right:auto;">
                        </div>
                      <div>
                        <label>Prenom</label>
                        <input type="text" name="firstname" style="margin-left:18%; margin-right:auto;">
                      </div>
                      <div>
                        <label>Image</label>
                        <input type="text" name="picture_url" style="margin-left:14%; margin-right:auto;">
                      </div>
                      <div>
                        <button style= <?php 
                        $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
                        $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                        $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
                        $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
                        $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

                        if ($iPod || $iPhone || $iPad || $Android) {
                            echo '
                            "width:100%; margin-left:-0px;"
                            ';
                        } else {
                            echo '
                            "margin-left:-0px; margin-top:50px;width: 100%"';
                        }                    
                    ?>                        
                         class="btn btn-danger" type="submit" value="Ok">Ok</button>
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
        <div>
          <div class="content-settings">
              <div class="content-settings__check">
            </div>
              <button id="a_trigger" class="content-settings__button" hidden=""></button>
          </div>
          <div class="achievement">
              <div class="animation">
                  <div class="circle">
                      <div class="img trophy_animate trophy_img">
                          <img class="trophy_1" src="https://dl.dropboxusercontent.com/s/k0n14tzcl4q61le/trophy_full.svg">
                          <img class="trophy_2" src="https://dl.dropboxusercontent.com/s/cd4k1h6w1c8an9j/trophy_no_handles.svg">
                      </div>
                      <div class="img xbox_img">
                          <img src="https://dl.dropboxusercontent.com/s/uopiulb5yeo1twm/xbox.svg?dl=0">
                      </div>
                      <div class="brilliant-wrap">
                          <div class="brilliant">
                          </div>
                      </div>
                  </div>
                  <div class="banner-outer">
                      <div class="banner">
                          <div class="achieve_disp">
                              <span class="unlocked">
                                
                              </span>
                              <div class="score_disp">
                                  <div class="gamerscore">
                                      <img src="https://dl.dropboxusercontent.com/s/gdqf5amvjkx9rfb/G.svg?dl=0" width="20px">
                                      <span class="acheive_score"></span>
                                  </div>
                                  <span class="hyphen_sep">-</span>
                                  <span class="achiev_name"></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        <?php include_once "footer.php"?>
        <script>
          function toggleAdmin() {
            $('.admin-mode').toggle();
          }
        </script>
        <script src="script.js"></script>
      </body>
    </html>
    <?php
}
?>
