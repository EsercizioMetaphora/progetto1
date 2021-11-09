
<?php require('partials/_head.php') ?>
NAVBAR 
<nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
  <div class="container flex-lg-row flex-nowrap align-items-center">
    <div class="navbar-brand w-100">
      <a href="./index.html">
        <img src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
      </a>
    </div>
    <div class="navbar-collapse offcanvas-nav">
      <div class="offcanvas-header d-lg-none d-xl-none">
        <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
        <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
      </div>
      <ul class="navbar-nav">
        <!--<li class="nav-item"><a class="nav-link" href="#">Link</a></li>-->
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Dropdown</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Dropdown</a>
              <ul class="dropdown-menu">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Dropdown</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">Mega Menu</a>
          <ul class="dropdown-menu mega-menu">
            <li class="mega-menu-content">
              <div class="row gx-0 gx-lg-3">
                <div class="col-lg-6">
                  <h6 class="dropdown-header">One</h6>
                  <div class="row gx-0">
                    <div class="col-lg-6">
                      <ul class="list-unstyled">
                        <li><a class="dropdown-item" href="#">Link</a></li>
                        <li><a class="dropdown-item" href="#">Link</a></li>
                        <li><a class="dropdown-item" href="#">Link</a></li>
                      </ul>header
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                      <ul class="list-unstyled">
                        <li><a class="dropdown-item" href="#">Link</a></li>
                        <li><a class="dropdown-item" href="#">Link</a></li>
                        <li><a class="dropdown-item" href="#">Link</a></li>
                      </ul>
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-3">
                  <h6 class="dropdown-header">Two</h6>
                  <ul class="list-unstyled">
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Link</a></li>
                  </ul>
                </div>
                <!--/column -->
                <div class="col-lg-3">
                  <h6 class="dropdown-header">Three</h6>
                  <ul class="list-unstyled">
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Link</a></li>
                  </ul>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </li>
            <!--/.mega-menu-content-->
          </ul>
          <!--/.dropdown-menu -->
        </li>
        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
      </ul>
      <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-collapse -->
    <div class="navbar-other w-100 d-flex ms-auto">
      <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
        <li class="nav-item dropdown language-select text-uppercase">
          <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
            <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
            <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
          </ul>
        </li>
        <li class="nav-item d-none d-md-block">
          <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
        </li>
        <li class="nav-item d-lg-none">
          <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
        </li>
      </ul>
      <!-- /.navbar-nav -->
    </div>header
    <!-- /.navbar-other -->
  </div>
  <!-- /.container -->
</nav>
<!-- /.navbar -->

