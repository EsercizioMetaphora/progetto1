<<<<<<< Updated upstream
<?php require('partials/_header_new.php') ?>

<?php
/* article check*/
=======
<?php require 'partials/_header_new.php' ?>

<?php
>>>>>>> Stashed changes
if (!isset($article_detail)) {
    http_response_code(404);
    require('partials/404.php');
    die();
}
<<<<<<< Updated upstream
/* _POST check & field update */
if (isset($_POST['id'])) {
    $article_id = $_POST['id'];
    $updated_name = $_POST['name'];
<<<<<<< Updated upstream
    $updated_description = $_POST['description'];
=======
    $sth = $pdo->prepare("UPDATE article SET `name`= '$updated_name' WHERE id = $article_id");
    echo ($_POST['name']);

    if (strlen($_POST['name']) > 0) {
        $updated_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    } else {
        echo "titolo obbligatorio";
        die();
    }
    $updated_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    var_dump($updated_name);


    $updated_img = $_POST['img'];
    $updated_ord = $_POST['ord'];
    $updated_price = $_POST['price'];
>>>>>>> Stashed changes
    $updated_category = $_POST['category'];
    $updated_alt = $_POST['alt'];
    $updated_price = $_POST['price'];
    $updated_img = $_POST['img'];
    $updated_order = $_POST['order'];
    $sth = $pdo->prepare("UPDATE article SET `name` = '$updated_name', `description` = '$updated_description', `category` = '$updated_category',`alt` = '$updated_alt',`price` = '$updated_price',`img` = '$updated_img',`order` = '$updated_order', WHERE id = $article_id");
    $sth->execute();
    $sth = $pdo->prepare("SELECT * FROM article WHERE id = $article_id");
    $sth->execute();
}
?>
<main>
    <!-- waga
    <?php /* var_dump($article_detail) */ ?>
    wobble -->
    <div class="d-flex justify-content-center m-2">
        <h2>Article editor</h2>
    </div>
    <form action="" method="POST">
<<<<<<< Updated upstream
        <div class="row mx-5">
            <div class="col-md-7">
                <div class="form-group mb-2">
                    <input type="hidden" name="id" value="<?php echo $article_detail['id'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="name">Article Title</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $article_detail['name'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" class="my-2" for="description">Article Text</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $article_detail['description'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" value="<?php echo $article_detail['category'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="alt">Alternative Text</label>
                    <input type="text" class="form-control" id="alt" name="alt" value="<?php echo $article_detail['alt'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $article_detail['price'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="img">Image name and path</label>
                    <input type="text" class="form-control" id="img" name="img" value="<?php echo $article_detail['img'] ?>">
                </div>
                <div class="form-group mb-2">
                    <label class="my-2" for="order">View Order</label>
                    <input type="text" class="form-control" id="order" name="order" value="<?php echo $article_detail['ord'] ?>">
                </div>
            </div>
            <div class="col-md-5 mb-2">
                <label class="my-1">image currently saved</label>
                <br>
                <img class="my-3" src="<?php echo $article_detail['img'] ?>">
            </div>
            <div>
                <button type="submit" class="my-3 btn btn-primary">Salva</button>
            </div>
=======
$errors = [];

if (isset($_POST['id'])) {
    $name = $_POST['name'];
    $img = $_POST['img'];
    $ord = $_POST['ord'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $article_id = $_POST['id'];
    if (strlen($_POST['name']) > 2) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    } else {
        $errors['name']= 'Il titolo  deve essere più lungo di due caratteri!';

    }
   

    if(count ($errors)===0){

        $sth = $pdo->prepare("UPDATE article SET `name`= '$name', `img`= '$img',
        `ord`= '$ord', `price`= '$price', `category`= '$category'  
        WHERE id = $article_id");
        $sth->execute();

    } else{
        var_dump($errors);
    }
    $sth = $pdo->prepare("SELECT * FROM article WHERE id = $article_id");
    $sth->execute();

    $article_detail = $sth->fetch(\PDO::FETCH_ASSOC);
} else{
    $name = $article_detail['name'];
    $img = $article_detail['img'];
    $ord = $article_detail['ord'];
    $price = $article_detail['price'];
    $category = $article_detail['category'];
}
?>
<main>
    <?php   ($article_detail) ?>
    <form class="form-row" action="" method="POST">
        <div class="form-group col-md-6">
        <input class="form-control" type="hidden" name="id" value="<?php echo $article_detail['id']?>"><br>
        <input class="form-control" type="text" name="name"  value="<?php echo $name?>"><br>
        <input class="form-control" type="text" name="img" value="<?php echo $img?>" ><br>
        <input class="form-control" type="text" name="ord" value="<?php echo $ord?>" ><br>
        <input class="form-control" type="text" name="price" value="<?php echo $price?>" ><br>
        <input class="form-control" type="text" name="category" value="<?php echo $category?>"><br>
        <button class="btn btn-outline-primary d-flex justify-content-center" type="submit">Salva</button>
        </div>
>>>>>>> Stashed changes
    </form>
    <!--  PROVA BOTTONI PER COSARE LE COSE  -->
    <div class="d-flex justify-content-center">

        <?php if ($article_id > 1) : ?>
            <a href="/edit_article.php?article_id=<?php echo $article_id - 1 ?>" class="btn btn-primary m-2"><i class="bi bi-arrow-left-square"></i> Previous Article</a>
        <?php else :
            echo ""
        ?>
        <?php endif ?>
        <?php
        $total_articles = '0';
        foreach (ARTICLES as $article) {
            $total_articles++;
        } ?>
        <?php if ($article_id < $total_articles) : ?>
            <a href="/edit_article.php?article_id=<?php echo $article_id + 1 ?>" class="btn btn-primary m-2">Next Article <i class="bi bi-arrow-right-square"></i></a>
        <?php else :
            echo ""
        ?>
        <?php endif ?>

    </div>

</main>

<?php require('partials/_footer.php') ?>
=======

        <div class="form-group p-4">
            <input type="hidden" class="form-control" name="id" value="<?php echo $article_detail['id'] ?>">
        </div>

        <div class="form-group p-4">
            <label class="fs-3">Titolo</label>
            <input type="text" class="form-control" name="name" value="<?php echo $article_detail['name'] ?>">
        </div>


        <div class="form-group p-4">
            <label class="fs-3">Immagine</label>
>>>>>>> Stashed changes
