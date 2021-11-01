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
                        <?php foreach (CATEGORIES as $categorie_item) {
                            echo
                            '<a title=" ' . $categorie_item['title'] . ' "href="' . $categorie_item['url'] . '">' . $categorie_item['alt'] . '</a>';
                        }
                        ?>
                    </div>
                    <?php foreach (CATEGORIES as $categorie_item) {
                        echo
                        '<a title=" ' . $categorie_item['title'] . ' "href="' . $categorie_item['url'] . '">' . $categorie_item['alt'] . '</a>';
                    }
                    ?>
                    <?php foreach (CATEGORIES as $categorie_item) {
                        echo
                        '<a title=" ' . $categorie_item['title'] . ' "href="' . $categorie_item['url'] . '">' . $categorie_item['alt'] . '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>