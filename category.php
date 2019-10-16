<?php
  get_header();
  $categories = get_the_category();
  $category_count = $categories[0]->category_count;
?>
<div class="content">
  <div class="row">
    <div class="column column--12 -spacing-outer-50">
      <h1 class="-typo-headline-02 -text-color-blue-01 -font-secondary">Alles aus dem Resort: <span class="-text-color-green-01"><?php single_cat_title(); ?></span></h1>
    </div>
  </div>
  <div class="row -flex -flex--row-wrap -spacing-outer-30">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if ( $category_count < 3 ): ?>
        <?php get_template_part( 'template-parts/content/content', '2-items' ); ?>
      <?php else : ?>
        <?php get_template_part( 'template-parts/content/content', '3-items' ); ?>
      <?php endif; ?>
    <?php endwhile;?>
  </div>
</div>
<?php get_footer(); ?>