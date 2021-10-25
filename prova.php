<?php require('partials/_header_new.php') ?>

<!-- Fetch ArticleList 

/*    let articleObj = [];
        fetch("articleList.json")
            .then(function(response) {
                console.log(response);
                return response.json();
            })
            .then(function(result) {
                articleObj = result;
                let articleList = document.getElementById("articleList");
                let nuovohtml = "";

                for (article of result.articleList) {
                    console.log('nuovohtml:');
                    //                        console.log(article);
                    nuovohtml += templatehtml2(article);
                    console.log(nuovohtml);
                }
                articleList.innerHTML = nuovohtml;
            })
            .then(function() {
                console.log('so entrato qua sus');
                const urlParams = new URLSearchParams(window.location.search);
                const myParam = urlParams.get('textToSearch');
                console.log('il parametr è:');
                console.log(myParam);
                if (myParam !== null) {
                    chosenName(myParam);
                }
                console.log(myParam);

            }); */ -->

<!--Funzione Articles con Javascript e non con PhP       

        let templatehtml2 = (article) => {
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
     -->

<!--Vecchie Cards
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


<!--Vecchio Edit_Article

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $article_detail['id'] ?>">
        <input type="text" name="name" value="<?php echo $article_detail['name'] ?>">
        <input type="text" name="img" value="<?php echo $article_detail['img'] ?>">
        <input type="text" name="order" value="<?php echo $article_detail['ord'] ?>">
        <input type="text" name="description" value="<?php echo $article_detail['description'] ?>">
        <input type="text" name="category" value="<?php echo $article_detail['category'] ?>">
        <input type="text" name="price" value="<?php echo $article_detail['price'] ?>">
        <button type="submit">Salva</button>
    </form> -->


<?php require('partials/_carousel.php') ?>

<?php require('partials/_footer.php') ?>