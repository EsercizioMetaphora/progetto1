<?php require 'partials/_db_connection.php' ?>
<?php require 'partials/_website_data.php' ?>
<?php require 'partials/_functions.php' ?>


<!-- HEAD -->
<?php require 'partials/_head.php' ?>
<!-- FINE HEAD -->

<?php foreach (WEARE as $we_are_item) : ?>

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-10">
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                            <h4>Can I cancel my subscription?</h4>
                            <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
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

<p>dicci la tua</p>
<form action="" method="POST">
    <div class="row mx-5">
        <div class="col-md-7">
            <div class="form-group mb-2">
                <label class="my-2" for="price">Price</label>
                <input type="text" id="price" name="price" value="<?php echo $updated_price ?>">
            </div>
        </div>
        <div>
            <button type="submit" class="my-3 btn btn-primary">Salva</button>
        </div>
</form>

<?php require 'partials/_scripts.php' ?>