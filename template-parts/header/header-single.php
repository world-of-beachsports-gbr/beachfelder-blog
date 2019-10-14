<?php 
  $imageUrl = get_the_post_thumbnail_url();
?>
<?php if($imageUrl != '') : ?>
  <div class="image-hero image-hero--half" style="background-image: url('<?= $imageUrl; ?>');"></div>
<?php else : ?>
  <div class="image-hero image-hero--half" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/img/header-fallback.jpg');"></div>
<?php endif; ?>