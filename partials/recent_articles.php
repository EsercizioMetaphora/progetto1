<!-- Recent Article Area Start -->

<div class="recent-article-area section-space--pb_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="recent-article-header-two border-top">
                    <div class="section-title-three" data-aos="fade-up">
                        <h2 class="title"><?php echo __('Home.Ultimi.Post') ?></h2>
                    </div>
                    <div class="search-box">
                        <form action="" method="GET">
                            <div class="input-search-box" data-aos="fade-up">
                                <input name="q" value="<?php echo $get_q ?>" class="input" type="text" placeholder="Search here">
                                <button class="submit-button"><i class="icofont-search-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <!-- Single Recent Article Item Start -->

                <?php foreach (RECENTS as $recent_item) : ?>
                    <div class="single-recent-article-item all-article-post class-<?php echo $recent_item['category_id'] ?>" data-aos="fade-up">
                        <a href="#!" class="recent-article-thum">
                            <img src="<?php echo $recent_item['img'] ?>" alt="<?php echo $recent_item['alt'] ?>" />
                        </a>
                        <div class="recent-article-content">
                            <div class="recent-article-post-author">
                                By <a href="#"><?php echo $recent_item['author'] ?></a>
                            </div>
                            <h3 class="title"><a href="blog-details.html"><?php echo $recent_item['title'] ?></a>
                            </h3>
                            <p class="dec mt-3"><?php echo $recent_item['description'] ?></p>
                            <div class="recent-article-post-meta">
                                <span class="post-date">
                                    <a href="#"><?php echo $recent_item['datetime'] ?></a>
                                </span>
                                <span><?php echo $recent_item['readtime'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                <!-- Single recent Article Item End -->

                <!-- Single Recent Article Item Start -->

                <?php foreach (RECENTS as $recent_item) : ?>
                    <div class="single-recent-article-item class-<?php echo $recent_item['category_id'] ?>" data-aos="fade-up">
                        <a href="#!" class="recent-article-thum">
                            <img src="<?php echo $recent_item['img'] ?>" alt="<?php echo $recent_item['alt'] ?>" />
                        </a>
                        <div class="recent-article-content">
                            <div class="recent-article-post-author">
                                By <a href="#"><?php echo $recent_item['author'] ?></a>
                            </div>
                            <h3 class="title"><a href="blog-details.html"><?php echo $recent_item['title'] ?></a>
                            </h3>
                            <p class="dec mt-3"><?php echo $recent_item['description'] ?></p>
                            <div class="recent-article-post-meta">
                                <span class="post-date">
                                    <a href="#"><?php echo $recent_item['datetime'] ?></a>
                                </span>
                                <span><?php echo $recent_item['readtime'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                <!-- Single recent Article Item End -->

            </div>
        </div>
    </div>
</div>

<!-- Recent Article Area End -->