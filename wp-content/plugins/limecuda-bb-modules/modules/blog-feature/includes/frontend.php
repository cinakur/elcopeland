<?php
/**
 * Frontend for our fifty fifty module.
 *
 * @package cornerstone-bb-modules
 */

?>
<section class="blog-feature">

	<div class="wrap">
		<div class="blog-feed two-thirds first">

			<?php
			$args = array(
				'post_type' => 'post',
				'no_found_rows' => true,
				'posts_per_page' => 5,
			);

			$blog = new WP_Query( $args );

			if ( $blog->have_posts() ) :
				while ( $blog->have_posts() ) : $blog->the_post();
					?>

					<div class="blog-post">
						<div class="blog-post__date post-date">
							<span class="month"><?php echo get_the_date( 'M' ); ?></span>
							<span class="day"><?php echo get_the_date( 'd' ); ?></span>
						</div>
						<div class="blog-post__content">
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="post-meta">

								<?php
								if ( get_field( 'consultant' ) ) {

									$authors = get_field( 'consultant' );

									foreach ( $authors as $author ) {
										$author = $author;
									}

									$office   = cig_get_consultant_office( $author );
									$image_id = get_post_thumbnail_id( $author );
									$image    = wp_get_attachment_image_src( $image_id, 'thumbnail' ); ?>

									<span class="post-author"><a href="<?php echo esc_url( get_the_permalink( $author ) ); ?>"><span class="author-headshot" style="background-image:url(<?php echo esc_url( $image[0] ); ?> );"></span> <?php echo esc_attr( get_field( 'display_name', $author ) ); ?></a></span>

									<?php
									if ( $office ) { ?>
										<span class="accent">of</span> <span class="post-author-office"><a href="<?php echo esc_url( get_the_permalink( $office ) ); ?>"><?php echo esc_attr( get_the_title( $office ) ); ?></a></span>
									<?php
									}

								} else {
									?>
									<span class="post-author"><a href="/about/">Cornerstone International Group</a></span>
									<?php
								}
								?>

							</div>
						</div>
					</div>

					<?php
				endwhile;
			endif;

			wp_reset_postdata();
			?>

		</div>

		<div class="blog-feature-ctas one-third">

			<div class="blog-feature-ctas__cta">
				<?php echo $settings->content_cta_one; ?>
			</div>

			<div class="blog-feature-ctas__cta">
				<?php echo $settings->content_cta_two; ?>
			</div>

		</div>

	</div>

</section>
