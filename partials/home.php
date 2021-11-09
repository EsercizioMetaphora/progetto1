<!-- HOME  -->

<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-6 position-relative order-lg-2">
        <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
        <div class="overlap-grid overlap-grid-2">
          <div class="item">
            <figure class="rounded shadow"><img src="./assets/img/photos/about2.jpg" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
          </div>
          <div class="item">
            <figure class="rounded shadow"><img src="./assets/img/photos/about3.jpg" srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="./assets/img/icons/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-3"><?php echo __('Home.Nuova.Apertura') ?></h2>
        <p class="lead fs-lg"><?php echo __('Home.Vi.Presentiamo.I.Nostri.Trainers') ?></p>
        <p class="mb-6"><?php echo __('Home.Prezzi.Competitivi') ?></p>
        <div class="row gy-3 gx-xl-8">
          <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <?php foreach (CORSI as $corso_palestra) : ?>
                <li><span><i class="uil uil-check"></i></span><span><?php echo $corso_palestra['nome'] ?></span></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINE HOME -->