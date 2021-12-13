<div class="basic-slider owl-carousel dots-over" data-nav="true" data-margin="5">
  <!-- CAROUSEL ITEM START -->
  <?php foreach (IMG as $img_item) : ?>
    <div class="item">
      <img src="<?php echo $img_item['img'] ?>" alt="" /></a>
    </div>

  <?php endforeach ?>
  <!-- CAROUSEL ITEM END -->
</div>