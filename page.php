<?php get_header(); ?>
<div class="content">
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="row">
      <div class="column column--12 -spacing-outer-50">
        <h1 class="-typo-headline-02 -text-color-blue-01 -font-secondary"><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="column column--12 column--m-8 -spacing-outer-30">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>