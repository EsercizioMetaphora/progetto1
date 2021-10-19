<?php require('partials/_header_new.php') ?>

<main>
    <!-- -->
    <?php require('partials/_carousel.php') ?>
    <section class="mt-3 container">
        <div class="text-center mx-5 h4">
            <?php echo __('text_h1') ?>
        </div>
    </section>
    <section class="mt-5 container">

        <?php require('partials/_news.php') ?>

    </section>


    <section class="mt-5 container">
        <picture>
            <img src="/images/immagini/IMG_4170.jpg" class="d-block w-100" alt="...">
        </picture>
    </section>
    <section class="mt-5 container">
        <div class="text-center mx-5 h4">
            <?php echo __('intro') ?>
        </div>
    </section>
    <section class="mt-5 container">
        <div class="row">
            <?php foreach (ARTICLES as $articles) : ?>
                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/<?php echo $articles['img'] ?>" class="card-img-top" alt="<?php echo $articles['alt_text'] ?>">
                        <div class="card-body px-0">
                            <h5 class="card-title"><?php echo $articles['title'] ?></h5>
                            <p class="card-text"><?php echo $articles['article_text'] ?></p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach ?>
        </div>
    </section>
</main>
<?php require('partials/_footer.php') ?>