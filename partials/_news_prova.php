<?php foreach ($news_prova_home as $news_prova_item) : ?>

    <article class="row gx-0">

        <?php if ($news_prova_item['ordine'] % 2 == 0) { ?>
            <div class="col-12 col-lg-6"><img src="/images/news_prova/<?php echo $news_prova_item['img'] ?>" class="d-block w-100" alt="<?php echo $news_prova_item['text_alt'] ?>"></div>
        <?php } ?>

        <div class="col-12 col-lg-6">
            <section class="p-3">
                <caption><?php echo $news_prova_item['data_news'] ?></caption>
                <h4 class="mt-3">
                    <?php echo $news_prova_item['titolo'] ?>
                </h4>
                <p>
                    <?php echo $news_prova_item['testo'] ?>
                </p>
                <a class="btn btn-primary" href="/list.php">
                    <?php echo __('readmore') ?>
                </a>
            </section>
        </div>

        <?php if ($news_prova_item['ordine'] % 2 != 0) { ?>
            <div class="col-12 col-lg-6"><img src="/images/news_prova/<?php echo $news_prova_item['img'] ?>" class="d-block w-100" alt="<?php echo $news_prova_item['text_alt'] ?>"></div>
        <?php } ?>

    </article>

<?php endforeach ?>

