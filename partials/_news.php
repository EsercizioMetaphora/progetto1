<?php $conta = 0 ?>

<?php foreach (NEWS as $news_item) : ?>
    <?php if ($conta % 2 == 0) : ?>
        <article class="row gx-0">
            <div class="col-12 col-lg-6"><img src="/images/news/<?php echo $news_item['img'] ?>" class="d-block w-100" alt="<?php echo $news_item['alt_text'] ?>"></div>
            <div class="col-12 col-lg-6">
                <section class="p-3">
                    <caption><?php echo $news_item['datenews'] ?></caption>
                    <h4 class="mt-3">
                        <?php echo $news_item['title'] ?>
                    </h4>
                    <p>
                        <?php echo $news_item['textnews'] ?>
                    </p>
                    <a class="btn btn-primary" href="/list.php">
                        <?php echo __('readmore') ?>
                    </a>
                </section>
            </div>
        </article>

    <?php else : ?>

        <article class="row gx-0">
            <div class="col-12 col-lg-6">
                <section class="p-3">
                    <caption><?php echo $news_item['datenews'] ?></caption>
                    <h4 class="mt-3">
                        <?php echo $news_item['title'] ?>
                    </h4>
                    <p>
                        <?php echo $news_item['textnews'] ?>
                    </p>
                    <a class="btn btn-primary" href="/list.php">
                        <?php echo __('readmore') ?>
                    </a>
                </section>
            </div>
            <div class="col-12 col-lg-6"><img src="/images/news/<?php echo $news_item['img'] ?>" class="d-block w-100" alt="<?php echo $news_item['alt_text'] ?>"></div>
        </article>

    <?php endif ?>
    <?php $conta++ ?>
<?php endforeach ?>