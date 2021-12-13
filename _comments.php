<?php require 'partials/_db_connection.php' ?>
<?php require 'partials/_website_data.php' ?>
<?php require 'partials/_functions.php' ?>


<!-- HEAD -->
<?php require 'partials/_head.php' ?>
<!-- FINE HEAD -->

<?php foreach (COMMENTS as $comment_item) : ?>

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-10">
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                            <h4><?php echo $comment_item['title'] ?></h4>
                            <p class="mb-0"><?php echo $comment_item['review'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
<?php endforeach ?>

<?php
if (empty($_POST["title"])) {
    $title = "";
  } else {
    $title = input($_POST["title"]);
  }
  if (empty($_POST["review"])) {
    $review = "";
  } else {
    $review = input($_POST["review"]);
  }
  function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<p>dicci la tua</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="row mx-5">
        <div class="col-md-7">
            <div class="form-group mb-2">
                <label class="my-2" for="title">Titolo</label>
                <input type="text" id="title" name="title" value="<?php echo $title;?>">
            </div>
            <div class="form-group mb-2">
                <label class="my-2" for="review">Commento</label>
                <input type="text" id="review" name="review" value="<?php echo $review;?>">
            </div>
        </div>
        <div>
            <button type="submit" class="my-3 btn btn-primary">Salva</button>
        </div>
</form>

<?php require 'partials/_scripts.php' ?>