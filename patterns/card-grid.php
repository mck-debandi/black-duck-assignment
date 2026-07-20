<?php
/**
 * Title: Card Grid
 * Slug: black-duck-theme/card-grid
 * Categories: black-duck-custom
 * Description: Displays a grid of cards containing asset data from a php file.
 * Keywords: card, grid, resources
 * Viewport Width: 992
 */
?>

<!-- wp:group {"className":"resources","layout":{"type":"constrained"}} -->
<div class="wp-block-group resources">

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			
			<!-- wp:html -->
			<div class="resource-filters">
				<button class="button button-secondary" type="button" id="reset-filters">Reset All Filters</button>

				<div class="search-container">
					<input type="search" id="resource-search" placeholder="Search">
					<button id="search-button" class="button-unstyled" type="button" aria-label="Search"></button>
				</div>

				<p>Type</p>
				<div class="categories-filter">
					<label>
						<input type="checkbox" value="eBook" class="resource-filter" data-filter-type="category">
						eBooks
					</label>
					<label>
						<input type="checkbox" value="Guide" class="resource-filter" data-filter-type="category">
						Guides
					</label>
				</div>
				
				<p>Topics</p>
				<div class="tags-filter">
					<label>
						<input type="checkbox" value="AI & Machine Learning" class="resource-filter" data-filter-type="tag">
						AI & Machine Learning
					</label>
					<label>
						<input type="checkbox" value="AppSec Risk Management" class="resource-filter" data-filter-type="tag">
						AppSec Risk Management
					</label>
					<label>
						<input type="checkbox" value="SCA" class="resource-filter" data-filter-type="tag">
						Black Duck SCA
					</label>
					<label>
						<input type="checkbox" value="Coverity SAST" class="resource-filter" data-filter-type="tag">
						Coverity SAST
					</label>
					<label>
						<input type="checkbox" value="M&A Due Diligence" class="resource-filter" data-filter-type="tag">
						M&A Due Diligence
					</label>
					<label>
						<input type="checkbox" value="Polaris" class="resource-filter" data-filter-type="tag">
						Polaris
					</label>
					<label>
						<input type="checkbox" value="SAST" class="resource-filter" data-filter-type="tag">
						SAST
					</label>
					<label>
						<input type="checkbox" value="SCA" class="resource-filter" data-filter-type="tag">
						SCA
					</label>
					<label>
						<input type="checkbox" value="Software Supply Chain Security" class="resource-filter" data-filter-type="tag">
						Software Supply Chain Security
					</label>
				</div>
			</div>

			<!-- /wp:html -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"80%"} -->
		<div class="wp-block-column" style="flex-basis:80%">

			<!-- wp:group {"className":"card-grid-wrapper","layout":{"type":"constrained"}} -->
			<div class="wp-block-group card-grid-wrapper">

				<!-- wp:html -->
				<p id="resource-count"></p>

				<p id="no-results" hidden>No results found.</p>
				<!-- /wp:html -->
				
				<!-- wp:group {"className":"card-grid-target"} -->
				<div class="wp-block-group card-grid-target">
					
					<!-- wp:paragraph -->
					<p>-- Cards will display here. --</p>
					<!-- /wp:paragraph -->
					
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
			
		</div>
		<!-- /wp:column -->
		
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->