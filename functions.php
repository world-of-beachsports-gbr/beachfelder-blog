<?php

if ( ! function_exists( 'beachfelderblog_setup' ) ) :

	function beachfelderblog_setup() {

    require_once( get_template_directory() . '/inc/wp_bem_menu.php' );
    require_once( get_template_directory() . '/inc/filter.php' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 1568, 9999 );
    
    // REGISTER THE NAVS
    register_nav_menu('Main', 'Main Menu');
    register_nav_menu('Footer', 'Footer Menu');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
	}

endif;
add_action( 'after_setup_theme', 'beachfelderblog_setup' );

function beachfelderblog_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'beachfelder-blog' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'beachfelder-blog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'beachfelderblog_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function beachfelderblog_scripts() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css',false,'1.0','screen');
  	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  	wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'beachfelderblog_scripts' );


// CUSTOM EXCERPT
function excerpt( $limit ) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
  }

  function content($limit) {
    $content = explode(' ', get_the_content(), $limit);

    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}