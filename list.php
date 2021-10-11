<!doctype html>
<html lang="en">

<?php require 'partials/head.php'?>

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

                    <a href="#" class="px-1 h4 text-white d-none d-lg-inline-block"><i
                            class="bi bi-person-fill"></i></a>
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
    <!--
        <main>
            <section class="mt-5 container">
                <article class="row gx-0">
                    <div class="col-12 col-lg-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner mb-2">
                                <div class="carousel-item active">
                                        <img src="https://picsum.photos/635/400/?random&t=1" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="https://picsum.photos/635/400/?random&t=2" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                        <img src="https://picsum.photos/635/400/?random&t=3" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active me-2" aria-current="true" aria-label="Slide 1">
                                    <img src="https://picsum.photos/635/400/?random&t=1" class="d-block w-100" alt="...">
                                </a>
                                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2" class="me-2">
                                    <img src="https://picsum.photos/635/400/?random&t=2" class="d-block w-100" alt="...">
                                </a>
                                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"">
                                    <img src="https://picsum.photos/635/400/?random&t=3" class="d-block w-100" alt="...">
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
        </main>
-->

        <main style="margin: 0 5%;">
            <div class="input-group mb-3 mx-auto container-md p-0" style="max-width: 700px;">
                <input id="articleName" type="text" class="form-control" placeholder="Input Text here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="chosenName()">Search</button>
            </div>
            <form class="mb-3">
                <div class="row">
                    <div class="col-md-7 offset-md-5 col-lg-5 offset-lg-7">
                        <div class="row">
                            <div class="col-6 col-md-8">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected value="24">24</option>
                                        <option value="48">48</option>
                                        <option value="ALL">Tutti</option>
                                    </select>
                                    <label for="floatingSelect" class="d-none d-sm-block">Prodotti per pagina</label>
                                    <label for="floatingSelect" class="d-block d-sm-none">Prodotti per pag</label>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-floating">
                                    <select class="form-select" id="Filtro2" aria-label="Floating label select example">
                                        <option selected value="Pop">Popolarità</option>
                                        <option value="Nome">Nome</option>
                                        <option value="Prezzo">Prezzo</option>
                                    </select>
                                    <label for="Filtro2">Ordina per</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 col-lg-3 d-none d-md-block">
                        <h3>Category List</h3>
                        <div id="categoryList1">
                            <p onclick="chosenCategory()">Type 1</p>
                        </div>
                    </div>
                    
                    <div class="col-12 d-block d-md-none p-0 mb-3 form-floating">
                        <select class="form-select" aria-label="Default select example" id="categoryList2">
                            <option value="1">One</option>
                        </select>
                        <label for="categoryList2">Ordina per</label>
                    </div>
                    <!--
                    <div class="col-auto" style="padding: 0;">
                        <div class="card row" style="width: auto; flex-direction:row;">
                            <img src="https://picsum.photos/265/263/?random&t=953390749" class="col-3" alt="...">
                            <div class="col-auto" style="padding: 1rem 1rem; position: relative;">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-end align-bottom" style="position: absolute; bottom:1rem; right:1rem;">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <section id="articleList" class="col-12 col-md-8 col-lg-9">
                        <div class="card mb-3 p-0 border-0">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="https://picsum.photos/265/263/?random&t=5" class="img-fluid card-img-top" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-0 pt-2 px-md-2">
                                        <h5 class="card-title">Card title</h5>
                                        <div style="overflow-y: scroll;">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    <div class="text-end my-2">
                                        <a href="#" class="btn btn-primary me-2">Maggiori Informazioni</a>
                                        <a href="#" class="btn btn-primary"><i class="bi bi-basket-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
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
                    nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non
                    commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam.
                    Pellentesque ornare sem lacinia quam venenatis vestibulum.
                </p>
                <hr class="bg-white">
                <!-- ShareThis BEGIN -->
                <div class="mt-5 sharethis-inline-share-buttons"></div><!-- ShareThis END -->
            </div>
        </footer>
    
        <?php require 'partials/script.php'?>
    
        <script type="text/javascript">
            let articleObj = [];
            fetch("articleList.json")
                .then(function (response) {
                    console.log(response);
                    return response.json();
                })
                .then(function (result) {
                    articleObj = result;
                    let articleList = document.getElementById("articleList");
                    let nuovohtml = "";
                    
                    for (article of result.articleList) {
                        console.log('nuovohtml:');
//                        console.log(article);
                        nuovohtml+=templatehtml(article);
//                        console.log(templatehtml(article));
                        console.log(nuovohtml);
                    }
                    articleList.innerHTML= nuovohtml;
                }).catch((error) => alert(error.message));
            let categoryObj = [];
            fetch("categoryList.json")
                .then((response) => {
                    return response.json()
                })
                .then((result) => {
                    categoryObj = result;
                    console.log('result:');
                    console.log(result);
                    let categoryListHTML1 = '';
                    let categoryListHTML2 = '';
                    for(categoria of result.categories) {
                        categoryListHTML1 += `<p><a class="btn btn-primary" onclick="chosenCategory(${categoria.id})">${categoria.nome}</a></p>`
                        categoryListHTML2 += `<option value="${categoria.id}" onclick="chosenCategory(${categoria.id})">${categoria.nome}</option>`;
                    }
                    let categoryList1 = document.getElementById("categoryList1");
                    categoryList1.innerHTML = categoryListHTML1;
                    let categoryList2 = document.getElementById("categoryList2");
                    categoryList2.innerHTML = categoryListHTML2;
                })
            let chosenCategory = (categoryID) => {
                let carte = document.getElementsByClassName(`card`);
                for(carta of carte){
                    console.log(carta);
                    console.log(carta.classList);
                    console.log(carta.classList[0]);
                    console.log(parseInt(carta.classList[0].slice(-1)));
                    carta.classList.add('d-none');
                    if (categoryID === parseInt(carta.classList[0].slice(-1))) {
                        carta.classList.remove('d-none');
                        continue
                    }
                }
            };

            

            let chosenName = () => {
                let textForm = document.getElementById("articleName");
                let carte = document.getElementsByClassName(`card`);
                for(carta of carte){
                    console.log(carta);
                    let nomeArticolo = carta.querySelector('#cardname');
                    carta.classList.add('d-none');
                    if(nomeArticolo.innerHTML === textForm.value){
                        carta.classList.remove('d-none');
                        continue;
                    }
                }
            };
            let templatehtml = (article) => {
                        let html = `
                        <article class="category${article.Category} card mb-3 p-0 border-0" id="art${article.ID}">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="${article.Img}" class="img-fluid card-img-top" alt="...">
                                </div>
                                <div class="col-md-8 position-relative">
                                    <div class="card-body p-0 pt-2 px-md-2 d-flex flex-column h-100">
                                        <h5 class="card-title" id="cardname">${article.Name}</h5>
                                        <p class="card-text">${article.Description}</p>
                                        <div class="d-flex align-self-end h-100">
                                            <div class="justify-self-end align-self-end">
                                                <a href="#" class="btn btn-primary me-2">Maggiori Informazioni</a>
                                                <a href="#" class="btn btn-primary"><i class="bi bi-basket-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                                `;
                                return html
                    };
        </script>
    </body>

</html>
