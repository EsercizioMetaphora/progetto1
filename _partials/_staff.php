<section class="wrapper bg-light" id="staff">
    <div class="container py-14 py-md-16">
        <div class="row mb-3">
            <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
                <h2 class="fs-15 text-uppercase text-muted mb-3"><?php echo __('staff_subtitle')?></h2>
                <h3 class="display-4 mb-7 px-lg-19 px-xl-18"><?php echo __('staff_title')?></h3>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">

        <?php foreach(STAFF as $staff_item) : ?>
            <div class="col-md-6 col-lg-3">
                <div class="position-relative">
                    <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                    <div class="card">
                        <figure class="card-img-top"><img class="img-fluid" src="<?php echo $staff_item ['img']?>" alt="<?php echo $staff_item ['alt_text']?>" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1"><?php echo $staff_item ['name']?></h4>
                            <p class="mb-0"><?php echo $staff_item ['description_' . $lang]?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->