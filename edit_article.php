<?php require('partials/_header_new.php') ?>

<?php
/* article check*/
if (!isset($article_detail)) {
    http_response_code(404);
    require('partials/404.php');
    die();
}
/* INDICIZZAZIONE ERRORI */

$errors = [];

/* _POST check & field update 

`ord` = '$updated_order',
var_dump($_POST);

*/
if (isset($_POST['id'])) {

    $updated_name = $_POST['name'];
    $updated_description = $_POST['description'];
    $updated_category = $_POST['category'];
    $updated_alt = $_POST['alt'];
    $updated_price = $_POST['price'];
    $updated_img = $_POST['img'];
    $updated_order = $_POST['order'];
    $article_id = $_POST['id'];

    if (strlen($_POST['name']) > 2) {
        $updated_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    } else {
        $errors['name'] = 'Titolo Obbligatorio';
    }

    if (!is_numeric($_POST['price']))
        $errors['price'] = 'Non è un numero';
    if (!is_numeric($_POST['order']))
        $errors['order'] = 'Non è un numero';
    if (!is_numeric($_POST['category']))
        $errors['category'] = 'Non è un numero';

    if (count($errors) === 0) {
        $sth = $pdo->prepare("UPDATE article SET `name` = '$updated_name',`ord` = '$updated_order', `description` = '$updated_description', `category` = '$updated_category',`alt` = '$updated_alt',`price` = '$updated_price',`img` = '$updated_img' WHERE id = $article_id");
        $sth->execute();
    }

    $sth = $pdo->prepare("SELECT * FROM article WHERE id = $article_id");
    $sth->execute();
    $article_detail = $sth->fetch(\PDO::FETCH_ASSOC);
} else {
    $updated_name = $article_detail['name'];
    $updated_description = $article_detail['description'];
    $updated_category = $article_detail['category'];
    $updated_alt = $article_detail['alt'];
    $updated_price = $article_detail['price'];
    $updated_img = $article_detail['img'];
    $updated_order = $article_detail['ord'];
}
/* 
`ord` = '$updated_order'
var_dump($errors);
 */
?>
<main>
    <!-- waga
    <?php /* var_dump($article_detail) */ ?>
    wobble -->
    <div class="d-flex justify-content-center m-2">
        <h2>Article editor</h2>
    </div>
    <form action="" method="POST">
        <div class="row mx-5">
            <div class="col-md-7">
                <div class="form-group mb-2">
                    <input type="hidden" name="id" value="<?php echo $article_detail['id'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="name">Article Title</label>
                    <input type="text" class="form-control <?php echo isset($errors['name']) ? "border border-danger" : "" ?>" id="name" name="name" value="<?php echo $updated_name ?>">
                    <?php if (isset($errors['name'])) : ?>
                        <div class="text-danger"><?php echo ($errors['name']) ?></div>
                    <?php endif ?>
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" class="my-2" for="description">Article Text</label>
                    <input type="text" class="form-control <?php echo isset($errors['description']) ? "border border-danger" : "" ?>" id="description" name="description" value="<?php echo $updated_description ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="category">Category</label>
                    <input type="text" class="form-control <?php echo isset($errors['category']) ? "border border-danger" : "" ?>" id="category" name="category" value="<?php echo $updated_category ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="alt">Alternative Text</label>
                    <input type="text" class="form-control <?php echo isset($errors['alt']) ? "border border-danger" : "" ?>" id="alt" name="alt" value="<?php echo $updated_alt ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="price">Price</label>
                    <input type="text" class="form-control <?php echo isset($errors['price']) ? "border border-danger" : "" ?>" id="price" name="price" value="<?php echo $updated_price ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="img">Image name and path</label>
                    <input type="text" class="form-control <?php echo isset($errors['img']) ? "border border-danger" : "" ?>" id="img" name="img" value="<?php echo $updated_img ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="order">View Order</label>
                    <input type="text" class="form-control <?php echo isset($errors['order']) ? "border border-danger" : "" ?>" id="order" name="order" value="<?php echo $updated_order ?>">
                </div>
            </div>
            <div class="col-md-5 mb-2">
                <label class="my-1">image currently saved</label>
                <br>
                <img class="my-3" src="<?php echo $article_detail['img'] ?>">
            </div>
            <div>
                <button type="submit" class="my-3 btn btn-primary">Salva</button>
            </div>
    </form>
    <!--  PROVA BOTTONI PER COSARE LE COSE  -->
    <div class="d-flex justify-content-center">

        <?php if ($article_id > 1) : ?>
            <a href="/edit_article.php?article_id=<?php echo $article_id - 1 ?>" class="btn btn-primary m-2"><i class="bi bi-arrow-left-square"></i> Previous Article</a>
        <?php else :
            echo ""
        ?>
        <?php endif ?>
        <?php
        $total_articles = '0';
        foreach (ARTICLES as $article) {
            $total_articles++;
        } ?>
        <?php if ($article_id < $total_articles) : ?>
            <a href="/edit_article.php?article_id=<?php echo $article_id + 1 ?>" class="btn btn-primary m-2">Next Article <i class="bi bi-arrow-right-square"></i></a>
        <?php else :
            echo ""
        ?>
        <?php endif ?>

    </div>

</main>

<?php require('partials/_footer.php') ?>