<?php require('partials/_header_new.php') ?>

<?php
// Article check con errore 404
if (!isset($article_detail)) {
    http_response_code(404);
    require('partials/404.php');
    die();
}

// POST check & field update 
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
    <section class="border p-5">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="md-form input-group mt-md-3 mb-3">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $article_detail['id'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4> Articolo </h4>
                    <div class="md-form input-group mt-md-3 mb-3">
                        <input type="text" class="form-control" name="name" value="<?php echo $article_detail['name'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4> Immagine </h4>
                    <div class="md-form input-group mt-md-3 mb-3">
                        <input type="text" class="form-control" name="img" value="<?php echo $article_detail['img'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4> Descrizione </h4>
                    <div class="md-form input-group mt-md-3 mb-3">
                        <input type="text" class="form-control" name="description" value="<?php echo $article_detail['description'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <h4> Ordine </h4>
                    <div class="md-form input-group mt-md-3 mb-3">
                        <input type="text" class="form-control" name="ord" value="<?php echo $article_detail['ord'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <h4> Categoria </h4>
                    <div class="md-form input-group mt-md-3 mb-3">
                        <input type="text" class="form-control" name="category" value="<?php echo $article_detail['category'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <h4> Prezzo </h4>
                    <div class="md-form input-group mt-md-3 mb-3">
                        <input type="text" class="form-control" name="price" value="<?php echo $article_detail['price'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 mb-2">
                    <img class="my-3" src="<?php echo $article_detail['img'] ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary aqua-gradient m-0">Salva</button>
        </form>
    </section>

    <!-- Pagination -->

    <div class="d-flex justify-content-center">

        <?php $max_articles = '0';
        if ($article_id > 1) : ?>
            <a class="btn btn-outline-primary m-1" href="/edit_article.php?article_id=<?= $article_id - 1 ?>">Precedente</a>
        <?php endif ?>
        <?php
        foreach (ARTICLES as $article) {
            $max_articles++;
        } ?>
        <?php if ($article_id < $max_articles) : ?>
            <a class="btn btn-outline-primary m-1" href="/edit_article.php?article_id=<?= $article_id + 1 ?>">Successiva</a>
        <?php endif ?>
    </div>
</main>

<?php require('partials/_footer.php') ?>