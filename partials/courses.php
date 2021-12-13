<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
      <?php foreach (COURSES as $course_item):?>
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center">
      <div class="col-lg-6 position-relative">
        <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
        <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
        <figure class="rounded mb-0"><img src="<?php echo $course_item['img'] ?>" srcset="./assets/img/photos/se3@2x.jpg 2x" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <h3 class="display-4 mb-4"><?php echo $course_item['title'] ?></h3>
        <p class="mb-5"><?php echo $course_item['description'] ?></p>
          <!--/column -->
        </div>
        <!--/.row -->
        <a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">More Details</a>
      </div>
      <?php endforeach ?>
      <!--/column -->
    </div>
    <!--/.row -->
    
  <!-- /.container -->
</section>
<!-- /section -->