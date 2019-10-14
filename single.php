<?php get_header(); ?>
  <?php 
    if ( has_post_thumbnail() ) :
      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
  ?>
  <div class="image-hero image-hero--half" style="background-image: url(<?= $featured_img_url; ?>);">
<?php endif; ?>
</div>
  <div class="content">
    <?php
    while ( have_posts() ) : the_post(); 
      get_template_part( 'template-parts/content/content', 'single' );
      // get_template_part( 'template-parts/content/content', 'single-alternate' );
    endwhile; ?>
  </div>
<?php get_footer(); ?>