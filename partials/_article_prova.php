<section class="mt-5 container">
    <div class="row">
        <?php foreach ($article_prova_home as $article_prova_item) : ?>
            <article class="col-6 col-lg-3">
                <div class="card border-0">
                    <img src="/images/article_prova/<?php echo $article_prova_item['immagine'] ?>" class="card-img-top" alt="<?php echo $article_prova_item['alt_text'] ?>">
                    <div class="card-body px-0">
                        <h5 class="card-title"><?php echo $article_prova_item['titolo'] ?></h5>
                        <p class="card-text"><?php echo $article_prova_item['testo'] ?></p>
                        <div class="d-flex">
                            <a href="/details.php" class="flex-fill btn btn-primary">
                                <?php echo __('info') ?>
                            </a>
                            <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach ?>


    </div>
</section>