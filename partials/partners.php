<!-- Trusted Partners Area Start -->

<div class="trusted-partners-area section-space--pb_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-three text-center mb-40" data-aos="fade-up">
                    <h2 class="title"><?php echo __('Home.I.Nostri.Partner') ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="trusted-partners-box" data-aos="fade-up">
                    <div class="swiper-container trusted-partners-slider-active">
                        <div class="swiper-wrapper trusted-partners-slider-wrap">
                            <?php foreach (PARTNERS as $partner_item) : ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo $partner_item['url'] ?>"><img src="<?php echo $partner_item['img'] ?>" alt="<?php echo $partner_item['alt'] ?>" /></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="partners-swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

<!-- Trusted Partners Area End -->