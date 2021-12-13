<section class="wrapper bg-light">
  <div class="container py-14 py-md-16 text-center">
    <div class="row">
        <?php foreach(ORARI as $time): ?>
      <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
        <img src="<?php echo $time['icon']?>" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-3">Prova la nostra pizza</h2>
        <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">Siamo aperti tutti i giorni dalle <?php echo $time['time1']?> alle <?php echo $time['time2']?> e dalle <?php echo $time['time3']?> alle <?php echo $time['time4']?> </p>
        <a href="#" class="btn btn-primary rounded">Contattaci</a>
      </div>
      <?php endforeach ?>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->