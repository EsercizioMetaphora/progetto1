<section class="wrapper bg-light" id="activities">

    <div class="container py-1 pt-md-2">

        <!-- titolone -->
        <div class="row align-items-center mb-10">

            <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                <h2 class="display-4 mb-3"><?php echo __('activities_title') ?></h2>
                <p class="lead fs-20 mb-0"><?php echo __('activities_description') ?></p>
            </div>

            <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                <a href="<?php echo _cta('cta_2', 'url') ?>" class="btn btn-white rounded-pill mb-0"><?php echo _cta('cta_2', 'target_' . $lang) ?></a>
            </div>

        </div>
        <!-- /titolone -->


        <!-- card container-->
        <div class="row gx-md-8 gx-xl-10 ">
            <?php $counter = 0;
            foreach (get_activities(true) as $activities_item) : ?>
                <?php if ($counter % 2 == 0) {
                    //echo "<div class=\"row gx-md-8 gx-xl-10\">";
                }
                ?>

                <!-- column -->
                <div class="col-lg-6">

                    <!-- card -->
                    <div class="card <?php echo ($counter % 2) ? "bg-soft-leaf" : "bg-soft-pink" ?> mb-10">

                        <div class="card-body p-12 pb-0 ">
                            <div class="post-category mb-3 text-dark"><?php echo $activities_item['subtitle_' . $lang] ?></div>
                            <h3 class=" h3 post-title mb-3"><?php echo $activities_item['title_' . $lang] ?></h3>
                            <p><?php echo $activities_item['text_' . $lang] ?></p>
                            <a href="<?php echo $activities_item['url'] ?>" class="more hover link-dark mb-8"><?php echo __('activities_cta') ?></a>
                        </div>

                        <img class="card-img-bottom" src="<?php echo $activities_item['img'] ?>" srcset="<?php echo $activities_item['img'] ?>" alt="<?php echo $activities_item['img_alt'] ?>" />

                    </div>
                    <!-- /card -->

                </div>
                <!-- column -->
                <?php if ($counter++ % 2 == 0) {
                }
                ?>

            <?php endforeach ?>

        </div>
        <!-- /card container -->

    </div>
    <!-- /.container -->

</section>
<!-- /section -->