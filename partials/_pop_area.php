<div class="most-populer-area section-space--pt_120 section-space--pb_30">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="section-title-three" data-aos="fade-up">
                    <h2 class="title">Notizie della settimana</h2>
                </div>
            </div>
            <div class="col-4">
                <div class="most-popular-slider-navigation" data-aos="fade-up">
                    <div class="popular-swiper-button-prev navigation-button"><i class="icofont-long-arrow-left"></i></div>
                    <div class="popular-swiper-button-next navigation-button"><i class="icofont-long-arrow-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper-container most-popular-slider-active">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <!-- Single Most Populer Item Start -->
                    <?php foreach (HEROES as $hero_item) : ?>
                        <?php $autor = getAutor($hero_item['autor_id']) ?>

                        <div class="single-most-populer-item" data-aos="fade-up">
                            <a href="#!" class="most-populer-thum">
                                <img src="assets/images/populer/01_populer.jpg" alt="" />
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#"><?php echo $autor['nome'] . " " . $autor['cognome'] ?></a>
                                </div>
                                <h3 class="title"><a href="blog-details.html"><?php echo $hero_item['titolo'] ?></a>
                                </h3>
                                <div class="most-populer-post-meta">
                                    <span class="post-date">
                                        <a href="#"><?php echo $hero_item['art_date'] ?></a>
                                    </span>
                                    <span><?php echo $hero_item['read_time'] ?></span>
                                </div>
                            </div>
                        <?php endforeach ?>
                        </div><!-- Single Most Populer Item End -->
                </div>
            </div>
        </div>
    </div>
</div>