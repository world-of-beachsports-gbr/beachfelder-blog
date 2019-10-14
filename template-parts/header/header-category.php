<?php 
  $image_url = apply_filters( 'taxonomy-images-queried-term-image-url', '', array(
    'image_size' => 'full'
    )
  );
?>
<?php if($image_url != '') : ?>
  <div class="image-hero image-hero--half" style="background-image: url('<?= $image_url; ?>');"></div>
<?php else : ?>
  <div class="image-hero image-hero--half" style="background-image: url('<?php header_image(); ?>');"></div>
<?php endif; ?>