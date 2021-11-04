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
                            <h4 class="title"><?php echo __('Home.Unisciti.alla.Newsletter') ?></h4>
                        </div>
                        <form action="/confirmation.php" method="POST">
                            <div class="footer-subscribe-wrap">
                                <div class="single-input">
                                    <input name="newsletter[name]" type="text" placeholder="Your Name">
                                </div>
                                <div class="single-input">
                                    <input name="newsletter[email]" type="email" placeholder="Email Address">
                                </div>
                                <div class="button-box">
                                    <button class="btn-primary btn-bg-3 btn-large" type="submit">Iscriviti </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <ul class="footer-socail-share">
                        <?php foreach (SOCIALS as $social_item) : ?>
                            <li><a href="<?php echo $social_item['url'] ?>"><i class="icofont-<?php echo $social_item['title'] ?>" alt="<?php echo $social_item['alt'] ?>"></i></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>

                <div class="col-lg-3 offset-xl-1  col-md-6 col-sm-5">
                    <div class="single-footer-menu-item mt-30">
                        <div class="footer-widget-title">
                            <h4 class="title"><?php echo __('Home.Footer1') ?></h4>
                        </div>
                        <ul class="footer-widget-menu-list">
                            <?php foreach (WEBSITE_FOOTER_1 as $footer_1) : ?>
                                <li><a href="<?php echo $footer_1['url'] ?>" alt="<?php echo $footer_1['alt'] ?>"><?php echo $footer_1['title'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-menu-item mt-30">
                        <div class="footer-widget-title">
                            <h4 class="title"><?php echo __('Home.Footer2') ?></h4>
                        </div>
                        <ul class="footer-widget-menu-list">
                            <?php foreach (WEBSITE_FOOTER_2 as $footer_2) : ?>
                                <li><a href="<?php echo $footer_2['url'] ?>" alt="<?php echo $footer_2['alt'] ?>"><?php echo $footer_2['title'] ?></a></li>
                            <?php endforeach ?>
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

<?php require 'partials/script.php' ?>
</body>

</html>