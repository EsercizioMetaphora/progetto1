<?php require('partials/_header_new.php') ?>
<?php
if (!isset($article_detail)) {
    http_response_code(404);
    require('partials/404.php');
    die();
}
?>
<main>
    <section class="mt-5 container">
        <article class="row gx-0">
            <div class="col-12 col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner mb-2">
                        <?php $class_active = 'active' ?>
                        <?php foreach ($article_photos as $article_photo) : ?>
                            <div class="carousel-item <?php echo $class_active ?>">
                                <img src="<?php echo $article_photo['url'] ?>" class="d-block w-100" alt="<?php echo $article_photo['alt'] ?>">
                            </div>
                            <?php $class_active = '' ?>
                        <?php endforeach ?>

                    </div>
                    <div class="d-flex flex-row">
                        <?php $contatore = 0 ?>
                        <?php foreach ($article_photos as $article_photo) : ?>
                            <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $contatore ?>" class="active me-2" aria-current="true" aria-label="Slide 1">
                                <img src="<?php echo $article_photo['url'] ?>" class="d-block w-100" alt="<?php echo $article_photo['alt'] ?>">
                            </a>
                            <?php $contatore++ ?>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <section class="p-3">
                    <h4 class="mt-3">
                        <?php echo ARTICLEDETAIL['titolo'] ?>
                    </h4>
                    <p>
                        <?php echo ARTICLEDETAIL['testo'] ?>
                    </p>
                    <a class="btn btn-primary" href="/list.php">
                        Read More
                    </a>
                </section>
            </div>
        </article>
    </section>

    <?php require('partials/_footer.php') ?>