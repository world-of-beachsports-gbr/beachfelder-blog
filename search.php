<?php get_header(); ?>
<div class="content">
  <div class="row">
    <div class="column column--12">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_excerpt(); ?>
        <?php endwhile; ?>
      <?php else: ?>
        <p class="-typo-copy -font-primary -text-color-blue-02"> leider wurde nichts gefunden</p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>