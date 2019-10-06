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
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<?php wp_head(); ?>
		</head>
		<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
      <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
      <div class="header">
        <div class="content content--fullwidth">
          <div class="row">
            <div class="column column--2 column--xs-2 column--s-2">
              <a href="<?= home_url(); ?>">
                <?xml version="1.0" encoding="utf-8"?>
                  <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                  <svg version="1.1" class="signet header__signet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="595.28px" height="595.28px" viewBox="0 0 595.28 595.28" enable-background="new 0 0 595.28 595.28" xml:space="preserve">
                    <g>
                      <g>
                        <path class="signet__path signet__path--green  " d="M583.017,341.445c0.102-0.457,0.15-0.927,0.241-1.318c1.919-12.941,3.048-26.08,2.988-38.819
                        c0.028-1.577,0.099-3.126,0.088-4.715C585.665,137.085,455.813,8.371,296.324,9.04C151.713,9.65,32.422,116.422,11.909,255.177
                        H11.22c-1.179,10.001-1.829,19.633-2.148,28.855c-0.2,4.977-0.359,9.992-0.3,15.008c0.13,30.712,5.086,60.32,14.129,88.048
                        c1.109,3.606,2.308,7.085,3.446,10.222c0.3,0.808,0.6,1.446,0.879,2.267c1.129,2.988,2.229,5.795,3.358,8.411
                        c43.434,105.206,147.279,179.135,268.219,178.604c104.784-0.429,196.277-56.623,246.547-140.373l0.068,1.277l4.078-6.632
                        c10.511-15.277,23.66-48.491,31.044-85.299c0.13-0.602,0.249-1.191,0.379-1.78C581.708,349.7,582.378,345.571,583.017,341.445z
                        M301.439,438.425c-59.53,14.219-110.798,21.521-152.273,21.724C61.358,460.516,46.75,428.666,46.43,427.952
                        c-0.37-0.539-30.375-49.489-30.595-148.246c3.128,12.16,8.244,27.569,16.457,43.044c0.929,1.719,1.948,3.536,2.978,5.288
                        c0.32,0.598,0.67,1.137,0.97,1.697c0.739,1.236,1.519,2.485,2.328,3.697c0.39,0.659,0.829,1.368,1.269,2.016
                        c0.79,1.17,1.608,2.349,2.398,3.52c0.459,0.63,0.939,1.298,1.429,1.957c0.959,1.368,1.989,2.7,3.067,3.978
                        c0.37,0.478,0.67,0.898,0.979,1.348c1.389,1.678,2.848,3.367,4.347,5.016c0.59,0.622,1.189,1.27,1.789,1.838
                        c0.979,1.071,1.978,2.098,3.027,3.148c0.71,0.701,1.449,1.41,2.188,2.099c1,0.931,1.989,1.817,3.078,2.736
                        c0.749,0.713,1.558,1.409,2.388,2.081c1.099,0.898,2.277,1.817,3.417,2.716c0.789,0.59,1.568,1.199,2.388,1.789
                        c1.888,1.348,3.856,2.629,5.815,3.898c0.898,0.527,1.838,1.06,2.737,1.616c1.269,0.741,2.538,1.471,3.856,2.18
                        c1.089,0.577,2.178,1.08,3.268,1.607c1.259,0.589,2.548,1.229,3.896,1.801c1.129,0.52,2.268,1.006,3.478,1.468
                        c1.389,0.581,2.827,1.088,4.307,1.607c1.168,0.379,2.288,0.849,3.417,1.179c2.559,0.791,5.106,1.508,7.734,2.151
                        c9.473,2.237,19.894,3.564,31.364,3.494c55.924-0.251,126.975-31.042,210.276-94.042c61.471-46.542,106.782-74.089,144.971-78.265
                        c1.208-0.11,2.519-0.19,3.746-0.301c1.93-0.179,3.868-0.319,5.826-0.29c48.97-0.22,70.741,41.066,73.708,57.682
                        c10.192,58.072-16.005,135.62-30.424,159.87c-0.8-1.542-2.09-3.367-3.907-5.177c-7.453-7.583-25.41-16.567-68.443-16.398
                        C433.44,411.966,374.77,420.938,301.439,438.425z M350,288.48c-9.582-1.769-98.179-19.025-143.231-59.511
                        c22.401-10.841,165.373-84.071,263.98-12.399C437.438,227.201,398.689,251.91,350,288.48z M297.992,82.311
                        c87.779-0.371,163.206,52.955,195.399,129.112c-4.676,0.58-9.402,1.499-14.198,2.699c-14.278-35.811-40.678-67.465-73.829-87.369
                        c-91.234-48.66-197.077,33.222-221.717,68.943c-7.984-24.55,1.199-51.967,27.447-81.742
                        c-33.753,38.258-44.423,69.702-24.12,100.336c33.452,50.408,130.771,73.12,157.55,78.216
                        c-56.974,42.856-108.041,70.222-152.145,82.78c-93.213-19.98-88.606-112.706-88.606-112.706
                        c-8.884,59.482,13.409,107.311,19.973,119.894c-6.226-0.791-12.15-2.02-17.696-3.619c-11.5-25.857-18.074-54.414-18.214-84.519
                        C87.347,177.711,181.419,82.84,297.992,82.311z" />
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
              <div class="column column--10 column--xs-10 column--s-7">
                <form action="../blog-beachfelder/" method="get">
                  <label class="input header__input">
                    <input type="text" placeholder="Suche" class="input__field" name="s" value="<?php the_search_query(); ?>">
                    <span class="input__label">Suche</span>
                    <div class="input__border"></div>
                    <span class="input__icon icon icon--search"></span>
                  </label>
                </form>
              </div>
              <div class="column column--12 column--xs-2 column--s-3 -text-align-right -hide--xxs-xs -hide--xs-s">
                  <a href="#" class="link-icon   ">
                    <span class="link-icon__icon icon icon--heart link-icon__icon--heart"></span>
                  </a>
                  <a href="#" class="link-icon">
                    <span class="link-icon__icon icon icon--user link-icon__icon--user"></span>
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
          endif;
        ?>