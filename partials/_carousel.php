<section class="mt-4">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            
            <?php $str_active = 'active'; ?>
            <?php foreach ($carousel_home as $carousel_item) : ?>
                <div class="carousel-item <?php echo $str_active ?>">
                    <picture>
                        <source srcset="<?php echo $carousel_item['img'] ?>" media="(min-width: 992px)">
                        <img src="<?php echo $carousel_item['img'] ?>" class="d-block w-100" alt="<?php echo $carousel_item['alt'] ?>">
                    </picture>
                </div>
                <?php $str_active = ''; ?>
            <?php endforeach ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>