<ul class="list-group">
    <?php foreach ($data["projet"] as $projet): ?>
    <li class="">
        <div class="card" style="margin:10px; padding:5px;">
            <h5 class="card-header"><?php echo $projet["id"];?> - <?php echo $projet["title"]; ?></h5>
            <div class="card-body">
                <a href="<?php echo $projet["lien"]; ?>">
                    <img class="img-fluid" src="<?php echo $projet["picture"] ?>" style="height:250px;margin-left:1%;margin-right:auto;"><img>
                </a>
                <p class="card-text" style="text-align:left; margin-top:10px;"><?php echo $projet["logiciel"]; ?></p>
                <a href="<?php echo $projet["lien"]; ?>" class="btn btn-primary" style="width:180px; margin-right:5%; margin-left:auto; margin-top:15px;">Lien Github</a>
            </div>
        </div>
    </li>
    <li class="admin-mode <?php echo "form-projet-row-" . $projet["id"] ?>">
        <div class="card-body">
            <form action="/editProjet.php" method="post" class="form-inline">
                <input type="hidden" name="id" value= <?php echo $projet["id"]?> />
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <input placeholder="Titre" type="text" name="title" value="<?php echo $projet["title"]; ?>">
                        </div>
                        <div class="col-md-2">
                            <input placeholder="Lien Image" type="text" name="picture" value="<?php echo $projet["picture"]; ?>">
                        </div>
                        <div class="col-md-2">
                            <input placeholder="Logiciel" type="text" name="logiciel" value="<?php echo $projet["logiciel"]; ?>">
                        </div>
                        <div class="col-md-2">
                            <input placeholder="Lien Projet" type="text" name="lien" value="<?php echo $projet["lien"]; ?>">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger" type="button" value="Cancel" onclick="toogleProjetForm(<?php echo  $projet["id"] ?>)">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </li>
    <?php endforeach;?>
    <div class="card admin-mode" style="margin:10px; padding:5px;">
        <li class="list-group-item">
            <form action="/addProjet.php" method="post" class="form-inline">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <input placeholder="Titre" type="text" name="title">
                        </div>
                        <div class="col-md-2">
                            <input placeholder="Picture" type="text" name="picture">
                        </div>
                        <div class="col-md-2">
                            <input placeholder="Logiciel" type="text" name="logiciel">
                        </div>
                        <div class="col-md-2">
                            <input placeholder="Lien" type="text" name="lien">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
    </div>
</ul>
<script>
    function toogleProjetForm(id) {
        $('.projet-row-' + id).toggle();
        $('.form-projet-row-' + id).toggle();
    }
</script>
