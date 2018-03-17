<?php
/**
 * Front Page Template
 *
 * @since     1.0.0
 */

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

genesis();