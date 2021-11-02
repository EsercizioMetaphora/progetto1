<!-- Most Popular Area Start -->

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
                    <div class="popular-swiper-button-prev navigation-button"><i class="icofont-long-arrow-left"></i>
                    </div>
                    <div class="popular-swiper-button-next navigation-button"><i class="icofont-long-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Swiper -->

        <div class="swiper-container most-popular-slider-active">
            <div class="swiper-wrapper">
                <?php foreach (NEWS as $news_item) : ?>
                    <div class="swiper-slide">

                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item" data-aos="fade-up">
                            <a href="#!" class="most-populer-thum">
                                <img src="<?php echo $news_item['img'] ?>" alt="<?php echo $news_item['alt'] ?>" />
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#"><?php echo $news_item['author'] ?></a>
                                </div>
                                <h3 class="title"><a href="blog-details.html"><?php echo $news_item['title'] ?></a>
                                </h3>
                                <div class="most-populer-post-meta">
                                    <span class="post-date">
                                        <a href="#"><?php echo $news_item['datetime'] ?></a>
                                    </span>
                                    <span><?php echo $news_item['readtime'] ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Most Populer Item End -->
                        
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<!-- Most Popular Area End -->