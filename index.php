<?php require 'partials/_head.php' ?>

<body class="theme-color-three">
    <!--========  header area =========-->
    <?php require 'partials/_header.php' ?>
    <!--======== End of header area  =========-->

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!-- Hero Area Start -->
            <?php require 'partials/_hero.php' ?>
            <!-- Hero Area End -->
            <!-- category menu start DONE-->
            <?php require 'partials/_category.php' ?>
            <!-- category menu start -->

            <!-- Recent Article Area Start DONE-->
            <?php require 'partials/_article.php' ?>
            <!-- Recent Article Area End -->


            <!-- Related Newsletter Area Start -->
            <div class="related-newsletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="related-newsletter-three-box">
                                <div class="related-newsletter-three-inner-box">
                                    <h2 class="title"><?php echo __('Home.Banner.Big.Title') ?></h2>
                                    <div class="button-box mt-30">
                                        <a href="<?php echo __('Home.Banner.Big.link_url') ?>" class="btn-primary btn-medium"><?php echo __('Home.Banner.Big.link_title') ?></a>
                                    </div>
                                </div>
                                <div class="subscribe-today-update">
                                    <h4 class="today-update-text"><?php echo __('Home.Banner.Big.text') ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Newsletter Area End -->


            <!-- Most Popular Area Start -->
            <?php require 'partials/_pop_area.php' ?>
            <!-- Most Popular Area End -->

            <!-- Trusted Partners Area Start -->
            <?php require 'partials/_partners.php' ?>
            <!-- Trusted Partners Area End -->


        </div>
    </div>

    <!--======  footer area =======-->
    <?php require 'partials/footer/_footer.php' ?>
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