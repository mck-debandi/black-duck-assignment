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

	<a class="card-link" href="<?php echo esc_url($card['link']); ?>" target="_blank" aria-label="Learn more about <?php echo esc_attr($card['title']); ?>">

		<div class="card-content">

			<?php if (!empty($card['image'])): ?>

				<div class="card-image">
					<img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>">
				</div>

			<?php endif; ?>

			<?php if (!empty($card['categories'])): ?>

				<span class="card-categories">

					<?php echo implode(', ', $card['categories']); ?>

				</span>

			<?php endif; ?>

			<?php if (!empty($card['category'])): ?>

				<span class="asset-card__category">
					<?php echo esc_html($card['category']); ?>
				</span>

			<?php endif; ?>


			<p class="card-title">
				<?php echo esc_html($card['title']); ?>
			</p>


			<?php if (!empty($card['description'])): ?>

				<p class="card-description">
					<?php echo esc_html($card['description']); ?>
				</p>

			<?php endif; ?>

		</div>

		<?php if (!empty($card['link'])): ?>

			<p class="call-to-action button button-tertiary button-icon">Learn More</p>

		<?php endif; ?>

	</a>
</article>
