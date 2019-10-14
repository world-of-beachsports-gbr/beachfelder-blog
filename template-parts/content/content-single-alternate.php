<div class="row">
  <div class="column column--12 -spacing-outer-30">
    <p class="-typo-copy -text-color-blue-01 -font-primary"><?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?></p>
  </div>
</div>
<div class="row">
  <div class="column column--12 -spacing-outer-70">
    <h1 class="-typo-headline-02 -text-color-blue-01 -font-secondary"><?php the_title(); ?></h1>
  </div>
</div>
<div class="row">
  <div class="column column--12 column--s-3 column--m-2">
    <div class="icon-text -spacing-outer-30">
      <span class="icon-text__icon icon icon--calendar"></span>
      <span class="icon-text__label"><?php the_date(); ?></span>
    </div>
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
  <div class="column column--12 column--s-9 column--m-10 -spacing-outer-s-15 -spacing-outer-m-15 -spacing-outer-l-15">
    <?php the_content(); ?>
    <?php meks_ess_share(); ?>
  </div>
</div>
<!-- <div class="row -spacing-outer-50">
  <div class="column column--12 column--m-8">
    <?php the_content(); ?>
  </div>
</div> -->
<!-- <div class="row -spacing-outer-70">
  <div class="column column--12 column--m-8">
    <?php meks_ess_share(); ?>
  </div>
</div> -->