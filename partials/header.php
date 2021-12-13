<nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none">
    <div class="container">
        <div class="navbar-collapse-wrapper bg-primary d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
            <div class="navbar-brand w-100">
                <a href="./index.html">
                    <img src="_immagini/Pizzeria/LOGO.png" class="w-50" srcset="" alt="Logo" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas-nav">
                <div class="offcanvas-header d-lg-none d-xl-none">
                    <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                    <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
                </div>
                <ul class="navbar-nav">
                    <?php foreach (WEBSITE_MENU as $menu_item) : ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $menu_item['url'] ?>"><?php echo $menu_item['title'] ?></a></li>
                    <?php endforeach ?>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                    <li class="nav-item dropdown language-select text-uppercase">
                        <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IT</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">EN</a></li>
                        </ul>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill"><?php echo __('Home.Vieni.a.Conoscerci') ?></a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.navbar-collapse-wrapper -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->