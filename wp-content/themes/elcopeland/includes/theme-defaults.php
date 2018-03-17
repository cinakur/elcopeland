<?php
/**
 * Defaults for Genesis Theme Settings to match our most common
 * configurations
 *
 * @since     1.0.0
 */

add_action( 'after_switch_theme', 'limecuda_genesis_defaults' );
/**
 * Update our default theme options on theme activation
 *
 * @since     1.0.0
 */
function limecuda_genesis_defaults() {

	if( ! function_exists( 'genesis_update_settings' ) )
		return;

	$args = array(
		'blog_title'                => 'image',
		'breadcrumb_single'         => 1,
		'breadcrumb_page'           => 1,
		'breadcrumb_archive'        => 1,
		'breadcrumb_404'            => 1,
		'breadcrumb_attachment'     => 1,
		'content_archive'           => 'excerpts',
		'content_archive_thumbnail' => 1
	);

	genesis_update_settings( $args );

}

add_action( 'toplevel_page_genesis_settings_page_boxes', 'limecuda_remove_unwanted_genesis_metaboxes' );
/**
 * Remove any unwanted default adming settings metaboxes
 *
 * @since     1.0.0
 */
function limecuda_remove_unwanted_genesis_metaboxes() {

	remove_meta_box( 'genesis-theme-settings-blogpage', 'toplevel_page_genesis', 'main' );
}

