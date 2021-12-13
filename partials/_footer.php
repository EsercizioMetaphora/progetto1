<footer>
  <div class="container pb-7">
    <div class="row gx-lg-0 gy-6">
      <div class="col-lg-3">
        <div class="widget">
          <img class="mb-4" src="<?php echo $about[0]["logo"] ?>" alt="" style="max-width: 150px"/>
          <p class="lead mb-0"><?php echo $about[0]["description"] ?></p>
        </div>
        <!-- /.widget -->
      </div>
      <!-- /column -->
	  <?php foreach (FOOTER_MENU as $footermenu) : ?>
      <div class="col-lg offset-lg-1">
        <div class="widget">
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
            </div>
            <div>
              <h5 class="mb-1"><?php echo $footermenu["name"] ?></h5>
			  <p class="lead mb-0"><?php echo $footermenu["link"] ?></p>
            </div>
          </div>
          <!--/div -->
        </div>
        <!-- /.widget -->
      </div>
	  <?php endforeach ?>
      <!-- /column -->
    </div>
    <!--/.row -->
    <hr class="mt-13 mt-md-14 mb-7" />
    <div class="d-md-flex align-items-center justify-content-between">
      <p class="mb-2 mb-lg-0">© 2021 Sandbox. All rights reserved.</p>
      <nav class="nav social social-muted mb-0 text-md-end">
        <a href="#"><i class="uil uil-twitter"></i></a>
        <a href="#"><i class="uil uil-facebook-f"></i></a>
        <a href="#"><i class="uil uil-dribbble"></i></a>
        <a href="#"><i class="uil uil-instagram"></i></a>
        <a href="#"><i class="uil uil-youtube"></i></a>
      </nav>
      <!-- /.social -->
    </div>
  </div>
  <!-- /.container -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>