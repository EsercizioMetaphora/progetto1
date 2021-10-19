<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary flex-wrap">
        <div class="container relative">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="d-block m-auto ps-lg-5 text-white text-decoration-none h3" id="logo" href="/index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 37.088 43.349">
                    <g id="logo_Alias" data-name="logo Alias" transform="translate(0 0)">
                        <path id="Tracciato_3" data-name="Tracciato 3"
                            d="M138.576,342.453a.672.672,0,0,0-.192.471v5.995h0L132.395,355a.672.672,0,0,0-.192.471v5.995l-5.989,6.077a.673.673,0,0,0-.192.471v5.719a.672.672,0,0,0,.192.471l2.9,2.941,2.625,2.664a.651.651,0,0,0,.93,0l2.625-2.664L138.383,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.626-2.664L150.746,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.625-2.664,2.9-2.941a.672.672,0,0,0,.193-.471V368.01a.673.673,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.524-5.605a.65.65,0,0,0-.929,0Z"
                            transform="translate(-126.021 -336.652)" fill="#fff"></path>
                    </g>
                </svg>
                Alias
            </a>

            <div>
                <div>
                    <a href="#" class="px-1 h4 text-white d-none d-lg-inline-block"><i class="bi bi-person-fill"></i></a>
                    <a href="#" class="d-inline-block px-1 h4 text-white"><i class="bi bi-basket-fill"></i></a>
                    <a href="#" class="px-1 h4 text-white d-none d-lg-inline-block" id="researchBut" onclick="animateSearchForm()"><i class="bi bi-search"></i></a>
                </div>
                <div class="position-relative">
                    <section id="formRicerca" class="formInvisible">
                    <form action="list.php" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Inserisci il nome da cercare" aria-label="Recipient's username" name="textToSearch" id="textToSearch" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cerca</button>
                        </div>
                    </form>
                    </section>
                </div>
            </div>
            
            
            <div class="w-100 collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto" id="navbarList">
                    
                    <li class="nav-item d-list-item d-lg-none">
                        <a href="/listaRicerca.php" class="px-1 h4 text-white"><i class="bi bi-search"></i></a>
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
    <script type="text/javascript">
        function animateSearchForm(){
            let searchForm = document.getElementById('formRicerca');
            if(searchForm.classList.contains('formVisible')) {
                searchForm.classList.add('formAnimationReverse');
                setTimeout(() => {
                    searchForm.classList.remove('formVisible');
                    searchForm.classList.add('formInvisible');
                    searchForm.classList.remove('formAnimationReverse');
                }, 1000);
            } else {
                searchForm.classList.add('formAnimationNormal');
                setTimeout(() => {
                    searchForm.classList.remove('formInvisible');
                    searchForm.classList.add('formVisible');
                    searchForm.classList.remove('formAnimationNormal');
                }, 1000);
            }

        }
        fetch("navigationMenuData.json")
            .then(function (response) {
                console.log(response);
                return response.json();
            })
            .then(function (result) {
                navDataObj = result;
                let navigationMenuList = document.getElementById("navbarList");
                let nuovohtml = "";
                
                for (const navData of navDataObj.navigationData) {
                    nuovohtml+=templatehtml(navData);
                }
                navigationMenuList.innerHTML= nuovohtml;
            }).catch((error) => alert(error.message));


        let templatehtml = (navData) => {
                    currentURL = (window.location.href).split('/').slice(-1)[0];
                    let navClass = '';
                    if(currentURL.length > 0){
                        if(currentURL == navData.url){
                            navClass = 'active';
                        }
                    } else {
                        if(navData.titolo == 'Home')
                            navClass = 'active';
                    }
                    let html = `
                    <li class="nav-item">
                        <a class="nav-link ${navClass}" href="/${navData.url}">${navData.titolo}</a>
                    </li>
                            `;
                    return html
                };
    </script>
</header>



