<nav class="navbar navbar-expand-lg classic navbar-dark navbar-bg-dark">
  <div class="container flex-lg-row flex-nowrap align-items-center">
    <div class="navbar-brand w-100">
      <a href="./index.html">
        <img src="<?php echo $about[0]['logo'] ?>" class="logo"/>
      </a>
    </div>
    <div class="navbar-collapse offcanvas-nav">
      <div class="offcanvas-header d-lg-none d-xl-none">
        <a href="./index.html"><img src="<?php echo $about[0]['logo'] ?>" class="logo"/></a>
        <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
      </div>
      <ul class="navbar-nav">
      <?php foreach (HEADER_MENU as $headermenu) : ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo $headermenu['link'] ?>"><?php echo $headermenu['name'] ?></a></li>
      <?php endforeach ?>
      </ul>
      <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-collapse -->
    <div class="navbar-other ms-lg-4">
      <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
        <li class="nav-item d-lg-none">
          <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
        </li>
      </ul>
    </div>
    <!-- /.navbar-other -->
    <div class="offcanvas-info text-inverse">
      <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-info-close" aria-label="Close"></button>
      <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
      <div class="mt-4 widget">
        <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
      </div>
      <!-- /.widget -->
      <div class="widget">
        <h4 class="widget-title text-white mb-3">Contact Info</h4>
        <address> Moonshine St. 14/05 <br /> Light City, London </address>
        <a href="mailto:first.last@email.com">info@email.com</a><br /> +00 (123) 456 78 90
      </div>
      <!-- /.widget -->
      <div class="widget">
        <h4 class="widget-title text-white mb-3">Learn More</h4>
        <ul class="list-unstyled">
          <li><a href="#">Our Story</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <!-- /.widget -->
      <div class="widget">
        <h4 class="widget-title text-white mb-3">Follow Us</h4>
        <nav class="nav social social-white">
          <a href="#"><i class="uil uil-twitter"></i></a>
          <a href="#"><i class="uil uil-facebook-f"></i></a>
          <a href="#"><i class="uil uil-dribbble"></i></a>
          <a href="#"><i class="uil uil-instagram"></i></a>
          <a href="#"><i class="uil uil-youtube"></i></a>
        </nav>
        <!-- /.social -->
      </div>
      <!-- /.widget -->
    </div>
    <!-- /.offcanvas-info -->
  </div>
  <!-- /.container -->
  </nav>
  <!-- /.navbar -->
  <div class="modal fade" id="modal-01" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content text-center">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h3 class="mb-4">Login to Sandbox</h3>
        <form class="text-start mb-3">
          <div class="form-floating mb-4">
            <input type="email" class="form-control" placeholder="Email" id="loginEmail">
            <label for="loginEmail">Email</label>
          </div>
          <div class="form-floating mb-4">
            <input type="password" class="form-control" placeholder="Password" id="loginPassword">
            <label for="loginPassword">Password</label>
          </div>
          <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Log In</a>
        </form>
        <!-- /form -->
        <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
        <p class="mb-0">Don't have an account? <a href="#" class="hover">Sign up</a></p>
        <div class="divider-icon my-4">or</div>
        <nav class="nav social justify-content-center text-center">
          <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
          <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
          <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
        </nav>
        <!--/.social -->
      </div>
      <!--/.modal-content -->
    </div>
    <!--/.modal-body -->
  </div>
  <!--/.modal-dialog -->
  </div>
<!--/.modal -->