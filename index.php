<?php require '_load_data.php'?>


<!doctype html>
<html lang="en">

<?php require 'partials/head.php'?>

<body>

    <?php require 'partials/header.php'?>

    <div class="container" id="login_container">
        <div class="row">
            <form>
                <h2>Login</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email">
                </div>
                <div class="form-group password-input">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Inserisci la tua password">
                </div>
                <button type="submit" class="btn btn-dark">Login</button>
                <button class="btn btn-secondary" id="cancel-btn">Annulla</button>
            </form>
        </div>

    </div>

    <main>
        <section class="mt-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture>
                            <source srcset="images/static_assets/IMG_4139.JPG"
                                media="(min-width: 992px)">
                            <img src="images/static_assets/IMG_4139.JPG"
                                class="d-block w-100" alt="...">
                        </picture>
                    </div>
                    <div class="carousel-item">
                    <picture>
                            <source srcset="images/static_assets/IMG_4139.JPG"
                                media="(min-width: 992px)">
                            <img src="images/static_assets/IMG_4139.JPG"
                                class="d-block w-100" alt="...">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source srcset="images/static_assets/IMG_4139.JPG"
                                media="(min-width: 992px)">
                            <img src="images/static_assets/IMG_4139.JPG"
                                class="d-block w-100" alt="...">
                        </picture>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="mt-3 container">
            <div class="text-center mx-5 h4">
                <?php echo 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet.' ?>
            </div>
        </section>
        <section class="mt-5 container">
            <article class="row gx-0">
                <div class="col-12 col-lg-6"><img src="/images/immagini/IMG_4155.jpg"
                        class="d-block w-100" alt="..."></div>
                <div class="col-12 col-lg-6">
                    <section class="p-3">
                        <caption>25 Agosto 2021</caption>
                        <h4 class="mt-3">
                            Vestibulum id ligula porta felis euismod semper.
                        </h4>
                        <p>
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo
                            odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue.
                        </p>
                        <a class="btn btn-primary" href="/list.php">
                            Read More
                        </a>
                    </section>
                </div>
            </article>
            <article class="row gx-0">
                <div class="col-12 col-lg-6">
                    <section class="p-3">
                        <caption>20 Agosto 2021</caption>
                        <h4 class="mt-3">
                            Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                            elit.
                        </h4>
                        <p>
                            Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at
                            lobortis. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod
                            semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                            fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum
                            faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod.
                        </p>
                        <a class="btn btn-primary" href="/list.php">
                            Read More
                        </a>
                    </section>
                </div>
                <div class="col-12 col-lg-6"><img src="/images/immagini/IMG_4155a.jpg"
                        class="d-block w-100" alt="..."></div>
            </article>
        </section>
        
        <section class="mt-5 container">
            <picture>
                <img src="/images/immagini/IMG_4170.jpg"  class="d-block w-100" alt="...">
            </picture>
        </section>
        <section class="mt-5 container">
            <div class="text-center mx-5 h4">
                Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
            </div>
        </section>
        <section class="mt-5 container">
            <div class="row">
                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="..." >
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-6 col-lg-3">
                    <div class="card border-0">
                        <img src="/images/immagini/IMG_4175.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body px-0">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="d-flex">
                                <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <footer class="mt-5 bg-primary">
        <div class="container p-5">
            <a class="d-block m-auto text-white text-decoration-none h3" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 37.088 43.349">
                    <g id="logo_Alias" data-name="logo Alias" transform="translate(0 0)">
                        <path id="Tracciato_3" data-name="Tracciato 3"
                            d="M138.576,342.453a.672.672,0,0,0-.192.471v5.995h0L132.395,355a.672.672,0,0,0-.192.471v5.995l-5.989,6.077a.673.673,0,0,0-.192.471v5.719a.672.672,0,0,0,.192.471l2.9,2.941,2.625,2.664a.651.651,0,0,0,.93,0l2.625-2.664L138.383,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.626-2.664L150.746,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.625-2.664,2.9-2.941a.672.672,0,0,0,.193-.471V368.01a.673.673,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.524-5.605a.65.65,0,0,0-.929,0Z"
                            transform="translate(-126.021 -336.652)" fill="#fff"></path>
                    </g>
                </svg>
                Alias
            </a>
            <p class="text-white mt-3">
                Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo cursus magna, vel scelerisque
                nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo
                luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque
                ornare sem lacinia quam venenatis vestibulum.
            </p>
            <hr class="bg-white">
            <!-- ShareThis BEGIN -->
            <div class="mt-5 sharethis-inline-share-buttons"></div><!-- ShareThis END -->
        </div>
    </footer>
    <?php require 'partials/script.php'?>
</body>

</html>