<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php require 'db_connection.php' ?>
<?php require 'functions.php' ?>
<?php require 'website_data.php' ?>

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
    <link rel="icon" href="assets/images/favicon.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Gordita Fonts CSS -->
    <link rel="stylesheet" href="assets/fonts/gordita-fonts.css" />

    <!-- Icofont CSS -->
    <link rel="stylesheet" href="assets/css/vendor/icofont.min.css" />

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">

    <!-- Swiper bundle CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="assets/css/plugins/aos.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>




<body class="theme-color-three">







    <!--========  header area =========-->
    <?php //require 'header.php'?>
    <!--======== End of header area  =========-->









    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <!-- Hero Area Start -->


            <div class="hero-area-three">

                <div class="swiper-container hero-slider-three-active">

                    <div class="swiper-wrapper">
                        <?php foreach ($slideshow as $slide_element) : ?>
                            <div class="swiper-slide">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 order-2 order-md-1">
                                            <div class="hero-area-three-post text-left">

                                                <div class="hero-area-three-post-author">
                                                    By <a href="#"><?php echo $slide_element['author'] ?></a>
                                                </div>
                                                <h1 class="title"><a href="<?php echo $slide_element['link'] ?>"><?php echo $slide_element['title'] ?></a>
                                                </h1>
                                                <p class="dec mt-4"><?php echo $slide_element['text'] ?></p>
                                                <div class="hero-area-three-post-meta">
                                                    <span class="hero-area-three-post-date">
                                                        <a href="#"><?php echo $slide_element['date_article'] ?></a>
                                                    </span>
                                                    <span><?php echo $slide_element['reading_time'] ?></span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 order-1 order-md-2">
                                            <div class="hero-three-box">
                                                <div class="hero-three-inner-image">
                                                    <img src="<?php echo $slide_element['img'] ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <div class="hero-swiper-pagination"></div>

            </div>

            <!-- Hero Area End -->

            <div class="mostpopular-category-area section-space--pt_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-three text-center mb-40" data-aos="fade-up">
                                <h2 class="title">Naviga per Categoria</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="hero-three-category">

                                <div class="category-step-1" data-aos="fade-up">
                                    <?php foreach ($post_category as $category) : ?>

                                        <a href="<?php echo $category['href'] ?>" class="btn-primary-three btn-large"><?php echo $category['description'] ?></a>
                                    <?php endforeach ?>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <!-- Recent Article Area Start -->
            <div class="recent-article-area section-space--pb_120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="recent-article-header-two border-top">
                                <div class="section-title-three" data-aos="fade-up">
                                    <h2 class="title">Ultimi Post</h2>
                                </div>
                                <div class="search-box">
                                    <form action="" method="GET">
                                        <div class="input-search-box" data-aos="fade-up">
                                            <input name="q" value="<?php echo $get_q ?>" class="input" type="text" placeholder="Search here">
                                            <button class="submit-button"><i class="icofont-search-1"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Single Recent Article Item Start -->
                            <?php foreach ($post as $post_position) : ?>
                                <div class="single-recent-article-item class-<?php echo $post_position['category_id'] ?>" data-aos="fade-up">

                                    <a href="#!" class="recent-article-thum">
                                        <img src="<?php echo $post_position['img'] ?>" alt="" />
                                    </a>
                                    <div class="recent-article-content">
                                        <div class="recent-article-post-author">
                                            By <a href="#"><?php echo $post_position['author'] ?></a>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html"><?php echo $post_position['title'] ?></a>
                                        </h3>
                                        <p class="dec mt-3"><?php echo $post_position['text'] ?></p>
                                        <div class="recent-article-post-meta">
                                            <span class="post-date">
                                                <a href="#"><?php echo $post_position['date_article'] ?></a>
                                            </span>
                                            <span><?php echo $post_position['time_read'] ?></span>
                                        </div>
                                    </div>

                                </div><!-- Single recent Article Item End -->
                            <?php endforeach ?>


                        </div>


                    </div>
                </div>
            </div>
            <!-- Recent Article Area End -->


            <!-- Related Newsletter Area Start -->
            <div class="related-newsletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="related-newsletter-three-box">
                                <div class="related-newsletter-three-inner-box">
                                    <h2 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing eli.</h2>
                                    <div class="button-box mt-30">
                                        <a href="#" class="btn-primary btn-medium">Call To Action</a>
                                    </div>
                                </div>
                                <div class="subscribe-today-update">
                                    <h4 class="today-update-text">Lorem Ipsum is simply dummy text themes</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Newsletter Area End -->


            <!-- Most Popular Area Start -->
            <div class="most-populer-area section-space--pt_120 section-space--pb_30">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div class="section-title-three" data-aos="fade-up">
                                <h2 class="title">Notizie della settimana</h2>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="most-popular-slider-navigation" data-aos="fade-up">
                                <div class="popular-swiper-button-prev navigation-button"><i class="icofont-long-arrow-left"></i></div>
                                <div class="popular-swiper-button-next navigation-button"><i class="icofont-long-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper -->

                    <div class="swiper-container most-popular-slider-active">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <?php foreach ($news_week as $news_position) : ?>

                                    <!-- Single Most Populer Item Start -->
                                    <div class="single-most-populer-item" data-aos="fade-up">
                                        <a href="#!" class="most-populer-thum">
                                            <img src="<?php echo $news_position['img'] ?>" alt="" />
                                        </a>
                                        <div class="most-populer-content">
                                            <div class="most-populer-post-author">
                                                By <a href="#"><?php echo $news_position['author'] ?></a>
                                            </div>
                                            <h3 class="title"><a href="blog-details.html"><?php echo $news_position['title'] ?></a>
                                            </h3>
                                            <div class="most-populer-post-meta">
                                                <span class="post-date">
                                                    <a href="#"><?php echo $news_position['date'] ?></a>
                                                </span>
                                                <span><?php echo $news_position['read_time'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                                <!-- Single Most Populer Item End -->
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Most Popular Area End -->

            <!-- Trusted Partners Area Start -->
            <div class="trusted-partners-area section-space--pb_120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-three text-center mb-40" data-aos="fade-up">
                                <h2 class="title">I nostri Partner</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trusted-partners-box" data-aos="fade-up">
                                
                                <div class="swiper-container trusted-partners-slider-active">
                                    <div class="swiper-wrapper trusted-partners-slider-wrap">
                                    <?php foreach($partners as $partner_item): ?>
                                        <div class="swiper-slide">
                                            <a href="<?php echo $partner_item['url'] ?>"><img src="<?php echo $partner_item['img']?>" alt="<?php echo $partner_item['alt']?>" /></a>
                                        </div>
                                        <? endforeach ?>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="partners-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Trusted Partners Area End -->


        </div>
    </div>









    <!--======  footer area =======-->
    <footer class="footer-area footer-three">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-widget-top">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo-white-3.png" alt="">
                                </a>
                            </div>
                            <div class="info-text-box">
                                <h6 class="sub-title">ALL SOLUTION IN ONE</h6>
                                <h3 class="title">Unlimited Advice, Tutorial & Resource</h3>
                            </div>

                            <div class="button-right-box mb-20">
                                <a href="#!" class="btn-primary btn-large">Call to action <i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-mid-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-7">
                        <div class="footer-widget footer-subscribe-area">
                            <div class="footer-widget-title">
                                <h4 class="title">Iscriviti alla Newsletter</h4>
                            </div>
                            <form action="./confirmation.php" method="POST">
                                <div class="footer-subscribe-wrap">
                                    <div class="single-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="single-input">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                    <div class="button-box">
                                        <button class="btn-primary btn-bg-3 btn-large" type="submit">Iscriviti </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <ul class="footer-socail-share">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-skype"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 offset-xl-1  col-md-6 col-sm-5">
                        <div class="single-footer-menu-item mt-30">
                            <div class="footer-widget-title">
                                <h4 class="title">Navigation Menu Footer 1</h4>
                            </div>
                            <ul class="footer-widget-menu-list">
                                <li><a href="#!">link</a></li>
                                <li><a href="#!">link</a></li>
                                <li><a href="#!">link</a></li>
                                <li><a href="#!">link</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-menu-item mt-30">
                            <div class="footer-widget-title">
                                <h4 class="title">Navigation Menu Footer 2</h4>
                            </div>
                            <ul class="footer-widget-menu-list">
                                <li><a href="#!">link</a></li>
                                <li><a href="#!">link</a></li>
                                <li><a href="#!">link</a></li>
                                <li><a href="#!">link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <div class="single-footer-menu-item mt-30">
                            <div class="footer-widget-title">
                                <h4 class="title">Azienda Srl</h4>
                            </div>
                            <div class="footer-widget-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing eli
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right-center">
                            <p>© 2021 Footer del sito web</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=====  End of footer area ========-->














    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top icofont-swoosh-up"></i>
        <i class="arrow-bottom icofont-swoosh-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index-2.html"><span>Home Two</span></a></li>
                                <li><a href="index-3.html"><span>Home Three</span></a></li>
                                <li><a href="index-4.html"><span>Home Four</span></a></li>
                                <li><a href="index-5.html"><span>Home Five</span></a></li>
                                <li><a href="index-6.html"><span>Home Six</span></a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html"><span>About</span></a></li>
                        <li class="has-children">
                            <a href="#">Category</a>
                            <ul class="sub-menu">
                                <li><a href="category.html"><span>Category List</span></a> </li>
                                <li><a href="category-grid.html"><span>Category Grid</span></a> </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="blog-details.html"><span>Blog Details</span></a> </li>
                                <li><a href="blog-details-two.html"><span>Blog Details Two</span></a> </li>
                                <li><a href="error-404.html"><span>Error 404</span></a> </li>
                                <li><a href="faq.html"><span>FAQ's</span></a> </li>
                                <li><a href="author-post.html"><span>Author post</span></a> </li>
                                <li><a href="register.html"><span>Register</span></a> </li>
                                <li><a href="write-post.html"><span>Write Post</span></a> </li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html"><span>Contact </span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->








    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Light gallery JS -->
    <script src="assets/js/plugins/lightgallery.min.js"></script>

    <!-- Isotope JS -->
    <script src="assets/js/plugins/isotope.min.js"></script>

    <!-- Masonry JS -->
    <script src="assets/js/plugins/masonry.min.js"></script>

    <!-- ImagesLoaded JS -->
    <script src="assets/js/plugins/images-loaded.min.js"></script>

    <!-- Swiper Bundle JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="assets/js/plugins/aos.js"></script>

    <!-- Ajax JS -->
    <script src="assets/js/plugins/ajax.mail.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>