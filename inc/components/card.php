<?php
/**
 * Asset Card Component
 *
 * Expected variables:
 * $card
 */

// If expected card arg is empty, exit
$card = $args['card'] ?? [];

if ( empty( $card ) ) {
	return;
}

// Variables
$image       = get_template_directory_uri() . '/assets/images/' . (!empty($card['image']) ? $card['image'] : 'rubber-duckies-in-gutter.jpg');
$categories  = !empty($card['categories']) ? $card['categories'] : [];
$title       = !empty($card['title']) ? $card['title'] : '';
$description = !empty($card['description']) ? $card['description'] : '';
$link        = !empty($card['link']) ? $card['link'] : '';
$tags  		 = !empty($card['tags']) ? $card['tags'] : [];

?>

<article class="card" data-categories="<?php echo esc_attr( strtolower( implode( '; ', $categories ) ) ); ?>" data-tags="<?php echo esc_attr( strtolower( implode( '; ', $tags ) ) ); ?>">

	<a class="card-link" href="<?php echo esc_url($card['link']); ?>" target="_blank" aria-label="Learn more about <?php echo esc_attr($card['title']); ?>">

		<div class="card-content">
			<img src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($card['title']); ?>">

			<span class="eyebrow">
				<?php echo implode(', ', $categories); ?>
			</span>

			<p class="headline">
				<?php echo esc_html($title); ?>
			</p>

			<p class="description">
				<?php echo esc_html($description); ?>
			</p>
		</div>

		<p class="call-to-action button button-tertiary button-icon">Learn More</p>

	</a>
</article>
