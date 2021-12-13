<section class="wrapper bg-light">
    <?php foreach (WEARE as $we_are_item) : ?>

        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                    <figure class="rounded"><img src="<?php echo $we_are_item['img_1'] ?>" srcset="<?php echo $we_are_item['img_1'] ?> 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img class="col-10" src="<?php echo $we_are_item['logo'] ?>">
                    
                    <p class="mb-6"><br><?php echo $we_are_item['article_1'] ?></p>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>

            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-md-8 col-lg-6 col-xl-5  position-relative">
                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                    <figure class="rounded"><img src="<?php echo $we_are_item['img_2'] ?>" srcset="<?php echo $we_are_item['img_2'] ?> 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6 order-lg-2">
                    <p class="mb-6"><?php echo $we_are_item['article_2'] ?></p>
                </div>
                <!--/column -->
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                    <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                    <figure class="rounded"><img src="<?php echo $we_are_item['img_3'] ?>" srcset="<?php echo $we_are_item['img_3'] ?> 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <p class="mb-6"><?php echo $we_are_item['article_3'] ?></p>

                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    <?php endforeach ?>

</section>
<!-- /section -->