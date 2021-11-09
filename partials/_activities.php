<section class="wrapper bg-light">
  <div class="container py-14 pt-md-16">
    <div class="row align-items-center mb-10">
      <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
        <h2 class="display-4 mb-3"><?php echo __('activities_title') ?></h2>
        <p class="lead fs-20 mb-0">Check out some of my latest projects with creative ideas.</p>
      </div>
      <!--/column -->
      <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
        <a href="#" class="btn btn-primary rounded-pill mb-0">See All Projects</a>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    <?php foreach (ACTIVITIES as $activities_item) : ?>
    <div class="card bg-soft-violet mb-10">
      <div class="card-body p-12 pb-0">
        <div class="row">
          <div class="col-lg-4 pb-12 align-self-center">
            <!-- -->

              <div class="post-category mb-3 text-violet"><?php echo $activities_item['time_text'] ?></div>
              <h3 class="h1 post-title mb-3"><?php echo $activities_item['title'] ?></h3>
              <p><?php echo $activities_item['description'] ?></p>
              <a href="<?php echo $activities_item['url'] ?>" class="more hover link-violet">See Project</a>
          </div>
          <!-- /column -->
          <div class="col-lg-7">
            <figure><img class="img-fluid" src="<?php echo $activities_item['img'] ?>" srcset="./assets/img/photos/f2@2x.png 2x" alt="<?php echo $activities_item['img_alt_text'] ?>" /></figure>
          </div>
        <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!--/.card-body -->
    </div>
    <?php endforeach ?>
    <!--/.card -->
    <div class="row gx-md-8 gx-xl-10">
      <div class="col-lg-6">
        <div class="card bg-soft-leaf mb-10">
          <div class="card-body p-12 pb-0">
            <div class="post-category mb-3 text-leaf">Web Design</div>
            <h3 class="h1 post-title mb-3">Missio Theme</h3>
            <p>Maecenas faucibus mollis interdum sed posuere porta consectetur cursus porta lobortis. Scelerisque id ligula felis.</p>
            <a href="#" class="more hover link-leaf mb-8">See Project</a>
          </div>
          <!--/.card-body -->
          <img class="card-img-bottom" src="./assets/img/photos/f3.png" srcset="./assets/img/photos/f3@2x.png 2x" alt="" />
        </div>
        <!--/.card -->
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="card bg-soft-pink">
          <div class="card-body p-12 pb-0">
            <div class="post-category mb-3 text-pink">Mobile Design</div>
            <h3 class="h1 post-title mb-3">Storage App</h3>
            <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis. Scelerisque id ligula porta felis euismod semper.</p>
            <a href="#" class="more hover link-pink mb-8">See Project</a>
          </div>
          <!--/.card-body -->
          <img class="card-img-bottom" src="./assets/img/photos/f4.png" srcset="./assets/img/photos/f4@2x.png 2x" alt="" />
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