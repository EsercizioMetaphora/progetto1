<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"
    />
    <title>Prova Pratica 16 Settembre 2021</title>
  </head>
    <style>
        .cardArt{
            display: none;
        }
        .show{
            display: block;
        }
    </style>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary flex-wrap">
        <div class="container">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <a
            class="d-block m-auto ps-lg-5 text-white text-decoration-none h3"
            href="#"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="26"
              height="30"
              viewBox="0 0 37.088 43.349"
            >
              <g
                id="logo_Alias"
                data-name="logo Alias"
                transform="translate(0 0)"
              >
                <path
                  id="Tracciato_3"
                  data-name="Tracciato 3"
                  d="M138.576,342.453a.672.672,0,0,0-.192.471v5.995h0L132.395,355a.672.672,0,0,0-.192.471v5.995l-5.989,6.077a.673.673,0,0,0-.192.471v5.719a.672.672,0,0,0,.192.471l2.9,2.941,2.625,2.664a.651.651,0,0,0,.93,0l2.625-2.664L138.383,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.626-2.664L150.746,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.625-2.664,2.9-2.941a.672.672,0,0,0,.193-.471V368.01a.673.673,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.524-5.605a.65.65,0,0,0-.929,0Z"
                  transform="translate(-126.021 -336.652)"
                  fill="#fff"
                ></path>
              </g>
            </svg>
            Alias
          </a>

          <a href="#" class="px-1 h4 text-white d-none d-lg-inline-block"
            ><i class="bi bi-person-fill"></i
          ></a>
          <a href="#" class="d-inline-block px-1 h4 text-white"
            ><i class="bi bi-basket-fill"></i
          ></a>
          <a href="#" class="px-1 h4 text-white d-none d-lg-inline-block"
            ><i class="bi bi-search"></i
          ></a>
          <div
            class="w-100 collapse navbar-collapse"
            id="navbarSupportedContent"
          >
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
                <a href="#" class="px-1 h4 text-white"
                  ><i class="bi bi-search"></i
                ></a>
                <a href="#" class="px-1 h4 text-white"
                  ><i class="bi bi-person-fill"></i
                ></a>
              </li>
            </ul>
            <form class="d-flex d-none">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
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
                  <select
                    id="perpagina"
                    name="perpagina"
                    class="form-select mb-5"
                  >
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

        <input class="form-control m-3" id="myInput" type="text" placeholder="Search..">

        <div class="row">
          <div class="col-12 col-lg-2">
            <aside id="btnContainer" class="mb-5">
              <p>
                <a
                  class="btn btn-primary d-block d-lg-none"
                  data-bs-toggle="collapse"
                  href="#collapseExample"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                >
                  Seleziona la categoria
                </a>
                </p>
                <div class="collapse d-lg-block" id="collapseExample">
                </div>
                <!-- <button class="btn btn-primary m-1 active" onclick="filterSelection('all')" href="#">Tutte</button> -->

            </aside>
          </div>
          <div class="col-12 col-lg-10">
            <div id="articlelist" class="row"></div>
          </div>
        </div>
      </section>
    </main>
    <footer class="mt-5 bg-primary">
      <div class="container p-5">
        <a class="d-block m-auto text-white text-decoration-none h3" href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="26"
            height="30"
            viewBox="0 0 37.088 43.349"
          >
            <g
              id="logo_Alias"
              data-name="logo Alias"
              transform="translate(0 0)"
            >
              <path
                id="Tracciato_3"
                data-name="Tracciato 3"
                d="M138.576,342.453a.672.672,0,0,0-.192.471v5.995h0L132.395,355a.672.672,0,0,0-.192.471v5.995l-5.989,6.077a.673.673,0,0,0-.192.471v5.719a.672.672,0,0,0,.192.471l2.9,2.941,2.625,2.664a.651.651,0,0,0,.93,0l2.625-2.664L138.383,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.626-2.664L150.746,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.625-2.664,2.9-2.941a.672.672,0,0,0,.193-.471V368.01a.673.673,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.524-5.605a.65.65,0,0,0-.929,0Z"
                transform="translate(-126.021 -336.652)"
                fill="#fff"
              ></path>
            </g>
          </svg>
          Alias
        </a>
        <p class="text-white mt-3">
          Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo
          cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id
          nibh ultricies vehicula ut id elit. Duis mollis, est non commodo
          luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
          Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
          vestibulum.
        </p>
        <hr class="bg-white" />
        <!-- ShareThis BEGIN -->
        <div class="mt-5 sharethis-inline-share-buttons"></div>
        <!-- ShareThis END -->
      </div>
    </footer>
    <?php require 'partials/scripts.php' ?>

    <script type="text/javascript">

    /* RECUPERO E CREAZIONE ELEMENTI ARTICOLI */

      fetch("articleList.json")
        .then(function (response) {
          return response.json();
        })
        .then(function (result) {
          console.log(result);
          let articlelist = document.getElementById("articlelist");
          console.log(articlelist.innerHTML);

          let templatehtml = (article) => {
            let html = `<article class="col-12 col-lg-8 cardArt ${article.catId}">
                            <div class="card border-0">
                                <img src="${article.immagine}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title">${article.titolo}</h5>
                                    <p class="card-text">${article.sottotitolo}</p>
                                    <div class="d-flex">
                                        <a href="/details.php" class="flex-fill btn btn-primary">Info</a>
                                        <a href="#" class="btn btn-primary ms-3"><i class="bi bi-bag-plus-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    `;
                    return html 
          };
          let nuovohtml = "";
          for (articolo of result.articoli) {
            nuovohtml+=templatehtml(articolo);
              console.log(templatehtml(articolo));
          }
          articlelist.innerHTML= nuovohtml;
        })
        .catch((error) => alert(error.message));
        
        /* RECUPERO E CREAZIONE ELEMENTI LISTA */

        fetch("categoryList.json")
        .then(function (response) {
          return response.json();
        })
        .then(function (result) {
          let articlelist = document.getElementById("collapseExample");

          let listHtml = (list) => {
            let html = `<button class="btn btn-primary m-1 ${list.catActive}" onclick="filterSelection('${list.catId}')">${list.catName}</button>`;
                    return html 
          };
          let nuovohtml = "";
          for (lista of result.categoria) {
            nuovohtml+=listHtml(lista);
              console.log(listHtml(lista));
          }
          articlelist.innerHTML= nuovohtml;
        })


        /* BIDONE PER FILTRO CATEGORIE */

        filterSelection("all")
        function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("cardArt");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
        }

        function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
        }

        function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
        }
        element.className = arr1.join(" ");
        }

        /* Add active class to the current button (highlight it)*/
        var btnContainer = document.getElementById("collapseExample");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
        }

        /* BARRA DI RICERCA */

            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#articlelist *").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });

            
    </script>
  </body>
</html>
