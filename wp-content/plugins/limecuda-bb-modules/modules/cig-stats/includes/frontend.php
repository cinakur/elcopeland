<?php
/**
 * The display of our statistics module.
 *
 * @package cornerstone-bb-modules
 */

?>

<section class="stats">

	<h2 class="section-title stats__section-title"><?php echo esc_attr( $settings->section_title ); ?></h2>

	<div class="wrap">

		<div class="one-third first first-stat">

			<p class="stats__number-one stats__number">
				<?php echo esc_attr( $settings->stat_number_one ); ?>
			</p>

			<p class="stats__description-one stats__description">
				<?php echo esc_attr( $settings->stat_description_one ); ?>
			</p>

			<span class="stats__relationship stats__relationship-one"><?php echo esc_attr( $settings->stat_relation_word_one ); ?></span>

		</div>

		<div class="one-third second-stat">

			<p class="stats__number-two stats__number">
				<?php echo esc_attr( $settings->stat_number_two ); ?>
			</p>

			<p class="stats__description-two stats__description">
				<?php echo esc_attr( $settings->stat_description_two ); ?>
			</p>

			<span class="stats__relationship stats__relationship-two"><?php echo esc_attr( $settings->stat_relation_word_two ); ?></span>

		</div>

		<div class="one-third third-stat">

			<p class="stats__number-three stats__number">
				<?php echo esc_attr( $settings->stat_number_three ); ?>
			</p>

			<p class="stats__description-three stats__description">
				<?php echo esc_attr( $settings->stat_description_three ); ?>
			</p>

		</div>

	</div>
</section>
