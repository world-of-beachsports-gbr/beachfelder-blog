<?php

  get_header();
  // get all the categories from the database
  $cats = get_categories();
?>

<div class="content">
  <?php
    foreach ($cats as $cat) : 
    $cat_id= $cat->term_id;
  ?>
    <div class="row">
      <div class="column column--12 column--s-6 -spacing-outer-70">
        <h2 class="-typo-headline-02 -text-color-blue-01 -font-secondary">Alles aus dem Resort: <span class="-text-color-green-01"><?= $cat->name; ?></span></h2>
      </div>
      <?php if ($cat->category_description !='') : ?> 
        <div class="column column--12 column--s-6 -spacing-outer-70">
          <p class="-typo-copy -text-color-blue-02 -font-primary"><?= $cat->category_description; ?></p>
        </div>
      <?php endif; ?>
    </div>
    <?php query_posts("cat=$cat_id&posts_per_page=3"); ?>
    <div class="row -flex -flex--row-wrap -spacing-outer-30 index__row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if ($cat->count == 2 || $cat->count == 1 ) : ?>
          <?php get_template_part( 'template-parts/content/content', '2-items' ); ?>
        <?php elseif ($cat->count == 3 ) : ?>
            <?php get_template_part( 'template-parts/content/content', '3-items' ); ?>
        <?php endif; ?>
      <?php endwhile; endif; ?>
    </div><!-- .row ENDE -->
    <?php if ( $cat->category_count > 3 ) : ?>
      <div class="row">
        <div class="column column--12 -text-align-center -spacing-outer-30">
          <a href="<?= $cat->slug; ?>" class="button-secondary">
            <span class="button-secondary__label">mehr aus dieser Kategorie</span>
          </a>
        </div>
      </div>
    <?php endif; ?>
    <div class="row">
      <div class="column column--12 -spacing-outer-30">
        <hr class="divider">
      </div>
    </div>
  <?php endforeach; ?>
</div>

<?php
get_footer();