<?php
/**
 * Asset Card Component
 *
 * Expected variables:
 * $card
 */

$card = $args['card'] ?? [];

if ( empty( $card ) ) {
	return;
}

?>

<article class="card">

	<?php if (!empty($card['image'])): ?>

		<div class="asset-card__image">
			<img
				src="<?php echo esc_url($card['image']); ?>"
				alt="<?php echo esc_attr($card['title']); ?>"
			>
		</div>

	<?php endif; ?>


	<div class="asset-card__content">

		<?php if (!empty($card['category'])): ?>

			<span class="asset-card__category">
				<?php echo esc_html($card['category']); ?>
			</span>

		<?php endif; ?>


		<h3 class="asset-card__title">
			<?php echo esc_html($card['title']); ?>
		</h3>


		<?php if (!empty($card['description'])): ?>

			<p class="asset-card__description">
				<?php echo esc_html($card['description']); ?>
			</p>

		<?php endif; ?>


		<?php if (!empty($card['link'])): ?>

			<a 
				class="asset-card__link"
				href="<?php echo esc_url($card['link']); ?>"
			>
				Learn More
			</a>

		<?php endif; ?>

	</div>

</article>