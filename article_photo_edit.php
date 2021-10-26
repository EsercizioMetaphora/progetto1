<?php require('partials/_header_new.php') ?>

<?php
/* article check*/
if (!isset($_GET['article_photo_id'])) {
    http_response_code(404);
    require('partials/404.php');
    die();
}

$sth = $pdo->prepare("SELECT * FROM article_photo WHERE id =" . $_GET['article_photo_id']);
$sth->execute();
$article_photo = $sth->fetch(\PDO::FETCH_ASSOC);

if (!$article_photo) {
    http_response_code(404);
    require('partials/404.php');
    die();
}
/* INDICIZZAZIONE ERRORI */

$errors = [];

/* _POST check & field update 

*/
if (isset($_POST['id'])) {

    $name = $_POST['name'];
    $alt = $_POST['alt'];
    $img = $_POST['img'];
    $order = $_POST['order'];
    $article_id = $_POST['id'];

    if (strlen($_POST['name']) > 2) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    } else {
        $errors['name'] = 'Titolo Obbligatorio';
    }

    if (!is_numeric($_POST['order']))
        $errors['order'] = 'Non è un numero';

    if (count($errors) === 0) {
        $sth = $pdo->prepare("UPDATE article_photo SET `name` = '$name',`ord` = '$order',`alt` = '$alt',`img` = '$img' WHERE id =" . $article_photo['id']);
        $sth->execute();
    }
} else {
    $name = $article_photo['name'];
    $alt = $article_photo['alt'];
    $img = $article_photo['img'];
    $order = $article_photo['ord'];
}
?>
<main>
    <!-- waga
    <?php /* var_dump($article_photo) */ ?>
    wobble -->
    <div class="d-flex justify-content-center m-2">
        <h2>Article editor</h2>
    </div>
    <form action="" method="POST">
        <div class="row mx-5">
            <div class="col-md-7">
                <div class="form-group mb-2">
                    <input type="hidden" name="id" value="<?php echo $article_photo['id'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="name">Article Title</label>
                    <input type="text" class="form-control <?php echo isset($errors['name']) ? "border border-danger" : "" ?>" id="name" name="name" value="<?php echo $name ?>">
                    <?php if (isset($errors['name'])) : ?>
                        <div class="text-danger"><?php echo ($errors['name']) ?></div>
                    <?php endif ?>
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="alt">Alternative Text</label>
                    <input type="text" class="form-control <?php echo isset($errors['alt']) ? "border border-danger" : "" ?>" id="alt" name="alt" value="<?php echo $alt ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="img">Image name and path</label>
                    <input type="text" class="form-control <?php echo isset($errors['img']) ? "border border-danger" : "" ?>" id="img" name="img" value="<?php echo $img ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="order">View Order</label>
                    <input type="text" class="form-control <?php echo isset($errors['order']) ? "border border-danger" : "" ?>" id="order" name="order" value="<?php echo $order ?>">
                </div>
            </div>
            <div class="col-md-5 mb-2">
                <label class="my-1">image currently saved</label>
                <br>
                <img class="my-3" src="<?php echo $article_photo['img'] ?>">
            </div>
            <div>
                <button type="submit" class="my-3 btn btn-primary">Salva</button>
            </div>
            <div>
                <a href="/article_photo_list.php?article_id=<?php echo $article_photo['article_id']?>" class="my-3 btn btn-primary">Torna alla Lista</a>
            </div>
    </form>

    </div>

</main>

<?php require('partials/_footer.php') ?>