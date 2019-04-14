<!DOCTYPE html>

<?php 


?>

<html>
  <head>
    <title>Coucou</title>
    <?php include_once "include-headers.html" ?>
  </head
  <body>
   <?php include_once "header.php" ?>
    <div class="content">
      <form method="post" action="admin.php">
        Username:<br>
        <input type="text" name="username"><br>
        Password:<br>
        <input type="password" name="password"><br>
        <input type="submit" value="Login !">
      </form>
    </div>
    <?php include_once "footer.php" ?>
  </body>
</html>