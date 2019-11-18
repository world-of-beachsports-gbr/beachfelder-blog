  <?php wp_footer(); ?>
  
  <?php get_template_part( 'template-parts/sections/section' , 'newsletter' ); ?>

  <?php if (!is_404() ): ?>
    <?php if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) ): ?>
      <div class="content">
        <div class="row">
          <div class="column column--12 column--s-4 -spacing-outer-100">
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
              <?php get_template_part( 'template-parts/footer/footer', 'widget-1' ); ?>
            <?php endif; ?>
          </div>
          <div class="column column--12 column--s-4 -spacing-outer-100">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
              <?php get_template_part( 'template-parts/footer/footer', 'widget-2' ); ?>
            <?php endif; ?>
          </div>
          <div class="column column--12 column--s-4 -spacing-outer-100">
            <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
              <?php get_template_part( 'template-parts/footer/footer', 'widget-3' ); ?>
            <?php endif; ?>
          </div>
        </div>
      </div><!-- .content ENDE -->
    <?php endif; ?> 
  <?php endif; ?>

  <footer class="footer">
    <div class="content">
      <?php if (!is_404() ): ?>
        <div class="row">
          <div class="column column--12">
            <hr class="divider -spacing-outer-100">
          </div>
        </div>
      <?php endif; ?>
      <div class="row ">
        <div class="column column--12">
          <a href="https://www.instagram.com/beachfelder.de/" target="_blank" rel="noopener noreferrer" class="link-icon -spacing-outer-20 link-icon--has-shadow">
            <span class="link-icon__icon icon icon--instagram link-icon__icon--instagram"></span>
          </a>
          <a href="http://facebook.com/beachfelder.de" target="_blank" rel="noopener noreferrer" class="link-icon -spacing-outer-20 link-icon--has-shadow">
            <span class="link-icon__icon icon icon--facebook link-icon__icon--facebook"></span>
          </a>
        </div>
      </div>
      <div class="row -spacing-outer-20">
        <div class="column column--12">
          <?php bem_menu('Footer', 'navigation-footer', ''); ?>
        </div>
      </div>
      <div class="row">
        <div class="column column--12">
          <p class="footer__paragraph">
            © <?php echo date('Y'); ?> World of Beachsport GbR
          </p>
        </div>
      </div>
      <div class="row -spacing-outer-20">
        <div class="column column--12"></div>
      </div>
    </div>
  </footer>

  <script id="__bs_script__">//<![CDATA[
      document.write("<script async src='http://HOST:3002/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
  //]]></script>
  </body>
</html>