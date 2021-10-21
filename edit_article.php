<?php require('partials/_header_new.php') ?>

<?php
/* article check*/
    if(!isset($article_detail)){
        http_response_code(404);
        require('partials/404.php');
        die();
    }
/* _POST check & field update */
    if(isset($_POST['id'])){
        $article_id = $_POST['id'];
        $updated_name = $_POST['name'];
        $sth = $pdo->prepare("UPDATE article SET `name` = '$updated_name' WHERE id = $article_id");
        $sth->execute();
        $sth = $pdo->prepare("SELECT * FROM article WHERE id = $article_id");
        $sth->execute();
    
    }
?>
<main>
    waga
    <?php var_dump($article_detail) ?>
    wobble
    <form action ="" method="POST">
        <input type="hidden" name="id" value="<?php echo $article_detail['id']?>">
        <input type="text" name="name" value="<?php echo $article_detail['name']?>">
        <input type="text" name="img" value="<?php echo $article_detail['img']?>">
        <input type="text" name="order" value="<?php echo $article_detail['ord']?>">
        <input type="text" name="description" value="<?php echo $article_detail['description']?>">
        <input type="text" name="category" value="<?php echo $article_detail['category']?>">
        <input type="text" name="price" value="<?php echo $article_detail['price']?>">
        <button type="submit">Salva</button>
    </form>
</main>

<?php require('partials/_footer.php') ?>