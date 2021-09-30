<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary flex-wrap">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="d-block m-auto ps-lg-5 text-white text-decoration-none h3" href="index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 37.088 43.349">
                        <g id="logo_Alias" data-name="logo Alias" transform="translate(0 0)">
                            <path id="Tracciato_3" data-name="Tracciato 3"
                                d="M138.576,342.453a.672.672,0,0,0-.192.471v5.995h0L132.395,355a.672.672,0,0,0-.192.471v5.995l-5.989,6.077a.673.673,0,0,0-.192.471v5.719a.672.672,0,0,0,.192.471l2.9,2.941,2.625,2.664a.651.651,0,0,0,.93,0l2.625-2.664L138.383,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.626-2.664L150.746,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.625-2.664,2.9-2.941a.672.672,0,0,0,.193-.471V368.01a.673.673,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.524-5.605a.65.65,0,0,0-.929,0Z"
                                transform="translate(-126.021 -336.652)" fill="#fff"></path>
                        </g>
                    </svg>
                    Alias
                </a>

                <a href="#" class="px-1 h4 text-white" id="customer-btn"><i class="bi bi-person-fill"></i></a>
                <a href="#" class="d-inline-block px-1 h4 text-white"><i class="bi bi-basket-fill"></i></a>
                <a href="#" class="px-1 h4 text-white d-none d-lg-inline-block" id="srcBtn"><i class="bi bi-search"></i></a>
                <div class="w-100 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto" id="LinkList">
                    </ul>
                    <form class="d-flex d-none">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>

        </nav>
    </header>


    <script>
    fetch("/links.json")
        .then(function (response) {
          return response.json();
        })
        .then(function (result) {
          let linkList = document.getElementById("LinkList");
          let listHtml = (link) => {
            let html = `<li class="nav-item"><a class="nav-link" href="${link.url}">${link.name}</a></li>`;
                    return html 
          };
          let nuovohtml = "";
          for (waga of result.link) {
            nuovohtml+=listHtml(waga);
              console.log(listHtml(waga));
          }
          linkList.innerHTML= nuovohtml;
        })

    </script>