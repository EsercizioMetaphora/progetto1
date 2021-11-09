<div class="basic-slider owl-carousel dots-over" data-nav="true" data-margin="5">
    <!-- CAROUSEL ITEM START -->
    <?php foreach (COURSES as $course_element) : ?>
        <div class="item">
            <section class="wrapper bg-soft-primary">
                <div class="container pt-5 pb-15 py-lg-17 py-xl-19 pb-xl-20 position-relative">
                    <img class="position-lg-absolute col-12 col-lg-10 col-xl-11 col-xxl-10 px-lg-5 px-xl-0 ms-n5 ms-sm-n8 ms-md-n10 ms-lg-0 mb-md-4 mb-lg-0" src="<?php echo $course_element['img'] ?>" data-cue="fadeIn" alt="<?php echo $course_element['alt_text'] ?>" style="top: -1%;" />
                    <div class="row gx-0 align-items-center">
                        <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-7 offset-xxl-6 ps-xxl-12 mt-md-n9 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                            <h1 class="display-2 mb-4 mx-sm-n2 mx-md-0"><?php echo $course_element['nome_corso'] ?></h1>
                            <p class="fs-lg mb-7 px-md-10 px-lg-0 bg-light bg-opacity-50"><?php echo $course_element['descrizione'] ?></p>
                            <p class="fs-lg mb-7 px-md-10 px-lg-0 bg-light bg-opacity-50"><?php echo $course_element['data_ora'] ?></p>
                            <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                <span><a href="#" class="btn btn-primary btn-icon btn-icon-start rounded me-2">ISCRIVITI ORA</a></span>
                            </div>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->
        </div>
    <?php endforeach ?>
    <!-- CAROUSEL ITEM END -->
</div>