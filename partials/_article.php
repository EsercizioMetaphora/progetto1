<div class="recent-article-area section-space--pb_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="recent-article-header-two border-top">
                    <div class="section-title-three" data-aos="fade-up">
                        <h2 class="title"><?php echo __('Home.Ultimi_Post') ?></h2>
                    </div>
                    <div class="search-box">
                        <div class="input-search-box" data-aos="fade-up">
                            <input class="input" type="text" placeholder="Search here">
                            <button class="submit-button"><i class="icofont-search-1"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <?php foreach(ARTICLES as $art_element):?>
                <?php $autor = getAutor($art_element['autor_id'])?>
                <!-- Single Recent Article Item Start -->
                <div class="single-recent-article-item" data-aos="fade-up">
                    <a href="#!" class="recent-article-thum">
                        <img src="<?php echo $art_element['img']?>" alt="" />
                    </a>
                    <div class="recent-article-content">
                        <div class="recent-article-post-author">
                        <?php echo __('Home.By') ?> <a href="#"><?php echo $autor['nome']." ".$autor['cognome']?></a>
                        </div>
                        <h3 class="title"><a href="blog-details.html"><?php echo $art_element['titolo']?></a>
                        </h3>
                        <p class="dec mt-3"><?php echo $art_element['testo']?></p>
                        <div class="recent-article-post-meta">
                            <span class="post-date">
                                <a href="#"><?php echo $art_element['art_date']?></a>
                            </span>
                            <span><?php echo $art_element['read_time']?></span>
                        </div>
                    </div>
                </div>
                <!-- Single recent Article Item End -->
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>