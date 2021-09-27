<!doctype html>
<html lang="en">
<?php require 'partials/head.php' ?>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary flex-wrap">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <a class="d-block m-auto ps-lg-5 text-white text-decoration-none h3" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 37.088 43.349">
                        <g id="logo_Alias" data-name="logo Alias" transform="translate(0 0)">
                            <path id="Tracciato_3" data-name="Tracciato 3" d="M138.576,342.453a.672.672,0,0,0-.192.471v5.995h0L132.395,355a.672.672,0,0,0-.192.471v5.995l-5.989,6.077a.673.673,0,0,0-.192.471v5.719a.672.672,0,0,0,.192.471l2.9,2.941,2.625,2.664a.651.651,0,0,0,.93,0l2.625-2.664L138.383,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.626-2.664L150.746,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.625-2.664,2.9-2.941a.672.672,0,0,0,.193-.471V368.01a.673.673,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.524-5.605a.65.65,0,0,0-.929,0Z" transform="translate(-126.021 -336.652)" fill="#fff"></path>
                        </g>
                    </svg>
                    Alias
                </a>

                <a href="#" class="px-1 h4 text-white d-none d-lg-inline-block"><i class="bi bi-person-fill"></i></a>
                <a href="#" class="d-inline-block px-1 h4 text-white"><i class="bi bi-basket-fill"></i></a>
                <a href="#" class="px-1 h4 text-white d-none d-lg-inline-block"><i class="bi bi-search"></i></a>
                <div class="w-100 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 1</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Link 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 5</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 6</a>
                        </li>
                        <li class="nav-item d-list-item d-lg-none">
                            <a href="#" class="px-1 h4 text-white"><i class="bi bi-search"></i></a>
                            <a href="#" class="px-1 h4 text-white"><i class="bi bi-person-fill"></i></a>
                        </li>
                    </ul>
                    <form class="d-flex d-none">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
                
        </nav>
    </header>
  
    <main>
        <section class="mt-3 container">
            <div class="text-center mx-5 h4">
                Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
            </div>
        </section>
        <section class="mt-5 container">
            <form>
                <div class="row">
                    <div class="col-lg-5 offset-lg-7">
                        <div class="row">
                            <div class="col-7">
                                <label for="perpagina">Record per pagina</label>
                                <select id="perpagina" name="perpagina" class="form-select mb-5">
                                    <option>24</option>
                                    <option>48</option>
                                    <option>Tutti</option>
                                </select>
                            </div>
                            <div class="col-5">

                                <label for="ordina">Ordina per</label>
                                <select id="ordina" name="ordina" class="form-select mb-5">
                                    <option>Popolarità</option>
                                    <option>Nome</option>
                                    <option>Prezzo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row"> 
                <div class="col-12 col-lg-2">
                    <aside>
                        <div class="d-none d-lg-block">
                            <a class="d-block text-decoration-none" href="#">Type 1</a>
                            <a class="d-block text-decoration-none" href="#">Type 2</a>
                            <a class="d-block text-decoration-none" href="#">Type 3</a>
                        </div>

                        <div class="d-lg-none">
                            <select class="form-select mb-5">
                                <option>Type 1</option>
                                <option>Type 2</option>
                                <option>Type 3</option>
                            </select>
                        </div>
                    </aside>
                </div>
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-6 col-lg-4">
                            <div class="card border-0" >
                                <img src="https://picsum.photos/265/263/?random&t=<?php echo rand() ?>" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>    
        </section>
    </main>
    <footer class="mt-5 bg-primary">
        <div class="container p-5">
            <a class="d-block m-auto text-white text-decoration-none h3" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 37.088 43.349">
                    <g id="logo_Alias" data-name="logo Alias" transform="translate(0 0)">
                        <path id="Tracciato_3" data-name="Tracciato 3" d="M138.576,342.453a.672.672,0,0,0-.192.471v5.995h0L132.395,355a.672.672,0,0,0-.192.471v5.995l-5.989,6.077a.673.673,0,0,0-.192.471v5.719a.672.672,0,0,0,.192.471l2.9,2.941,2.625,2.664a.651.651,0,0,0,.93,0l2.625-2.664L138.383,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.626-2.664L150.746,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.625-2.664,2.9-2.941a.672.672,0,0,0,.193-.471V368.01a.673.673,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.524-5.605a.65.65,0,0,0-.929,0Z" transform="translate(-126.021 -336.652)" fill="#fff"></path>
                    </g>
                </svg>
                Alias
            </a>
            <p class="text-white mt-3">
            Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
            </p>
            <hr class="bg-white">
            <!-- ShareThis BEGIN --><div class="mt-5 sharethis-inline-share-buttons"></div><!-- ShareThis END -->
        </div>
    </footer>
    <?php require 'partials/scripts.php' ?>
  </body>
</html> 
