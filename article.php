<?php require 'partials/_db_connection.php';
require 'partials/_website_data.php';

if (!($article_slug)) {
    header("location:/404.php");
    die();
}
?>

<!DOCTYPE html>
<?php require 'partials/_functions.php' ?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bunzo SRL</title>
    <meta name="description" content="Bunzo is one of the most popular blog  ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Bunzo - Blog HTML Template" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- Gordita Fonts CSS -->
    <link rel="stylesheet" href="/assets/fonts/gordita-fonts.css" />

    <!-- Icofont CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/icofont.min.css" />

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/lightgallery.min.css">

    <!-- Swiper bundle CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/aos.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <!-- <link rel="stylesheet" href="/assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
    <?php require 'partials/_header.php' ?>

    <div class="row">
        <div class="col-lg-12">
            <?php $autor = getAutor($article_slug['autor_id']) ?>
            <!-- Single Recent Article Item Start -->
            <div class="single-recent-article-item" data-aos="fade-up">
                <a href="#!" class="recent-article-thum">
                    <img src="<?php echo $article_slug['img'] ?>" alt="" />
                </a>
                <div class="recent-article-content">
                    <div class="recent-article-post-author">
                        <?php echo __('Home.By') ?> <a href="#"><?php echo $autor['nome'] . " " . $autor['cognome'] ?></a>
                    </div>
                    <h3 class="title"><a href="blog-details.html"><?php echo $article_slug['titolo'] ?></a>
                    </h3>
                    <p class="dec mt-3"><?php echo $article_slug['testo'] ?></p>
                    <div class="recent-article-post-meta">
                        <span class="post-date">
                            <a href="#"><?php echo $article_slug['art_date'] ?></a>
                        </span>
                        <span><?php echo $article_slug['read_time'] ?></span>
                    </div>
                </div>
            </div>
            <!-- Single recent Article Item End -->
        </div>
    </div>

    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="/assets/js/vendor/bootstrap.min.js"></script>

    <!-- Light gallery JS -->
    <script src="/assets/js/plugins/lightgallery.min.js"></script>

    <!-- Isotope JS -->
    <script src="/assets/js/plugins/isotope.min.js"></script>

    <!-- Masonry JS -->
    <script src="/assets/js/plugins/masonry.min.js"></script>

    <!-- ImagesLoaded JS -->
    <script src="/assets/js/plugins/images-loaded.min.js"></script>

    <!-- Swiper Bundle JS -->
    <script src="/assets/js/plugins/swiper-bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="/assets/js/plugins/aos.js"></script>

    <!-- Ajax JS -->
    <script src="/assets/js/plugins/ajax.mail.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
    <!-- <script src="/assets/js/vendor/vendor.min.js"></script>
<script src="/assets/js/plugins/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>
</body>