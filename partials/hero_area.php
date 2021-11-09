<!-- Hero Area Start -->
<div class="hero-area-three">
    <div class="swiper-container hero-slider-three-active">
        <div class="swiper-wrapper">
            <?php foreach (HEROES as $hero_item) : ?>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 order-2 order-md-1">
                                <div class="hero-area-three-post text-left">
                                    <div class="hero-area-three-post-author">
                                        <?php echo __('Home.By') ?> <a href="#"><?php echo $hero_item['author'] ?></a>
                                    </div>
                                    <h1 class="title"><a href="blog-details.html"><?php echo $hero_item['title'] ?></a>
                                    </h1>
                                    <p class="dec mt-4"><?php echo $hero_item['description'] ?></p>
                                    <div class="hero-area-three-post-meta">
                                        <span class="hero-area-three-post-date">
                                            <a href="#"><?php echo $hero_item['datetime'] ?></a>
                                        </span>
                                        <span><?php echo $hero_item['readtime'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 order-1 order-md-2">
                                <div class="hero-three-box">
                                    <div class="hero-three-inner-image">
                                        <img src="<?php echo $hero_item['img'] ?>" alt="<?php echo $hero_item['alt'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="hero-swiper-pagination"></div>
</div>
<!-- Hero Area End -->