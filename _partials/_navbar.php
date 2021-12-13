<div class="mb-13">

    <nav class="navbar navbar-expand-lg center-nav navbar-dark bg-dark fixed-top">
        <div class="container flex-lg-row flex-nowrap align-items-center">

            <!-- logo -->
            <div class="navbar-brand w-100">
                <a class="btn btn-sm rounded" href="<?php echo i('logo_img', 'href') ?>">
                    <img class="p-1" width="100%" src="<?php echo i('logo_img', 'src') ?>" srcset="<?php echo i('logo_img', 'srcset') ?>" alt="<?php echo i('logo_img', 'alt') ?>" />
                </a>
            </div>
            <!-- /logo -->


            <!-- navbar collapse -->
            <div class="navbar-collapse offcanvas-nav">

                <!-- logo collapse -->
                <div class="offcanvas-header d-lg-none d-xl-none">

                    <a href="<?php echo i('logo_img', 'href') ?>">
                        <img class="rounded-circle p-1" width="30%" src="<?php echo i('logo_img', 'src') ?>" srcset="<?php echo i('logo_img', 'srcset') ?>" alt="<?php echo i('logo_img', 'alt') ?>" />
                    </a>

                    <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close">
                    </button>

                </div>
                <!-- /logo collapse -->

                <!-- navbar items-->
                <ul class="navbar-nav">

                    <!-- FOREACH DROPDOWN ROOT & CHILDREN-->
                    <?php foreach (navbar() as $root_item) :
                        $children = navbar($root_item['name_'.$lang]);
                        if (count($children) > 0) { ?>

                            <!-- dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle scroll" href="<?php echo $root_item['url'] ?>">
                                    <?php echo $root_item['name_'.$lang] ?>
                                </a>

                                <ul class="dropdown-menu">

                                    <?php foreach ($children as $child_item) : ?>

                                        <li class="nav-item">
                                            <a class="dropdown-item" href="<?php echo $child_item['url'] ?>">
                                                <?php echo $child_item['name_'.$lang] ?>
                                            </a>
                                        </li>

                                    <?php endforeach ?>


                                </ul>

                            </li>
                            <!-- /dropdown -->

                        <?php } else { ?>

                            <!-- link -->
                            <li class="nav-item">
                                <a class="nav-link scroll" href="<?php echo $root_item['url'] ?>">
                                    <?php echo $root_item['name_'.$lang] ?>
                                </a>
                            </li>
                            <!-- /link -->

                        <?php } ?>

                    <?php endforeach ?>
                    <!-- /FOREACH DROPDOWN ROOT & CHILDREN-->

                </ul>
                <!-- /navbar items -->

            </div>
            <!-- /.navbar-collapse -->


            <!--section -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">

                    <!-- language-->
                    <li class="nav-item dropdown language-select text-uppercase">

                        <!------->
                        <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $lang ?>
                        </a>
                        <!------->

                        <ul class="dropdown-menu">

                            <li class="nav-item">
                                <a class="dropdown-item" href="index.php?lang=it">
                                    It
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="dropdown-item" href="index.php?lang=en">
                                    En
                                </a>
                            </li>

                        </ul>

                    </li>
                    <!-- /language-->

                    <!-- cta-->
                    <li class="nav-item d-none d-md-block ">
                        <a href="<?php echo _cta('cta_1', 'url') ?>" class="btn btn-sm btn-white rounded-pill scroll"><?php echo _cta('cta_1', 'target_' . $lang) ?></a>
                    </li>
                    <!-- /cta-->

                    <li class="nav-item d-lg-none">
                        <div class="navbar-hamburger">
                            <button class="hamburger animate plain" data-toggle="offcanvas-nav" aria-label="dropdown menu">
                                <span>
                                </span>
                            </button>
                        </div>
                    </li>

                </ul>
            </div>
            <!--/section -->

        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</div>
<!-- /container con margine -->
