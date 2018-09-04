<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'jupiter', get_stylesheet_directory_uri() . '/css/jupiter.css', array(), '3.4.7');


		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/themes.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'prevision-scripts', get_template_directory_uri() . '/js/jupi-theme.js', array(),'0.0.1', true);


		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

// function angular_scripts() {
// 	wp_enqueue_script( 'angular', get_template_directory_uri() . '/js/vendor.js', array(), '1', true );
// 	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1', true );

// 	if(is_page('eventos-mi-mami')) {
// 		wp_enqueue_script( 'homectrl', get_template_directory_uri() . '/js/controller/HomeCtrl.js', array(), '1', true );
// 	}
// }

// add_action( 'wp_enqueue_scripts', 'angular_scripts' );
