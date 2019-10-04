<?php

if ( ! function_exists( 'beachfelderblog_setup' ) ) :

	function beachfelderblog_setup() {

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'beachfelder-blog' ),
				'footer' => __( 'Footer Menu', 'beachfelder-blog' ),
				'social' => __( 'Social Links Menu', 'beachfelder-blog' ),
			)
		);

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
	wp_enqueue_style( 'main', get_template_directory_uri() . 'assets/css/main.css',false,'1.0','screen');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  	wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'beachfelderblog_scripts' );