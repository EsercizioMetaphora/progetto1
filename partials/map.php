<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row">
      <?php foreach(MAP as $map_item): ?>
      <div class="col-xl-10 mx-auto">
        <div class="card">
          <div class="row gx-0">
            <div class="col-lg-6 align-self-stretch">
              <div class="map map-full rounded-top rounded-lg-start">
                <iframe src="<?php echo $map_item['map_google'] ?>" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
              </div>
              <!-- /.map -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
              <div class="p-10 p-md-11 p-lg-14">
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                  </div>
                  <div class="align-self-start justify-content-start">
                    <h5 class="mb-1">Address</h5>
                    <address><?php echo $map_item['address'] ?></address>
                  </div>
                </div>
                <!--/div -->
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-1">Phone</h5>
                    <p><?php echo $map_item['phone'] ?><br class="d-none d-md-block" /></p>
                  </div>
                </div>
                <!--/div -->
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-1">E-mail</h5>
                    <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body"><?php echo $map_item['email'] ?></a></p>
                  </div>
                </div>
                <!--/div -->
              </div>
              <!--/div -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.card -->
      </div>
      <?php endforeach ?>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->