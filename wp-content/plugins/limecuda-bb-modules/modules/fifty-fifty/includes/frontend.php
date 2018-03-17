<?php
/**
 * Frontend for our fifty fifty module.
 *
 * @package cornerstone-bb-modules
 */

?>
<section class="fifty-fifty">

	<div class="one-half first <?php echo esc_attr( $settings->backround_color_left ); ?>">
		<?php echo $settings->content_left; ?>
	</div>

	<div class="one-half <?php echo esc_attr( $settings->backround_color_right ); ?>">
		<?php echo $settings->content_right; ?>
	</div>

</section>
