<?php get_header(); ?>
<div class="section-fullwidth section-fullwidth--404">
  <div class="content">
    <div class="row">
      <div class="column column--12 column--m-8">
        <h2 class="-typo-headline-01 -font-secondary -text-color-white">404 - Seite nicht gefunden</h2>
        <p class="-typo-headline-03 -text-color-white -font-primary -spacing-outer-40">
          Leider konnte die von dir gewünschte Seite nicht gefunden werden.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="column column--12 column--m-8 -spacing-outer-40">
        <?php get_template_part( 'template-parts/header/header', 'search' ); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>