<!doctype html>
<html lang="en">

<?php require 'partials/_db_connection.php' ?>
<?php require 'partials/_website_data.php' ?>
<?php require 'partials/_functions.php' ?>
<?php require 'partials/_head.php' ?>

<body>

	<div class="content-wrapper">
		<header class="wrapper bg-light">
			<?php foreach (ABOUT as $about) : ?>
				<div class="bg-navy text-white fw-bold fs-15 mb-2">
					<div class="container py-2 d-md-flex flex-md-row">

						<div class="d-flex flex-row align-items-center">
							<div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
							<address class="mb-0"><?php echo $about['position'] ?></address>
						</div>
						<div class="d-flex flex-row align-items-center me-6 ms-auto">
							<div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
							<p class="mb-0"><?php echo $about['telephone_number'] ?></p>
						</div>
						<div class="d-flex flex-row align-items-center">
							<div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
							<p class="mb-0"><a href="mailto:<?php echo $about['email'] ?>" class="link-white hover"><?php echo $about['email'] ?></a></p>
						</div>
					</div>
				</div>
			<?php endforeach ?>
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
							<?php foreach (HEADER_MENU as $menu) : ?>
								<li class="nav-item"><a class="nav-link" href="<?php echo $menu['link'] ?>"><?php echo $menu['name'] ?></a>
								</li>
							<?php endforeach ?>
						</ul>
						<!-- /.navbar-nav -->
					</div>
					<!-- /.navbar-collapse -->
					<div class="navbar-other w-100 d-flex ms-auto">
						<ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
							<li class="nav-item d-none d-md-block">
								<a href="./contact.html" class="btn btn-sm btn-primary rounded">Contact</a>
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
		</header>
	</div>

	<div style="margin: 20px">
		<div class="grid grid-view projects-tiles">
          <div class="project">
            <div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope" style="position: relative; height: 1011.92px;">
              <div class="item col-md-6 mt-md-7 mt-lg-15" style="position: absolute; left: 0%; top: 0px;">
                <div class="project-details d-flex justify-content-center align-self-end flex-column ps-0 pb-0">
                  <div class="post-header">
                    <h2 class="display-4 mb-4 pe-xxl-15">Our Courses</h2>
                    <p class="lead fs-lg mb-0">Se ti va bene bene, sennò ti trovi un'altra palestra.</p>
                  </div>
                  <!-- /.post-header -->
                </div>
                <!-- /.project-details -->
              </div>
              <!-- /.item -->
			  <?php foreach (COURSES as $course) : ?>
              <div id="<?php echo $course['idelement']?>" class="item col-md-6" style="position: absolute; left: 50%; top: 0px;">
                <figure class="lift rounded mb-6"><a href="<?php echo $course['link']?>"> <img src="<?php echo $course['img']?>" srcset="<?php echo $course['img']?> 2x" alt=""></a></figure>
                <div class="post-category text-line mb-3 text-violet"><?php echo $course['description']?></div>
                <h2 class="post-title h3"><?php echo $course['name']?></h2>
              </div>
			  <?php endforeach ?>
              <!-- /.item -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
        </div>
	</div>
		<section class="wrapper bg-light">
		<div class="container py-14 py-md-16">
			<div class="row mb-3">
				<div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
					<h2 class="fs-15 text-uppercase text-muted mb-3">Our Team</h2>
					<h3 class="display-4 mb-7 px-lg-19 px-xl-18">Think unique and be innovative. Make a difference with Sandbox.</h3>
				</div>
				<!--/column -->
			</div>
			<!--/.row -->
			<div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
			<div class="carousel owl-carousel clients mb-0" data-margin="30" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="3000" data-responsive='{"0":{"items": "2"}, "768":{"items": "4"}, "992":{"items": "5"}, "1200":{"items": "6"}, "1400":{"items": "7"}}'>
		<?php foreach (PERSONAL_TRAINERS as $personal_trainer) : ?>
					<div class="position-relative">
						<div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
						<div class="card">
							<figure class="card-img-top"><img class="img-fluid" src="<?php echo $personal_trainer['img']?>" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
							<div class="card-body px-6 py-5">
								<h4 class="mb-1"><?php echo $personal_trainer['name']?> <?php echo $personal_trainer['surname']?></h4>
								<p class="mb-0"><?php echo $personal_trainer['role']?></p>
							</div>
							<!--/.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /div -->
			<?php endforeach ?>
    </div>
    <!-- /.owl-carousel -->
			</div>
			<!--/.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /section -->

	<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <h2 class="display-5 mb-7 text-center">Our Pricing</h2>
    <div class="pricing-wrapper">
      <div class="pricing-switcher-wrapper switcher">
        <p class="mb-0 pe-3">Monthly</p>
        <div class="pricing-switchers">
          <div class="pricing-switcher pricing-switcher-active"></div>
          <div class="pricing-switcher"></div>
          <div class="switcher-button bg-primary"></div>
        </div>
        <p class="mb-0 ps-3">Yearly <span class="text-red">(Save 35%)</span></p>
      </div>
      <div class="row gx-0 gy-6 mt-2">
		  <?php foreach (PRICING as $price) : ?>
        <div class="col-md-6 col-lg-3">
          <div class="pricing card shadow-none">
            <div class="card-body">
              <h4 class="card-title"><?php echo $price['plan_name']?></h4>
              <div class="prices text-dark">
                <div class="price price-show"><span class="price-currency">$</span><span class="price-value"><?php echo $price['month_price']?></span> <span class="price-duration">month</span></div>
                <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value"><?php echo $price['year_price']?></span> <span class="price-duration">year</span></div>
			</div>
              <!--/.prices -->
			  <div style="margin-bottom: 30px"></div>
              <a href="#" class="btn btn-soft-primary rounded-pill">Choose Plan</a>
			  
            </div>
            <!--/.card-body -->
          </div>
          <!--/.pricing -->
        </div>
        <!--/column -->
		<?php endforeach ?>
      </div>
      <!--/.row -->
    </div>
    <!--/.pricing-wrapper -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

	<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
  	<div class="mx-auto text-center">
		<h2 class="fs-15 text-uppercase text-muted mb-3">How to find us</h2>
		<iframe style="margin:auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.2504709891136!2d-58.43280648515004!3d-34.57252836335479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb597c47d6729%3A0xd088be9d7ed75a95!2sVaffanculo%20Cantina%20Italiana!5e0!3m2!1sen!2sit!4v1636476174509!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	</div>
	</section>
	

	<?php require 'partials/_footer.php' ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="../../assets/js/plugins.js"></script>
  <script src="../../assets/js/theme.js"></script>
</body>

</html>