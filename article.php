<?php require('partials/db_connection.php');
require('partials/website_data.php');

if (!($article_slug)) {
    header("location:/404.php");
    die();
}
?>
<?php require('partials/functions.php') ?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php require('partials/head.php') ?>

<body class="theme-color-three">

    <?php require('partials/header.php') ?>


    <!-- Single article Article Item Start -->

    <div class="row">
        <div class="col-lg-12">
            <div class="single-article-article-item" data-aos="fade-up">
                <a href="#!" class="article-article-thum">
                    <img src="<?php echo $article_slug['img'] ?>" alt="<?php echo $article_slug['alt'] ?>" />
                </a>
                <div class="article-article-content">
                    <div class="article-article-post-author">
                        <?php echo __('Home.By') ?> <a href="#"><?php echo $article_slug['author'] ?></a>
                    </div>
                    <h3 class="title"><a href="blog-details.html"><?php echo $article_slug['title'] ?></a>
                    </h3>
                    <p class="dec mt-3"><?php echo $article_slug['description'] ?></p>
                    <div class="article-article-post-meta">
                        <span class="post-date">
                            <a href="#"><?php echo $article_slug['datetime'] ?></a>
                        </span>
                        <span><?php echo $article_slug['readtime'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single article Article Item End -->


    <?php require('partials/footer.php') ?>

    <?php require('partials/script.php') ?>

</body>