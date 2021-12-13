
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row text-white text-center">

            <h3 class="display-4 mb-7 px-lg-19 px-xl-18"><?php echo __('testimonial_title') ?></h3>

            <div class="col-xl-10 mx-auto mb-14 mb-lg-n6 mt-0">

                <div class="card image-wrapper bg-full bg-dark bg-overlay bg-overlay-400" data-image-src="./assets/img/photos/bg2.jpg">
                    <div class="card-body p-9 p-xl-12">
                        <div class="row gx-0">
                            <div class="col-xxl-9 mx-auto">
                                <div class="basic-slider owl-carousel dots-dark gap-small mb-0" data-margin="30">

                                    <?php foreach (TESTIMONIAL as $testimonial_item) : ?>

                                        <div class="item">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="border-0 fs-lg mb-2">
                                                <p><?php echo $testimonial_item['text_' . $lang] ?></p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1 text-white"><?php echo $testimonial_item['author'] ?></h5>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    <?php endforeach ?>

                                </div>
                                <!-- /.owl-carousel -->
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->