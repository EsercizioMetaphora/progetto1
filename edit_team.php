<?php require 'partials/_db_connection.php' ?>
<?php require 'partials/_website_data.php' ?>
<?php require 'partials/_functions.php' ?>


<!-- HEAD -->
<?php require 'partials/_head.php' ?>
<!-- FINE HEAD -->
<form>
    <?php foreach (TRAINER as $trainer_item) : ?>
        <img src="<?php echo $trainer_item['img'] ?>" class="col-md-5 position-relative" alt="<?php echo $trainer_item['alt'] ?>">
        <div class="justify-self-end align-self-end">
            <a href="/edit_team_edit.php?trainer_item_id=<?php echo $trainer_item['id'] ?>" class="btn btn-primary"><i class="uil uil-pen"></i></a>
            <a href="#" class="btn btn-primary"><i class="uil uil-trash"></i></a>
        </div>
    <?php endforeach ?>
</form>