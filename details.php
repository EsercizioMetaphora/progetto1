<?php require('partials/_header_new.php') ?>

<main>
    <section class="mt-5 container">
        <article class="row gx-0">
            <div class="col-12 col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner mb-2">
                        <div class="carousel-item active">
                            <img src="/images/immagini/IMG_4155.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/immagini/IMG_4155a.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/immagini/IMG_4155.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active me-2" aria-current="true" aria-label="Slide 1">
                            <img src="/images/immagini/IMG_4155.jpg" class="d-block w-100" alt="...">
                        </a>
                        <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="me-2">
                            <img src="/images/immagini/IMG_4155a.jpg" class="d-block w-100" alt="...">
                        </a>
                        <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"">
                                    <img src=" /images/immagini/IMG_4155.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <section class="p-3">
                    <caption>25 Agosto 2021</caption>
                    <h4 class="mt-3">
                        Vestibulum id ligula porta felis euismod semper.
                    </h4>
                    <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                        massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras
                        justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a
                        pharetra augue.
                    </p>
                    <a class="btn btn-primary" href="/list.php">
                        Read More
                    </a>
                </section>
            </div>
        </article>
    </section>

    <?php require('partials/_footer.php') ?>