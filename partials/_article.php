<?php foreach ($article_home as $article_item) : ?>
    <article class="col-6 col-lg-3">
        <div class="card border-0">
            <img src="/images/article/<?php echo $article_item['img'] ?>" class="card-img-top" alt="<?php echo $article_item['alt_text'] ?>">
            <div class="card-body px-0">
                <h5 class="card-title"><?php echo $article_item['titolo'] ?></h5>
                <p class="card-text"><?php echo $article_item['testo'] ?></p>
                <div class="d-flex">
                    <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                    <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
            </div>
        </div>
    </article>
<?php endforeach ?>