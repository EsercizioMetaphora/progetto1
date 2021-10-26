<?php require('partials/_header_new.php');

if (!isset($_GET['article_id'])) {
    http_response_code(404);
    require('partials/404.php');
    die();
}

$sth = $pdo->prepare("SELECT * FROM article WHERE id = " . $_GET['article_id']);
$sth->execute();
$article = $sth->fetch(\PDO::FETCH_ASSOC);
$article_photo_list = getArticleGallery($article);
/* var_dump($article_photo_list);
die();
 */ ?>

<main>
    <section id="articleList" class="col-12 col-md-8 col-lg-9">
        <?php foreach ($article_photo_list as $article_photo) : ?>
            <img src="<?php echo $article_photo['img'] ?>" class="col-md-5 position-relative" alt="<?php echo $article_photo['alt'] ?>">
            <div class="justify-self-end align-self-end">
                <a href="/article_photo_edit.php?article_photo_id=<?php echo $article_photo['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                <a href="#" class="btn btn-primary"><i class="bi bi-trash"></i></a>
            </div>
        <?php endforeach ?>
    </section>
</main>

<?php require('partials/_footer.php') ?>