<?php 

/** 
 * Enqueues the theme stylesheet on the front.
 */
function blackducktheme_enqueue_styles() {
	$suffix = SCRIPT_DEBUG ? '' : '.min';
	$src    = 'style' . $suffix . '.css';

	wp_enqueue_style(
		'blackducktheme-style',
		get_parent_theme_file_uri( $src ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
	wp_style_add_data(
		'blackducktheme-style',
		'path',
		get_parent_theme_file_path( $src )
	);
}
add_action( 'wp_enqueue_scripts', 'blackducktheme_enqueue_styles' );