<ul class="list-group">
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
                </div>
                <div class="col-md-2 admin-mode">
                    <button class="btn btn-danger" type="button" value="Edit" onclick="toogleSkillForm(<?php echo  $skill["id"] ?>)">Edit</button>
                </div>
                <div class="col-md-2 admin-mode">
                <form action="/deleteSkill.php" method="post" class="form-inline">
                    <input type="hidden" name="id" value= <?php echo $skill["id"]?> />
                    <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
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
                        <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
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
                        <button class="btn btn-danger" type="submit" value="Ok">Ok</button>
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
</script>


