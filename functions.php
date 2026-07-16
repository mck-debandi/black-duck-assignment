<?php 

/** 
 * Enqueues the minified compiled stylesheet
 */
function blackducktheme_enqueue_styles() {

	wp_enqueue_style(
		'blackducktheme-style',
		get_template_directory_uri() . '/assets/css/style.min.css',
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'blackducktheme_enqueue_styles' );