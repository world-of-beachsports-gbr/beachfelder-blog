<?php get_header(); ?>
<div class="content">
  <div class="row">
      <div class="column column--12 -spacing-outer-50">
        <h1 class="-typo-headline-02 -text-color-blue-01 -font-secondary">Alles von: <span class="-text-color-green-01"><?php the_author(); ?></span></h1>
      </div>
    </div>
    <div class="row -flex -flex--row-wrap">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="column column--12 column--s-6 column--m-4 -spacing-outer-50 -flex">
        <div class="item-news ">
          <div class="item-news__image-container">
            <a href="<?php the_permalink(); ?>">
              <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
              <img src="<?= $featured_img_url; ?>" alt="<?php the_title(); ?>" class="item-news__image">
              <div class="item-news__date"><?php the_date('d.m.Y'); ?></div>
                <div class="overlay item-news__overlay">
                  <span class="overlay__icon icon icon--maximize"></span>
                </div>
            </a>
          </div>
          <div class="item-news__content">
            <a href="<?php the_permalink(); ?>" class="item-news__title"><?php the_title(); ?></a>
            <p class="item-news__copy"><?= excerpt(30); ?></p>
            
            <a href="<?php the_permalink(); ?>" class="link-icon-text item-news__link">
              <span class="link-icon-text__icon icon icon--chevron-right"></span>
              <span class="link-icon-text__copy">weiterlesen</span>
            </a>
          </div>
        </div>
      </div>
    <?php endwhile;?>
  </div>
</div>
<?php get_footer(); ?>