<div class="mostpopular-category-area section-space--pt_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-three text-center mb-40" data-aos="fade-up">
                    <h2 class="title">Naviga per Categoria</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-three-category">
                    <div class="category-step-1" data-aos="fade-up">
                        <?php foreach (CATEGORIES as $cat_element) : ?>
                            <a href="#" class="btn-primary-three btn-large"><?php echo $cat_element['titolo']?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>