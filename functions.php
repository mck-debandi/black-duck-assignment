<?php

/** 
 * Load eBook data file once
 */
require_once get_template_directory() . '/assets/data/ebook-data.php';

/** 
 * Enqueues the minified compiled stylesheet and javascript
 * 
 * @return void
 */
function blackducktheme_enqueue_assets() {

	wp_enqueue_style(
		'blackducktheme-style',
		get_template_directory_uri() . '/assets/css/style.min.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'blackducktheme-main',
		get_template_directory_uri() . '/assets/js/main.js',
		[],
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'blackducktheme_enqueue_assets' );


/** 
 * Adds custom pattern category for theme
 * 
 * @return void
 */
function blackducktheme_custom_pattern_categories() {
	
    register_block_pattern_category(
        'black-duck-custom',
        array( 
            'label' => __( 'Black Duck Custom', 'black-duck-theme' )
        )
    );
}
add_action( 'init', 'blackducktheme_custom_pattern_categories' );


/** 
 * Filters blocks to detect the card grid placeholder, then calls function to build the cards
 * 
 * @param mixed $block_content, $block
 * @return string $block_content if not card grid, otherwise build the grid
*/
add_filter( 'render_block', 'blackducktheme_render_card_grid', 10, 2 );

function blackducktheme_render_card_grid( $block_content, $block ) {
	// Only target Group blocks
	if (
		$block['blockName'] !== 'core/group'
	) {
		return $block_content;
	}


	// Check for class unique to card grid
	if (
		empty($block['attrs']['className']) ||
		$block['attrs']['className'] !== 'card-grid-target'
	) {
		return $block_content;
	}

	// Get ebook data to pass ot builder function
	$cards = blackducktheme_get_assets();

	return blackducktheme_build_cards( $cards );
}


/** 
 * Builds the card grid based on data file
 * 
 * @param array $cards
 * @return object
*/
function blackducktheme_build_cards( $cards ) {

	ob_start();
	?>

	<div class="card-grid">

		 
		<!-- Loop over ebook data and pass each one to builder function -->
		<?php foreach ($cards as $card):

			blackducktheme_render_card($card);

		endforeach; ?>

	</div>

	<?php return ob_get_clean();
}


/** 
 * Helper function to render the card component based on data passed in
 * 
 * @param array $card
 * @return void
*/
function blackducktheme_render_card( $card ) {

	get_template_part(
		'inc/components/card',
		null,
		[
			'card' => $card,
		]
	);
}