<ul class="list-group" style="margin-bottom:90px;">
    <li class="list-group-item list-group-item-info"><h3>Compétence</h3></li>
    <?php foreach ($data["skills"] as $skill): ?>
    <li class="list-group-item <?php echo "skill-row-" . $skill["id"] ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <?php echo $skill["text"]; ?>
                </div>
                <div class="col-md-2">
                    <?php echo $skill["level"]; ?>
                    <div style="widht: 500%;" class="progress">
                        <div aria-valuenow="<?php echo $skill["level"]; ?>" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill["level"]; ?>%">
                            <span class="sr-only"><?php echo $skill["level"]; ?>% effectué (success)</span>
                        </div>
                    </div> 
                </div>
                <div class="col-md-2 admin-mode">
                    <button style="width:100%;" class="btn btn-danger" type="button" value="Edit" onclick="toogleSkillForm(<?php echo  $skill["id"] ?>)">Edit</button>
                </div>
                <div class="col-md-2 admin-mode">
                <form action="/deleteSkill.php" method="post" class="form-inline">
                    <input type="hidden" name="id" value= <?php echo $skill["id"]?> />
                    <button style="width:100%;" class="btn btn-danger" type="submit" value="Delete">Delete</button>
                </form>
                </div>
            </div>
        </div>
    </li>
    <li class="list-group-item form-row <?php echo "form-skill-row-" . $skill["id"] ?>">
        <form action="/editSkill.php" method="post" class="form-inline">
            <input type="hidden" name="id" value= <?php echo $skill["id"]?> />
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <input placeholder="Compétence" type="text" name="text" value="<?php echo $skill["text"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <input placeholder="niveau" type="text" name="level" value="<?php echo $skill["level"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <button style="margin-left: 150px; margin-top: -5px;" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger" type="button" value="Cancel" onclick="toogleSkillForm(<?php echo  $skill["id"] ?>)">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </li>
    <?php endforeach;?>
    <li class="list-group-item admin-mode">
        <form action="/addSkill.php" method="post" class="form-inline">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <input placeholder="Compétence" type="text" name="text">
                    </div>
                    <div class="col-md-2">
                        <input placeholder="niveau" type="text" name="level">
                    </div>
                    <div class="col-md-2">
                        <button style="width: 100%;margin-left:180px; margin-top:-5px;" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                    </div>
                </div>
            </div>
        </form>
    </li>
</ul>
<ul class="list-group" style="margin-top:50px;">
    <li class="list-group-item list-group-item-info"><h3>Experiences Profesionnelles</h3></li>
    <?php foreach ($data["experience"] as $exp): ?>
    <li class="list-group-item <?php echo "exp-row-" . $exp["id"] ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <p><?php echo $exp["start_date"]; ?> ->
                    <?php echo $exp["end_date"]; ?><br>
                </div>
                <div class="col-md-2">
                    <?php echo $exp["title"]; ?>
                </div>
                <div class="col-md-2">
                    <p><?php echo $exp["description"]; ?></p>
                </div>
                <div class="col-md-2">
                    <p><?php echo $exp["organisme"]; ?></p>
                </div>
                <div class="col-md-2 admin-mode">
                    <button style="width: 100%;" class="btn btn-danger" type="button" value="Edit" onclick="toogleExpForm(<?php echo  $exp['id'] ?>)">Edit</button>
                </div>
                <div class="col-md-2 admin-mode">
                <form action="/deleteExp.php" method="post" class="form-inline">
                    <input type="hidden" name="id" value= <?php echo $exp["id"]?> />
                    <button style="width: 100%;" class="btn btn-danger" type="submit" value="Delete">Delete</button>
                </form>
                </div>
            </div>
        </div>
    </li>
    <li class="list-group-item form-row <?php echo "form-exp-row-" . $exp["id"] ?>">
        <form action="/editExp.php" method="post" class="form-inline">
            <input type="hidden" name="id" value= <?php echo $exp["id"]?> />
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <input placeholder="Date de début" type="text" name="start_date" value="<?php echo $exp["start_date"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <input placeholder="Date de fin" type="text" name="end_date" value="<?php echo $exp["end_date"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <input placeholder="Date de début" type="text" name="title" value="<?php echo $exp["title"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <input placeholder="Date de fin" type="text" name="description" value="<?php echo $exp["description"]; ?>">
                    </div>
                    <div class="col-md-2" >
                        <input placeholder="Date de fin" type="text" name="organisme" value="<?php echo $exp["organisme"]; ?>">
                    </div>
                    <div class="col-md-2" style="margin-right:150px;">
                        <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger" type="button" value="Cancel" onclick="toogleExpForm(<?php echo  $exp["id"] ?>)">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </li>
    <?php endforeach;?>
    <li class="list-group-item admin-mode">
        <form action="/addExp.php" method="post" class="form-inline">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <input placeholder="Date de début" type="text" name="start_date">
                    </div>
                    <div class="col-md-4">
                        <input placeholder="Date de fin" type="text" name="end_date">
                    </div>
                    <div class="col-md-4">
                        <input placeholder="Titre" type="text" name="title">
                    </div>
                    <div style="margin-top: 10px" class="col-md-4">
                        <input placeholder="Description" type="text" name="description">
                    </div>
                    <div style="margin-top: 10px" class="col-md-2">
                        <input placeholder="Organisme" type="text" name="organisme">
                    </div>
                    <div class="col-md-2">
                        <button style="width: 100%; margin-left: 200%;margin-top:10px;" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                    </div>
                </div>
            </div>
        </form>
    </li>
</ul>
<ul class="list-group" style="margin-top:50px;">
    <li class="list-group-item list-group-item-info"><h3>Parcours Scolaire</h3></li>
    <?php foreach ($data["parcours"] as $parcour): ?>
    <li class="list-group-item <?php echo "parcour-row-" . $parcour["id"] ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h4><?php echo $parcour["name"]; ?></h4>
                </div>
                <div class="col-md-5">
                    <p><?php echo $parcour["description"]; ?></p>
                </div>
                <div class="col-md-5">
                    <p><?php echo $parcour["start_date"]; ?> / <?php echo $parcour["end_date"]; ?></p>
                </div>
                <div class="col-md-2 admin-mode">
                    <button style="width: 100%;margin-left:150px;" class="btn btn-danger" type="button" value="Edit" onclick="toogleParcourForm(<?php echo  $parcour["id"] ?>)">Edit</button>
                </div>
                <div class="col-md-2 admin-mode" >
                <form action="/deleteParcour.php" method="post" class="form-inline">
                    <input type="hidden" name="id" value= <?php echo $parcour["id"]?> />
                    <button style="width: 100%; margin-left:150px;" class="btn btn-danger" type="submit" value="Delete">Delete</button>
                </form>
                </div>
            </div>
        </div>
    </li>
    <li class="list-group-item form-row <?php echo "form-parcour-row-" . $parcour["id"] ?>">
        <form action="/editParcour.php" method="post" class="form-inline">
            <input type="hidden" name="id" value= <?php echo $parcour["id"]?> />
            <div class="container">
                <div class="row">
                    <div class="col-md-3" style="margin-right:20px;">
                        <input placeholder="Nom" type="text" name="name" value="<?php echo $parcour["name"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <input placeholder="Description" type="text" name="description" value="<?php echo $parcour["description"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <input placeholder="Date de début" type="text" name="start_date" value="<?php echo $parcour["start_date"]; ?>">
                    </div>
                    <div class="col-md-3">
                        <input placeholder="Date de fin" type="text" name="end_date" value="<?php echo $parcour["end_date"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger" type="button" value="Cancel" onclick="toogleParcourForm(<?php echo  $parcour["id"] ?>)">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </li>
    <?php endforeach;?>
    <li class="list-group-item admin-mode">
        <form action="/addParcour.php" method="post" class="form-inline">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <input placeholder="Nom" type="text" name="name">
                    </div>
                    <div class="col-md-4">
                        <input placeholder="Description" type="text" name="description">
                    </div>
                    <div class="col-md-3">
                        <input placeholder="Date de debut" type="text" name="start_date">
                    </div>
                    <div style="margin-top: 10px;" class="col-md-2">
                        <input placeholder="Date de fin" type="text" name="end_date">
                    </div>
                    <div style="margin-top:-50px; margin-left: 70%;" class="col-md-2">
                        <button style="width: 100%;" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                    </div>
                </div>
            </div>
        </form>
    </li>
</ul>
<ul class="list-group" style="margin-top:50px;">
    <li class="list-group-item list-group-item-info"><h3>Rubriques Libres</h3></li>
    <?php foreach ($data["rubrique"] as $libre): ?>
    <li class="list-group-item <?php echo "rubrique-row-" . $libre["id"] ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <p><?php echo $libre["activite"]; ?> :</p>
                </div>
                <div class="col-md-2">
                    <p><?php echo $libre["text"]; ?></p>
                </div>
                <div class="col-md-2 admin-mode">
                    <button style="width: 100%;" class="btn btn-danger" type="button" value="Edit" onclick="toogleRubriqueForm(<?php echo  $libre["id"] ?>)">Edit</button>
                </div>
                <div class="col-md-2 admin-mode">
                <form action="/deleteRubrique.php" method="post" class="form-inline">
                    <input type="hidden" name="id" value= <?php echo $libre["id"]?> />
                    <button style="width: 100%;" class="btn btn-danger" type="submit" value="Delete">Delete</button>
                </form>
                </div>
            </div>
        </div>
    </li>
    <li class="list-group-item form-row <?php echo "form-rubrique-row-" . $libre["id"] ?>">
        <form action="/editRubrique.php" method="post" class="form-inline">
            <input type="hidden" name="id" value= <?php echo $libre["id"]?> />
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <input placeholder="Compétence" type="text" name="activite" value="<?php echo $libre["activite"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <input placeholder="niveau" type="text" name="text" value="<?php echo $libre["text"]; ?>">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger" type="button" value="Cancel" onclick="toogleSkillForm(<?php echo  $libre["id"] ?>)">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </li>
    <?php endforeach;?>
    <li class="list-group-item admin-mode">
        <form action="/addRubrique.php" method="post" class="form-inline">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <input placeholder="Compétence" type="text" name="text">
                    </div>
                    <div class="col-md-2">
                        <input placeholder="niveau" type="text" name="level">
                    </div>
                    <div class="col-md-2">
                        <button style="width: 100%;margin-left:170px; margin-top: -2px;" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                    </div>
                </div>
            </div>
        </form>
    </li>
</ul>


<script>
    function toogleSkillForm(id) {
        $('.skill-row-' + id).toggle();
        $('.form-skill-row-' + id).toggle();
    }
    function toogleExpForm(id) {
        $('.exp-row-' + id).toggle();
        $('.form-exp-row-' + id).toggle();
    }
    function toogleParcourForm(id) {
        $('.parcour-row-' + id).toggle();
        $('.form-parcour-row-' + id).toggle();
    }
    function toogleRubriqueForm(id) {
        $('.rubrique-row-' + id).toggle();
        $('.form-rubrique-row-' + id).toggle();
    }
</script>
