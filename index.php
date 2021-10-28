<?php require('partials/header_new.php') ?>
<div id="main-wrapper">
    <div class="site-wrapper-reveal">

        <!-- Hero Area Start -->
        <div class="hero-area-three">
            <div class="swiper-container hero-slider-three-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 order-2 order-md-1">
                                    <div class="hero-area-three-post text-left">
                                        <div class="hero-area-three-post-author">
                                            By <a href="#">Julian Marshall</a>
                                        </div>
                                        <h1 class="title"><a href="blog-details.html">WooLentor is a powerful
                                                WordPress plugin for
                                                WooCommerce</a>
                                        </h1>
                                        <p class="dec mt-4">That necessitates a robust ecommerce platform that
                                            optimizes your store & products</p>
                                        <div class="hero-area-three-post-meta">
                                            <span class="hero-area-three-post-date">
                                                <a href="#">03 April, 2021</a>
                                            </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 order-1 order-md-2">
                                    <div class="hero-three-box">
                                        <div class="hero-three-inner-image">
                                            <img src="assets/images/hero/home-3-hero-image-01.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 order-2 order-md-1">
                                    <div class="hero-area-three-post text-left">
                                        <div class="hero-area-three-post-author">
                                            By <a href="#">Andrew Hoffman</a>
                                        </div>
                                        <h1 class="title"><a href="blog-details.html">All of these amazing features
                                                come at an affordable price!</a>
                                        </h1>
                                        <p class="dec mt-4">That necessitates a robust ecommerce platform that
                                            optimizes your store & products</p>
                                        <div class="hero-area-three-post-meta">
                                            <span class="hero-area-three-post-date">
                                                <a href="#">03 April, 2021</a>
                                            </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1 col-md-6 order-1 order-md-2">
                                    <div class="hero-three-box">
                                        <div class="hero-three-inner-image">
                                            <img src="assets/images/hero/home-3-hero-image-01.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 order-2 order-md-1">
                                    <div class="hero-area-three-post text-left">
                                        <div class="hero-area-three-post-author">
                                            By <a href="#">Andrew Hoffman</a>
                                        </div>
                                        <h1 class="title"><a href="blog-details.html">All of these amazing features
                                                come at an affordable price!</a>
                                        </h1>
                                        <p class="dec mt-4">That necessitates a robust ecommerce platform that
                                            optimizes your store & products</p>
                                        <div class="hero-area-three-post-meta">
                                            <span class="hero-area-three-post-date">
                                                <a href="#">03 April, 2021</a>
                                            </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1 col-md-6 order-1 order-md-2">
                                    <div class="hero-three-box">
                                        <div class="hero-three-inner-image">
                                            <img src="assets/images/hero/home-3-hero-image-01.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-swiper-pagination"></div>
        </div><!-- Hero Area End -->

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
                                <?php foreach (CATEGORIES as $categories) {
                                    echo
                                    '<a title=" ' . $categories['title'] . ' "href="' . $categories['url'] . '">' . $categories['alt'] . '</a>';
                                }
                                ?>
                            </div>
                            <?php foreach (CATEGORIES as $categories) {
                                echo
                                '<a title=" ' . $categories['title'] . ' "href="' . $categories['url'] . '">' . $categories['alt'] . '</a>';
                            }
                            ?>
                            <?php foreach (CATEGORIES as $categories) {
                                echo
                                '<a title=" ' . $categories['title'] . ' "href="' . $categories['url'] . '">' . $categories['alt'] . '</a>';
                            }
                            ?>
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
                            <div class="input-search-box" data-aos="fade-up">
                                <input class="input" type="text" placeholder="Search here">
                                <button class="submit-button"><i class="icofont-search-1"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Recent Article Item Start -->
                    <div class="single-recent-article-item" data-aos="fade-up">
                        <a href="#!" class="recent-article-thum">
                            <img src="assets/images/recent-article/02-recent-article.jpg" alt="" />
                        </a>
                        <div class="recent-article-content">
                            <div class="recent-article-post-author">
                                By <a href="#">Andrew Hoffman</a>
                            </div>
                            <h3 class="title"><a href="blog-details.html">All of these amazing features
                                    come at an affordable price!</a>
                            </h3>
                            <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                industry orem psum has been them industry spa
                                also the loep into type setting.</p>
                            <div class="recent-article-post-meta">
                                <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                <span>10 min read</span>
                            </div>
                        </div>
                    </div><!-- Single recent Article Item End -->

                    <!-- Single Recent Article Item Start -->
                    <div class="single-recent-article-item" data-aos="fade-up">
                        <a href="#!" class="recent-article-thum">
                            <img src="assets/images/recent-article/10-recent-article.jpg" alt="" />
                        </a>
                        <div class="recent-article-content">
                            <div class="recent-article-post-author">
                                By <a href="#">Andrew Hoffman</a>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                    will help convert more...</a>
                            </h3>
                            <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                industry orem psum has been them industry spa
                                also the loep into type setting.</p>
                            <div class="recent-article-post-meta">
                                <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                <span>10 min read</span>
                            </div>
                        </div>
                    </div><!-- Single recent Article Item End -->

                    <!-- Single Recent Article Item Start -->
                    <div class="single-recent-article-item" data-aos="fade-up">
                        <a href="#!" class="recent-article-thum">
                            <img src="assets/images/recent-article/01-recent-article.jpg" alt="" />
                        </a>
                        <div class="recent-article-content">
                            <div class="recent-article-post-author">
                                By <a href="#">Andrew Hoffman</a>
                            </div>
                            <h3 class="title"><a href="blog-details.html">All of these amazing features
                                    come at an affordable price!</a>
                            </h3>
                            <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                industry orem psum has been them industry spa
                                also the loep into type setting.</p>
                            <div class="recent-article-post-meta">
                                <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                <span>10 min read</span>
                            </div>
                        </div>
                    </div><!-- Single recent Article Item End -->

                    <!-- Single Recent Article Item Start -->
                    <div class="single-recent-article-item" data-aos="fade-up">
                        <a href="#!" class="recent-article-thum">
                            <img src="assets/images/recent-article/05-recent-article.jpg" alt="" />
                        </a>
                        <div class="recent-article-content">
                            <div class="recent-article-post-author">
                                By <a href="#">Andrew Hoffman</a>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                    will help convert more...</a>
                            </h3>
                            <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                industry orem psum has been them industry spa
                                also the loep into type setting.</p>
                            <div class="recent-article-post-meta">
                                <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                <span>10 min read</span>
                            </div>
                        </div>
                    </div><!-- Single recent Article Item End -->

                    <!-- Single Recent Article Item Start -->
                    <div class="single-recent-article-item" data-aos="fade-up">
                        <a href="#!" class="recent-article-thum">
                            <img src="assets/images/recent-article/08-recent-article.jpg" alt="" />
                        </a>
                        <div class="recent-article-content">
                            <div class="recent-article-post-author">
                                By <a href="#">Andrew Hoffman</a>
                            </div>
                            <h3 class="title"><a href="blog-details.html">All of these amazing features
                                    come at an affordable price!</a>
                            </h3>
                            <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                industry orem psum has been them industry spa
                                also the loep into type setting.</p>
                            <div class="recent-article-post-meta">
                                <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                <span>10 min read</span>
                            </div>
                        </div>
                    </div><!-- Single recent Article Item End -->

                    <!-- Single Recent Article Item Start -->
                    <div class="single-recent-article-item" data-aos="fade-up">
                        <a href="#!" class="recent-article-thum">
                            <img src="assets/images/recent-article/03-recent-article.jpg" alt="" />
                        </a>
                        <div class="recent-article-content">
                            <div class="recent-article-post-author">
                                By <a href="#">Andrew Hoffman</a>
                            </div>
                            <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                    will help convert more...</a>
                            </h3>
                            <p class="dec mt-3">Lorem Ipsum is simply dummy text themes print
                                industry orem psum has been them industry spa
                                also the loep into type setting.</p>
                            <div class="recent-article-post-meta">
                                <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                                <span>10 min read</span>
                            </div>
                        </div>
                    </div><!-- Single recent Article Item End -->

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
                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item" data-aos="fade-up">
                            <a href="#!" class="most-populer-thum">
                                <img src="assets/images/populer/01_populer.jpg" alt="" />
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">All of these amazing features
                                        come at an affordable price!</a>
                                </h3>
                                <div class="most-populer-post-meta">
                                    <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single Most Populer Item End -->
                    </div>

                    <div class="swiper-slide">
                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item" data-aos="fade-up">
                            <a href="#!" class="most-populer-thum">
                                <img src="assets/images/populer/02_populer.jpg" alt="" />
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">WooCommerce comes with an
                                        intuitive drag-and-drop...</a>
                                </h3>
                                <div class="most-populer-post-meta">
                                    <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single Most Populer Item End -->
                    </div>

                    <div class="swiper-slide">
                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item" data-aos="fade-up">
                            <a href="#!" class="most-populer-thum">
                                <img src="assets/images/populer/03_populer.jpg" alt="" />
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                        will help convert more...</a>
                                </h3>
                                <div class="most-populer-post-meta">
                                    <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single Most Populer Item End -->
                    </div>

                    <div class="swiper-slide">
                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item" data-aos="fade-up">
                            <a href="#!" class="most-populer-thum">
                                <img src="assets/images/populer/02_populer.jpg" alt="" />
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="blog-details.html">WooCommerce comes with an
                                        intuitive drag-and-drop...</a>
                                </h3>
                                <div class="most-populer-post-meta">
                                    <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single Most Populer Item End -->
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
                                <div class="swiper-slide">
                                    <?php foreach (PARTNERS as $partners) {
                                        echo
                                        '<a title=" ' . $partners['title'] . ' "href="' . $partners['url'] . '">' . $partners['alt'] . $partners['img']  . '</a>';
                                    }

                                    ?>
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

<?php require('partials/footer.php') ?>