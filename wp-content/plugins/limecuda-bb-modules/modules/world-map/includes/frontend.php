<?php
/**
 * World Map and Search Links.
 *
 * @package cornerstone-bb-modules
 */

?>

<section class="start-search">
	<div class="wrap">

		<div class="search-about">
			<h2 class="start-search__section-title"><?php echo esc_attr( $settings->section_title ); ?></h2>
			<p class="start-search__content"><?php echo esc_attr( $settings->content ); ?></p>
			<a class="search-trigger" data-tab-index=-2 href="#office-search">Find an Office</a>
			<a class="search-trigger" data-tab-index=0 href="#consultant-search">Find a Consultant</a>
			<a class="search-trigger" href="#coach-search">Find a Coach</a>
		</div>

		<div class="world-map">

			<a href="/regions/north-america/" class="world-map__marker north-america">
				<span class="marker"></span>
				<span class="location">North America</span>
			</a>

			<a href="/regions/latin-america" class="world-map__marker south-america">
				<span class="marker"></span>
				<span class="location">Latin America</span>
			</a>

			<a href="/regions/europe-middle-east" class="world-map__marker emea">
				<span class="marker"></span>
				<span class="location">Europe / Middle East</span>
			</a>

			<a href="/regions/asia-pacific" class="world-map__marker asia">
				<span class="marker"></span>
				<span class="location">Asia</span>
			</a>

		</div>

	</div>

	<div class="region-list">
		<a href="/regions/north-america/" class="north-america" data-region="north-america">North America</a>
		<a href="/regions/latin-america" class="south-america" data-region="south-america">Latin America</a>
		<a href="/regions/europe-middle-east" class="emea" data-region="emea">Europe / Middle East</a>
		<a href="/regions/asia-pacific" class="asia" data-region="asia">Asia</a>
	</div>

</section>
