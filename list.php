<?php require('partials/_header_new.php') ?>

<main style="margin: 0 5%;">
    <form action="#" id="formPag">
        <div class="input-group mb-3 mx-auto container-md p-0" style="max-width: 700px;">
            <input autocomplete="off" id="articleName" type="text" class="form-control" placeholder="Input Text here..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
    </form>
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

            <section id="articleList" class="col-12 col-md-8 col-lg-9">
                <?php foreach (ARTICLES as $article) : ?>
                    <?php $photo = getArticleFoto($article) ?>
                    <article class="<?php echo $article['category'] ?> card mb-3 p-0 border-0" id="<?php echo $article['id'] ?>">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="<?php echo $photo['img'] ?>" class="img-fluid card-img-top" alt="<?php echo $photo['alt'] ?>">
                            </div>
                            <div class="col-md-8 position-relative">
                                <div class="card-body p-0 pt-2 px-md-2 d-flex flex-column h-100">
                                    <h5 class="card-title" id="cardname"><?php echo $article['name'] ?></h5>
                                    <p class="card-text"><?php echo $article['description'] ?></p>
                                    <div class="d-flex align-self-end h-100">
                                        <div class="justify-self-end align-self-end">
                                            <a href="/details.php?article_id=<?php echo $article['id'] ?>" class="btn btn-primary me-2">Maggiori Informazioni</a>
                                            <a href="#" class="btn btn-primary"><i class="bi bi-basket-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach ?>
            </section>

        </div>
    </div>
</main>

<!-- Query Selector -->

<script type="text/javascript">
    let chosenName = (textFromGET) => {
        let textForm = document.getElementById("articleName");
        textToSearch = textFromGET == undefined ? textForm.value : textFromGET;
        console.log(textFromGET);
        console.log(textForm.value);
        console.log(textToSearch);

        let carte = document.getElementsByClassName(`card`);
        for (carta of carte) {
            console.log(carta);
            let nomeArticolo = carta.querySelector('#cardname');
            carta.classList.add('d-none');
            console.log(nomeArticolo.innerHTML);
            console.log((nomeArticolo.innerHTML).toLowerCase());
            console.log(textToSearch);
            if ((nomeArticolo.innerHTML).toLowerCase() === textToSearch.toLowerCase()) {
                carta.classList.remove('d-none');
                continue;
            }
        }
    };

    /* Fetch per Lista Categoria */

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
            for (categoria of result.categories) {
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
        for (carta of carte) {
            carta.classList.add('d-none');
            if (categoryID === parseInt(carta.classList[0].slice(-1))) {
                carta.classList.remove('d-none');
                continue
            }
        }
    };

    let formPag = document.getElementById('formPag');
    formPag.addEventListener('submit', function(event) {
        event.preventDefault();
        chosenName();
    });
</script>

<?php require('partials/_footer.php') ?>