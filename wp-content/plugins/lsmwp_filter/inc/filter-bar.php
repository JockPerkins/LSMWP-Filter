<?php

function lsmwp_create_filter_bar() {
	$filter_bar = '<ul class="filter-bar">';

	$categories = get_categories();

	foreach ( $categories as $category ) {
		if ( 'uncategorized' !== $category->slug ) {
			$filter_bar .= '<li class="filter-button" data-category="'
									. $category->slug . '">' . $category->name . '</li>';
		}
	}

		$filter_bar .= '</ul>';

		$clear_filter = '<div class="clear-filter"><a>CLEAR</a></div>';

		echo $filter_bar . $clear_filter;
}
