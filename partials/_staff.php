<?php foreach (STAFF as $staff_item) : ?>
<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gy-10 gx-lg-8 gx-xl-12 align-items-center">
      <div class="col-lg-7 order-lg-2 position-relative">
        <figure><img class="w-auto" src="<?php echo $staff_item['img'] ?>" srcset="<?php echo $staff_item['img'] ?> 2x" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h2 class="display-4 mb-3"><?php echo $staff_item['name'] ?></h2>
        <p class="lead fs-lg"><?php echo $staff_item['description'] ?></p>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<?php endforeach ?>
