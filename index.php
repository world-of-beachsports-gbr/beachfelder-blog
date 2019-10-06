<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beachfelder
 * @subpackage beachfelder
 * @since 1.0.0
 */

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
      <div class="column column--12 -spacing-outer-70">
        <h2 class="-typo-headline-02 -text-color-blue-01 -font-secondary"><?= $cat->name; ?></h2>
      </div>
    </div>
    <?php query_posts("cat=$cat_id&posts_per_page=3"); ?>
    <div class="row -flex -flex--row-wrap -spacing-outer-30 index__row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if ($cat->count == 2 || $cat->count == 1 ) : ?>
          <?php get_template_part( 'template-parts/content/content', '2-items' ); ?>
        <?php elseif ($cat->count == 3 ) : ?>
            <?php get_template_part( 'template-parts/content/content', '2-items' ); ?>
        <?php endif; ?>
      <?php endwhile; endif; ?>
    </div><!-- .row ENDE -->
    <?php if ( $cat->category_count > 2 ) : ?>
      <div class="row">
        <div class="column column--12 -text-align-center -spacing-outer-30">
          <a href="<?= $cat->slug; ?>" class="button-secondary">
            <span class="button-secondary__label">mehr aus dieser Kategorie</span>
          </a>
        </div>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
</div>

<?php
get_footer();