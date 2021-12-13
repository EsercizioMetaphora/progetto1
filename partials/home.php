<!-- HOME  -->

<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-6 position-relative order-lg-2">
        <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
        <div class="overlap-grid overlap-grid-2">
          <div class="item">
            <figure class="rounded shadow"><img src="/_immagini/Pizzeria/images.jpeg" alt=""></figure>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="./assets/img/icons/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-3"><?php echo __('Home.Nuova.Apertura') ?></h2>
        <p class="lead fs-lg"><?php echo __('Home.Corsi') ?></p>
        <p class="mb-6"><?php echo __('Home.Apertura.Locale') ?></p>
        <div class="row gy-3 gx-xl-8">
          <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="wrapper bg-light text-center">
  <div class="container pt-14 pt-md-16">
    <div class="row">
      <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <h1>LE NOSTRE PIZZE SPECIALI</h1>
  <div class="container-fluid px-md-6">
    <div class="carousel owl-carousel blog grid-view mb-16 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1500":{"items": "3"}}'>
      <?php foreach (PIZZE as $pizza) : ?>
        <div class="item">
          <figure class="rounded"><?php echo $pizza['nome'] ?><img src="<?php echo $pizza['img'] ?>" alt="" /><a class="item-link" href="./single-project.html"><i class="uil uil-link"></i></a></figure>
        </div>
      <?php endforeach ?>
    </div>

    <h1>LA NOSTRA STORIA DAL 1880 AD OGGI</h1>
    <div class="container-fluid px-md-6 ">
      <div class="carousel owl-carousel blog grid-view mb-16 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "1500":{"items": "3"}}'>
        <div class="item">
          <figure class="rounded"><img src="/_immagini/Pizzeria/Gigino-Pizza-a-metro-Vico-Equense-Napoli-Pizza-Storia-Brevetto-08.jpg" alt="" /><a class="item-link" href="./single-project.html"><i class="uil uil-link"></i></a></figure>
        </div>
      </div>

    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /section -->


<!-- /.basic-slider -->

<!-- FINE HOME -->