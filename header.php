<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beachfelder-blog
 * @subpackage beachfelder-blog
 * @since 1.0.0
 */
?>

<!doctype html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <?php wp_head(); ?>
      <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WHZ85BN');</script>
      <!-- End Google Tag Manager -->
		</head>
    <body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHZ85BN"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
		<?php wp_body_open(); ?>
      <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
      <div class="header">
        <div class="content content--fullwidth">
          <div class="row">
            <div class="column column--2 column--xs-2 column--s-2">
              <?php get_template_part( 'template-parts/logo/logo', 'signet' ); ?>
              </div>
              <div class="column column--10 column--xs-10 column--s-7">
                <?php get_template_part( 'template-parts/header/header', 'search' ); ?>
              </div>
              <div class="column column--12 column--xs-2 column--s-3 -text-align-right -hide--xxs-xs -hide--xs-s">
                  <!-- <a href="#" class="link-icon">
                    <span class="link-icon__icon icon icon--user link-icon__icon--user"></span>
                  </a> -->
                  <a href="<?= home_url(); ?>/kontakt/" class="link-icon">
                    <span class="link-icon__icon icon icon--mail link-icon__icon--user"></span>
                  </a>
              </div>
            </div>
            <div class="row header__column ">
              <div class="column column--12 -spacing-outer-10">
                <hr class="divider">
              </div>
            </div>
            <div class="row header__column ">
              <div class="column column--12 -align-center -spacing-outer-10">
                <?php bem_menu('Main', 'navigation-main', ''); ?>
              </div>
            </div>
          </div>
        </div>
        <?php
          if( is_front_page() ) :
            get_template_part( 'template-parts/header/header', 'image' );
          elseif ( is_page() ) : 
            get_template_part( 'template-parts/header/header', 'single' );
          elseif ( is_category() || is_archive() ) :
            get_template_part( 'template-parts/header/header', 'category' );
          endif;
        ?>