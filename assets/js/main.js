document.addEventListener('DOMContentLoaded', () => {

	const searchInput  = document.getElementById('resource-search');
	const searchButton = document.getElementById('search-button');
	const resetButton  = document.getElementById('reset-filters-button');
	const filters      = document.querySelectorAll('.resource-filter');
	const cards        = document.querySelectorAll('.card');
	const totalCards   = cards.length;
	const resultCount  = document.querySelector('#resource-count');
	const noResults    = document.querySelector('#no-results');

	function getCheckedFilters(type) {

		return [...document.querySelectorAll(
			`.resource-filter[data-filter-type="${type}"]:checked`
		)].map(filter => filter.value.toLowerCase());
	}

	function filterCards() {

		const keyword = searchInput.value.trim().toLowerCase();

		const selectedCategories = getCheckedFilters('category');
		const selectedTags = getCheckedFilters('tag');

		const hasActiveFilters =
			keyword !== '' ||
			selectedCategories.length > 0 ||
			selectedTags.length > 0;

		let visibleCount = 0;

		cards.forEach(card => {

			const search = card.querySelector('.headline').innerText.toLowerCase();

			const categories =
				card.dataset.categories
					? card.dataset.categories.split('; ')
					: [];

			const tags =
				card.dataset.tags
					? card.dataset.tags.split('; ')
					: [];

			const matchesSearch =
				keyword === '' ||
				search.includes(keyword);

			const matchesCategory =
				selectedCategories.length === 0 ||
				selectedCategories.some(category =>
					categories.includes(category)
				);

			const matchesTag =
				selectedTags.length === 0 ||
				selectedTags.some(tag =>
					tags.includes(tag)
				);

			const visible =
				matchesSearch &&
				matchesCategory &&
				matchesTag;

			card.hidden = !visible;

			if (visible) {
				visibleCount++;
			}

		});

		if (resultCount) {

			resultCount.textContent =
				`Showing ${visibleCount} of ${totalCards} Resources`;

		}

		if (noResults) {

			noResults.hidden = visibleCount !== 0;

		}

		if (hasActiveFilters) {
			resetButton.classList.add('active');
		} else {
			resetButton.classList.remove('active');
		}

	}

	searchButton?.addEventListener('click', filterCards);

    searchInput?.addEventListener('keydown', event => {
        if (event.key === 'Enter') {
            event.preventDefault();
            filterCards();
        }
    });

    resetButton?.addEventListener('click', () => {

	    searchInput.value = '';
		
		filters.forEach(filter => {
			filter.checked = false;
		});

	    filterCards();
    });

	filters.forEach((filter) => {
        filter.addEventListener('change', filterCards);
    });

	filterCards();

});