<?php
/**
 * The Slick Slider module frontend display portion.
 *
 * @package limecuda-bb-modules
 */

$args = array(
	'post_type'      => 'slide',
	'posts_per_page' => 4,
	'no_found_rows'  => true,
);

$slides = new WP_Query( $args );

if ( $slides->have_posts() ) : ?>

	<section class="slider-container">

		<div class="slider__overlay">
			<h3 class="slider__overlay-text"><?php echo esc_attr( $settings->overlay_text ); ?></h3>
			<a href="<?php echo esc_url( $settings->button_link ); ?>" class="button slider__button large search-trigger" data-tab-index="-2"><?php echo esc_attr( $settings->button_text ); ?> <i class="fa fa-angle-right"></i></a>
		</div>

		<div class="hero-slider slider">

			<?php
			while( $slides->have_posts() ) : $slides->the_post(); ?>

				<div class="slide">

					<?php echo the_post_thumbnail( 'hero-slide' ); ?>

					<div class="slide__info">

						<?php
						if ( function_exists( 'get_field' ) ) {

							$consultant = get_field( 'consultant' );

							if ( $consultant ) {

								foreach ( $consultant as $consultant ) {

									$office = cig_get_consultant_office( $consultant );

									echo '<p class="consultant-info">' . esc_attr( get_field( 'display_name', $consultant ) ) . '</p>';
									echo '<p class="consultant-office"><a href="' . get_the_permalink( $office ) . '">' . get_the_title( $office ) . '</a></p>';

								}
							}
						}
						?>

					</div>

				</div>

			<?php
			endwhile; ?>

		</div>
	</section>

<?php
endif;
