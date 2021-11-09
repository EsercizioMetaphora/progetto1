<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
        <h3 class="display-4 mb-6 text-center">I NOSTRI CORSI</h3>
      </div>
    </div>
    <div class="position-relative">
      <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
      <div class="carousel owl-carousel gap-small blog grid-view" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
        <?php foreach (CORSI as $corso_palestra) : ?>
          <div class="item">
            <div class="item-inner">
              <article>
                <div class="card">
                  <figure class="card-img-top overlay overlay1 hover-scale"><a href="#"> <img src="<?php echo $corso_palestra['img'] ?>" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="#" class="hover" rel="category"><?php echo $corso_palestra['nome'] ?></a>
                      </div>
                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html"><?php echo $corso_palestra['trainer'] ?></a></h2>
                    </div>
                    <div class="post-content">
                      <p><?php echo $corso_palestra['giorno'] ?></p>
                      <p><?php echo $corso_palestra['orario'] ?></p>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>