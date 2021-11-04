<div class="mostpopular-category-area section-space--pt_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-three text-center mb-40" data-aos="fade-up">
                    <h2 class="title"><?php echo __('Home.Naviga.per.Categoria') ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-three-category">
                    <div class="category-step-1" data-aos="fade-up">
                        <?php foreach (CATEGORIES as $category_item) : ?>
                            <a data-rel="<?php echo $category_item['id'] ?>" href="<?php echo $category_item['url'] ?>" class="btn-primary-three btn-large categoryfilter"><?php echo $category_item['title'] ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filtrapost -->

<script>
    function filtrapost(id) {
        var all_article_post = document.getElementsByClassName('all-article-post');
        for (const elemento of all_article_post) {
            if (!elemento.classList.contains("class-" + id))
                elemento.style.display = "none";
            else
                elemento.style.display = "";
        }
    }

    var categorylist = document.getElementsByClassName('categoryfilter');
    for (const elemento of categorylist) {
        elemento.addEventListener('click', function(e) {
            e.preventDefault();
            console.log(elemento);
            filtrapost(elemento.getAttribute('data-rel'));
        });
    }
</script>