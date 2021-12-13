<?php require('partials/_head.php') ?>

<!-- storia -->
<!-- pizze -->
<div style="margin: 50px 25px;">
<div class="grid grid-view projects-tiles">
	<div class="project">
		<div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope" style="position: relative; height: 1011.92px;">
			<div class="item col-md-6 mt-md-7 mt-lg-15" style="position: absolute; left: 0%; top: 0px;">
				<div class="project-details d-flex justify-content-center align-self-end flex-column ps-0 pb-0">
					<div class="post-header">
						<h2 class="display-4 mb-4 pe-xxl-15">Le nostre pizze</h2>
					</div>
					<!-- /.post-header -->
				</div>
				<!-- /.project-details -->
			</div>
			<!-- /.item -->
			<?php foreach (PIZZE as $pizzeprodotte) : ?>
				<div class="item col-md-6" style="position: absolute; left: 50%; top: 0px;">
					<figure class="lift rounded mb-6">
						<a href="<?php echo $pizzeprodotte['link'] ?>">
							<img src="<?php echo $pizzeprodotte['img'] ?>" alt="">
						</a>
					</figure>
					<div class="post-category text-line mb-3 text-violet"><?php echo $pizzeprodotte['description'] ?></div>
					<h2 class="post-title h3"><?php echo $pizzeprodotte['name'] ?></h2>
				</div>
			<?php endforeach ?>
			<!-- /.item -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.project -->
</div>
</div>

<!-- corso -->

<section class="wrapper bg-light">
	<div class="container py-14 py-md-16 text-center">
		<?php foreach (CORSI as $corso) : ?>
			<div class="row">
				<div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
					<h2 class="display-4 mb-3">Join Our Course</h2>
					<p class="lead fs-lg mb-6 px-xl-10 px-xxl-15"><?php echo $corso["description"] ?></p>
					<a href="<?php echo $corso["link"] ?>" class="btn btn-primary rounded">Join "<?php echo $corso["name"] ?>" Course</a>
				</div>
				<!-- /column -->
			</div>
		<?php endforeach ?>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<!-- /section -->


<!-- pizzaioli -->

<section class="wrapper bg-light">
	<div class="container py-14 py-md-16">
		<div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
			<div class="col-lg-4">
				<h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
				<h3 class="display-5 mb-5">Save your time and money by choosing our professional team.</h3>
			</div>
			<!--/column -->
			<div class="col-lg-8">
				<div class="carousel owl-carousel text-center" data-margin="30" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
				<?php foreach (PIZZAIOLI as $pizzaiolo) : ?>
					<div class="item">
						<img class="rounded-circle w-20 mx-auto mb-4" src="<?php echo $pizzaiolo["img"] ?>" alt="" />
						<h4 class="mb-1"><?php echo $pizzaiolo["name"] ?> <?php echo $pizzaiolo["surname"] ?></h4>
						</nav>
						<!-- /.social -->
					</div>
				<?php endforeach ?>
				</div>
				<!-- /.owl-carousel -->
			</div>
			<!--/column -->
		</div>
		<!--/.row -->
	</div>
	<!-- /.container -->
</section>
<!-- /section -->

<!-- cosa dicono -->

<!-- mappa -->
<div class="d-flex flex-column align-items-center">
	<h1>Dove trovarci</h1>
	<h3>Siamo aperti tutti i giorni</h3>
	<h3>H 11-16 & 18-23</h3>
	<div class="bordermap" style="border: 1px solid black; margin-bottom: 50px">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d180.99435223355133!2d11.87918023306826!3d43.46248371170801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132bed5b5d910e7b%3A0x5703d79d18a2b04!2sVia%20Roma%2C%2052100%20Arezzo%20AR!5e0!3m2!1sen!2sit!4v1639391243355!5m2!1sen!2sit" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</div>

<!-- info -->
<?php require('partials/_footer.php') ?>