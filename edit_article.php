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
        $errors['name']= 'Il titolo deve essere più lungo di due caratteri!';
    }

    if (!is_numeric($_POST['price']))
        $errors['price']= 'Devi inserire un numero valido!';

    if (!is_numeric($_POST['ord']))
        $errors['ord']= 'Devi inserire un ordine valido!';

    if (!is_numeric($_POST['category']))
        $errors['category']= 'Devi inserire una categoria valida!';

    if(count ($errors)===0){

        $sth = $pdo->prepare("UPDATE article SET `name`= '$name', `img`= '$img',
        `ord`= '$ord', `price`= '$price', `category`= '$category'  
        WHERE id = $article_id");
        $sth->execute();

    } else{
        
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
        <label for="name">Nome:</label>
        <input class="form-control <?php echo isset($errors['name']) ? "border border-danger" : "" ?>" type="text" name="name"  value="<?php echo $name?>"><br>
        <?php if (isset($errors['name'])):?>
            <div class="text-danger"><?php echo ($errors['name']);?></div>
        <?php endif ?>
        <label for="img">Immagine:</label>
        <input class="form-control <?php echo isset($errors['img']) ? "border border-danger" : "" ?>" type="text" name="img" value="<?php echo $img?>" ><br>
        <?php if (isset($errors['img'])):?>
            <div class="text-danger"><?php echo ($errors['img']);?></div>
        <?php endif ?>
        <label for="ord">Ordine:</label>
        <input class="form-control <?php echo isset($errors['ord']) ? "border border-danger" : "" ?>" type="text" name="ord" value="<?php echo $ord?>" ><br>
        <?php if (isset($errors['ord'])):?>
            <div class="text-danger"><?php echo ($errors['ord']);?></div>
        <?php endif ?>
        <label for="price">Prezzo:</label>
        <input class="form-control <?php echo isset($errors['price']) ? "border border-danger" : "" ?>" type="text" name="price" value="<?php echo $price?>" ><br>
        <?php if (isset($errors['price'])):?>
            <div class="text-danger"><?php echo ($errors['price']);?></div>
        <?php endif ?>
        <label for="category">Categoria:</label>
        <input class="form-control <?php echo isset($errors['category']) ? "border border-danger" : "" ?>" type="text" name="category" value="<?php echo $category?>"><br>
        <?php if (isset($errors['category'])):?>
            <div class="text-danger"><?php echo ($errors['category']);?></div>
        <?php endif ?>

        <button class="btn btn-outline-primary d-flex justify-content-center" type="submit">Salva</button>
        </div>
    </form>
</main>


<?php require 'partials/footer.php' ?>