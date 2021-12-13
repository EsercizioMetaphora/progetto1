<nav class="navbar navbar-expand-lg center-nav transparent navbar-light ">
  <div class="container flex-lg-row flex-nowrap align-items-center">
    <div class="navbar-brand w-100">
      <a href="./index.html">
        <img src="_immagini/Pizzeria/LOGO.png" style="width: 120px;" alt="" />
      </a>
    </div>
    <div class="navbar-collapse offcanvas-nav">
      <div class="offcanvas-header d-lg-none d-xl-none">
        <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
        <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
      </div>
      <ul class="navbar-nav">
          <?php foreach(NAVIGATION as $nav_item): ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo $nav_item['href'] ?>"><?php echo $nav_item['description'] ?></a></li>
            <?php endforeach ?>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Dropdown</a>
          <ul class="dropdown-menu">
              <?php foreach (DROPDOWN as $drop_item): ?>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo $drop_item['href'] ?>"><?php echo $drop_item['description'] ?></a></li>
            <?php endforeach ?>
          </ul>
        </li>
      </ul>
      <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-collapse -->
    <div class="navbar-other w-100 d-flex ms-auto">
      <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
        <li class="nav-item d-none d-md-block">
          <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contattaci</a>
        </li>
        <li class="nav-item d-lg-none">
          <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
        </li>
      </ul>
      <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-other -->
  </div>
  <!-- /.container -->
</nav>
<!-- /.navbar -->