<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-4">
                <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
                <h3 class="display-5 mb-5">Save your time and money by choosing our professional team.</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.</p>
                <a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a>
            </div>
            <!--/column -->
            <div class="col-lg-8">
                <div class="carousel owl-carousel text-center" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
                    <!-- item start -->
                    <?php foreach (TRAINER as $trainer_item) : ?>
                        <?php $social = getSocial($trainer_item['id']) ?>
                        <div class="item">
                            <img class="rounded-circle w-20 mx-auto mb-4" src="<?php echo $trainer_item['img'] ?>" srcset="<?php echo $trainer_item['img'] ?> 2x" alt="" />
                            <h4 class="mb-1"><?php echo $trainer_item['nome'] ?></h4>
                            <div class="meta mb-2">Personal Trainer</div>
                            <p class="mb-2"><?php echo $trainer_item['descrizione'] ?></p>
                            <nav class="nav social justify-content-center text-center mb-0">
                                <?php foreach ($social as $social_item) : ?>
                                    <a href="#"><i class="uil uil-<?php echo $social_item['soc_name'] ?>"></i></a>
                                <?php endforeach ?>
                            </nav>
                            <!-- /.social -->
                        </div>
                    <?php endforeach ?>
                    <!-- /.item -->
                </div>
                <!-- /.owl-carousel -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
