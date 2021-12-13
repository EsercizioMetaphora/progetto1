<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="grid grid-view projects-tiles">
      <div class="project">
        <div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope">
          <div class="item col-md-6 mt-md-7 mt-lg-15">
            <div class="project-details d-flex justify-content-center align-self-end flex-column ps-0 pb-0">
              <div class="post-header">
                <h2 class="display-4 mb-4 pe-xxl-15">Facciamo solo due tipi di pizze</h2>
                <p class="lead fs-lg mb-0">Come vuole la tradizione napoletana</p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.item -->
          <?php foreach(CAROUSEL as $car_item): ?>
          <div class="item col-md-6">
            <figure class="lift rounded mb-6"><a href="./single-project3.html"> <img src="<?php echo $car_item['img'] ?>"  alt="" /></a></figure>
            <div class="post-category text-line mb-3 text-violet"><?php echo $car_item['description'] ?></div>
            <h2 class="post-title h3"><?php echo $car_item['ricetta'] ?></h2>
          </div>
          <?php endforeach ?>

        </div>
        <!-- /.row -->
      </div>
      <!-- /.project -->
    </div>
    <!-- /.projects-tiles -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->