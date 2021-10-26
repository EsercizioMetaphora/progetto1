<?php require('partials/_header_new.php') ?>

<main>
    <section id="articleList" class="col-12 col-md-8 col-lg-9">
        <?php foreach (ARTICLES as $article) : ?>
            <?php $photo = getArticleFoto($article) ?>
            <article class="<?php echo $article['category'] ?> card mb-3 p-0 border-0" id="<?php echo $article['id']?>">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="<?php echo $photo['img'] ?>" class="img-fluid card-img-top" alt="<?php echo $photo['alt']?>">
                    </div>
                    <div class="col-md-8 position-relative">
                        <div class="card-body p-0 pt-2 px-md-2 d-flex flex-column h-100">
                            <h5 class="card-title" id="cardname"><?php echo $article['name'] ?></h5>
                            <p class="card-text"><?php echo $article['description'] ?></p>
                            <div class="d-flex align-self-end h-100">
                                <div class="justify-self-end align-self-end">
                                    <a href="/edit_article.php?article_id=<?php echo $article['id']?>" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                                    <a href="/article_photo_list.php?article_id=<?php echo $article['id']?>" class="btn btn-primary"><i class="bi bi-picture"></i></a>
                                    <a href="#" class="btn btn-primary"><i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach ?>
    </section>
</main>

<?php require('partials/_footer.php') ?>