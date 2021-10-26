<?php require 'partials/_header_new.php' ?>

<?php
if (!isset($article_detail)) {
    http_response_code(404);
    require('partials/404.php');
    die();
}
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
    </form>
</main>


<?php require 'partials/footer.php' ?>