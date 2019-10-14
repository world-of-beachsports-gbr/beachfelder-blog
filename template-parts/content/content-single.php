<main>
  <div class="row">
    <div class="column column--12 -spacing-outer-30">
      <p class="-typo-copy -text-color-blue-01 -font-primary"><?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?></p>
    </div>
  </div>
  
  <div class="row">
    <div class="column column--12 -spacing-outer-30">
      <h1 class="-typo-headline-02 -text-color-blue-01 -font-secondary"><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="column column--12 column--s-3 column--m-2">
      <div class="icon-text -spacing-outer-30">
        <span class="icon-text__icon icon icon--calendar"></span>
        <span class="icon-text__label"><?php the_date(); ?></span>
      </div>
    </div>
    <div class="column column--12 column--s-9 column--m-10 -spacing-outer-s-15 -spacing-outer-m-15 -spacing-outer-l-15">
      <?php
        $categories = get_the_category();
        foreach( $categories as $category) :
            $name = $category->name;
            $category_link = get_category_link( $category->term_id );
      ?>
        <a href="<?= $category_link; ?>" class="icon-text -spacing-outer-15">
          <span class="icon-text__icon icon icon--archive"></span>
          <span class=" <?= esc_attr( $name ) ?> icon-text__label"> <?= $name; ?> </span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="row -spacing-outer-50">
    <div class="column column--12">
      <?php meks_ess_share(); ?>
    </div>
  </div>
  <div class="row -spacing-outer-10">
    <div class="column column--12">
      <?php the_content(); ?>
    </div>
  </div>
</main>
<?php
// Default arguments
$args = array(
	'posts_per_page' => 3, // How many items to display
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
$cats_ids = array();

foreach( $cats as $wpex_related_cat ) {
	$cats_ids[] = $wpex_related_cat->term_id; 
}
if ( ! empty( $cats_ids ) ) {
	$args['category__in'] = $cats_ids;
}

// Query posts
$wpex_query = new wp_query( $args );
?>
<div class="row">
  <div class="column column--12 -spacing-outer-90">
    <h3 class="-typo-headline-03 -text-color-blue-01 -font-secondary">Das könnte dich auch interessieren</h3>
  </div>
</div>
<div class="row -spacing-outer-30 -flex -flex--row-wrap">
  <?php // Loop through posts
    if( $wpex_query->post_count >= 1 ) : 
      foreach( $wpex_query->posts as $post ) : setup_postdata( $post );
        if( $wpex_query->post_count < 3) : 
          get_template_part( 'template-parts/content/content', '2-items' ); 
        else :
          get_template_part( 'template-parts/content/content', '3-items' ); 
        endif;
      endforeach;
    else: ?> 
      <div class="column column--12">
        <p class="-typo-copy -text-color-blue-02 -font-primary"> Leider sind noch keine ähnlichen Artikel vorhanden. </p>
      </div>
    <?php endif; ?>
</div>

<?php // Reset post data
wp_reset_postdata(); ?>