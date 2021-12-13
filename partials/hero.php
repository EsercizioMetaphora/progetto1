<section class="wrapper bg-dark angled lower-start">
  <div class="container pt-7 pt-md-11 pb-8">
      <?php foreach (HERO as $hero_item): ?>
    <div class="row gx-0 gy-10 align-items-center">
      <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 text-white mb-4"><?php echo $hero_item['title']?> <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="La vera pizza napoletana"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
        <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15"><?php echo $hero_item['description']?></p>
      </div>
      <!-- /column -->
      <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
        <div class="position-relative light-gallery-wrapper">
          <figure class="rounded shadow-lg"><img src="<?php echo $hero_item['img']?>" alt=""></figure>
        </div>
        <!-- /div -->
      </div>
      <!-- /column -->
    </div>
    <?php endforeach ?>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->