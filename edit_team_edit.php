<?php require 'partials/_db_connection.php' ?>
<?php require 'partials/_website_data.php' ?>
<?php require 'partials/_functions.php' ?>

<?php require('partials/_head.php') ?>

<?php
/* article check*/
if (!isset($_GET['article_photo_id'])) {
    http_response_code(404);
    require('partials/404.php');
    die();
}

$sth = $pdo->prepare("SELECT * FROM personal_trainer WHERE id =" . $_GET['trainer_item_id']);
$sth->execute();
$trainer_list = $sth->fetch(\PDO::FETCH_ASSOC);

if (!$trainer_list) {
    http_response_code(404);
    require('partials/404.php');
    die();
}
/* INDICIZZAZIONE ERRORI */
