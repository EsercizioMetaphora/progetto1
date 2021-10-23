<?php require('partials/_header_new.php') ?>

<?php
/* article check*/
if (!isset($article_detail)) {
    http_response_code(404);
    require('partials/404.php');
    die();
}
/* _POST check & field update */
if (isset($_POST['id'])) {
    $article_id = $_POST['id'];
    $updated_name = $_POST['name'];
    $sth = $pdo->prepare("UPDATE article SET `name` = '$updated_name' WHERE id = $article_id");
    $sth->execute();
    $sth = $pdo->prepare("SELECT * FROM article WHERE id = $article_id");
    $sth->execute();
}
?>
<main>
    <!-- waga
    <?php /* var_dump($article_detail) */ ?>
    wobble -->
    <div class="d-flex justify-content-center m-2">
        <h2>Article editor</h2>
    </div>
    <form method="POST">
        <div class="row mx-5">
            <div class="col-md-7">
                <div class="form-group mb-2">
                    <input type="hidden" name="id" value="<?php echo $article_detail['id'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="name">Article Title</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $article_detail['name'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" class="my-2" for="description">Article Text</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $article_detail['description'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" value="<?php echo $article_detail['category'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="alt">Alternative Text</label>
                    <input type="text" class="form-control" id="alt" name="alt" value="<?php echo $article_detail['alt'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $article_detail['price'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="img">Image name and path</label>
                    <input type="text" class="form-control" id="img" name="img" value="<?php echo $article_detail['img'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="order">View Order</label>
                    <input type="text" class="form-control" id="order" name="order" value="<?php echo $article_detail['ord'] ?>">
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