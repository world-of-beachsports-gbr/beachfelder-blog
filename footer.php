  <?php wp_footer(); ?>
  <div class="content">
    <div class="row">
      <div class="column--12 -spacing-outer-100">
        <?php get_template_part( 'template-parts/footer/footer', 'advertising' ); ?>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="content">
      <div class="row">
        <div class="column column--12">
          <hr class="divider -spacing-outer-100">
        </div>
      </div>
      <div class="row ">
        <div class="column column--12">
          <a href="https://www.instagram.com/beachfelder.de/" target="_blank" class="link-icon -spacing-outer-20  link-icon--has-shadow">
            <span class="link-icon__icon icon icon--instagram link-icon__icon--instagram"></span>
          </a>
          <a href="http://facebook.com/beachfelder.de" target="_blank" class="link-icon -spacing-outer-20  link-icon--has-shadow">
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
            © <?php echo date("Y"); ?> World of Beachsport GbR
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