<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7">
        <div class="row gx-md-5 gy-5">
          <!--/column -->
          <?php foreach(TESTIMONIALS as $test_item): ?>
          <div class="col-md-6 align-self-end">
            <div class="card bg-pale-red">
              <div class="card-body">
                <blockquote class="icon mb-0">
                  <p>“<?php echo $test_item['description'] ?>”</p>
                  <div class="blockquote-details">
                    <div class="info p-0">
                      <h5 class="mb-1"><?php echo $test_item['name'] ?></h5>
                      <p class="mb-0"><?php echo $test_item['reference'] ?></p>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <?php endforeach ?>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h2 class="display-4 mb-3">Dicono di noi</h2>
        <p class="lead fs-lg">Le opinioni dei nostri clienti</p>
        <a href="#" class="btn btn-navy rounded-pill mt-3">All Testimonials</a>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->