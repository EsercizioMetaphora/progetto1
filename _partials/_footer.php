<footer class="bg-dark text-inverse">

    <div class="container py-13 pb-md-12">

        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">

                    <!-- logo e social con funzione i -->

                    <img class="mb-4 rounded-circle" width="50%" src="<?php echo i('logo_img', 'src') ?>" srcset="<?php echo i('logo_img', 'srcset') ?> 2x" alt="<?php echo i('logo_img', 'href') ?>" />
                    <p class="mb-4"><?php echo _ot('rgt1') ?></p>

                    <nav class="nav social social-white">

                        <a href="<?php echo i('img_twitter', 'href') ?>"><i class="<?php echo i('img_twitter', 'src') ?>"></i></a>
                        <a href="<?php echo i('img_facebook', 'href') ?>"><i class="<?php echo i('img_facebook', 'src') ?>"></i></a>
                        <a href="<?php echo i('img_dribbble', 'href') ?>"><i class="<?php echo i('img_dribbble', 'src') ?>"></i></a>
                        <a href="<?php echo i('img_instagram', 'href') ?>"><i class="<?php echo i('img_instagram', 'src') ?>"></i></a>
                        <a href="<?php echo i('img_youtube', 'href') ?>"><i class="<?php echo i('img_youtube', 'src') ?>"></i></a>
                    </nav>

                </div>
            </div>

            <!--colonna dati con other texts-->

            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3"><?php echo __('footer_title1') ?></h4>
                    <address class="pe-xl-15 pe-xxl-17"><?php echo _ot('address1') ?></address>
                    <a href="mailto:#"><?php echo _ot('email1') ?></a><br /> <?php echo _ot('phone1') ?>
                </div>
            </div>

            <!-- colonna link -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3"><?php echo __('footer_title2') ?></h4>
                    <ul class="list-unstyled  mb-0">
                        <?php foreach (FOOTER as $footer_item) : ?>
                            <li>
                                <a href="<?php echo $footer_item['url'] ?>"><?php echo $footer_item['name_' . $lang] ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>





            <!-- colonna link -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3"><?php echo __('footer_title3') ?></h4>
                    <ul class="list-unstyled  mb-0">
                            <li class="nav-item d-none d-md-block ">
                                <a href="<?php echo _cta('cta_1', 'url') ?>" class="btn btn-sm btn-white rounded-pill scroll"><?php echo _cta('cta_1', 'target_' . $lang) ?></a>
                            </li>
                    </ul>
                </div>
            </div>

            </div>
            <!-- /column column Newsletter Box-->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="../../assets/js/plugins.js"></script>
<script src="../../assets/js/theme.js"></script>