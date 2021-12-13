<div id="hero">

    <section class="wrapper">

        <div class="container py-14 py-md-10">

            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

                <div class="col-lg-6 position-relative order-lg-2">


                    <div class="overlap-grid overlap-grid-2">

                        <div class="item">
                            <figure class="rounded shadow"><img src="<?php echo i('hero_img2', 'src') ?>" srcset="<?php echo i('hero_img2', 'srcset') ?> 2x" alt="<?php echo i('hero_img2', 'alt') ?>"></figure>
                        </div>

                        <div class="item">
                            <figure class="rounded shadow"><img src="<?php echo i('hero_img', 'src') ?>" srcset="<?php echo i('hero_img', 'srcset') ?>" alt="<?php echo i('hero_img', 'alt') ?>"></figure>
                        </div>

                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">

                    <img src="<?php echo i('logo_img', 'src') ?>" width="80%" class="mx-auto d-block mb-4" alt="<?php echo i('logo_img', 'alt') ?>" />

                    <h2 class="display-4 mb-3 text-center"><?php echo __('hero_title') ?></h2>

                    <p class="lead fs-lg text-center"><?php echo __('hero_text') ?></p>
                    <p class="mb-6 text-center"><?php echo __('hero_subtext') ?></p>
                    <div class="row gy-3 gx-xl-8">

                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->




    <section class="wrapper image-wrapper  bg-overlay-400 bg-content " data-image-src="./assets/img/photos/bg4.jpg">
        <div class="container pt-1 pb-14" style="z-index: 5; position:relative">
            <div class="row gx-0 gy-12 align-items-center">

                <!--/column -->
                <div class="col-lg-4 offset-lg-1 p-3">

                    <div class="basic-slider owl-carousel dots-over shadow-lg" data-nav="true" data-margin="5">
                        <?php foreach (CAROUSEL as $carousel_item) : ?>

                            <div class="item"><img src="<?php echo $carousel_item['img'] ?>" srcset="<?php echo $carousel_item['img'] ?> 2x" class="rounded" alt="<?php echo $carousel_item['alt_text'] ?>" /></div>
                        <?php endforeach ?>
                    </div>
                    <!-- /.basic-slider -->

                </div>
                <!-- /column -->

                <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start p-3" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h2 class="display-2 mb-5"><?php echo __('hero_title2') ?></h1>
                        <p class="lead fs-lg lh-sm mb-7 pe-xl-10"><?php echo __('hero_text2') ?></p>
                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                        </div>
                </div>


            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    



</div>