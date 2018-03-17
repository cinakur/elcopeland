<?php
/**
 * Plugin Name: LimeCuda Beaver Builder Modules
 * Plugin URI:  https://limecuda.com
 * Description: Custom Beaver Builder modules for LimeCuda projects
 * Author:      LimeCuda
 * Version:     0.1.0
 * Author URI:  https://limecuda.com
 *
 * @package limecuda-bb-modules
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'LIMECUDA_BB_MODULES_VERSION' ) ) {
	define( 'LIMECUDA_BB_MODULES_VERSION', '0.1.0' );
}

if ( ! defined( 'LIMECUDA_BB_MODULES_PLUGIN_DIR' ) ) {
	define( 'LIMECUDA_BB_MODULES_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'LIMECUDA_BB_MODULES_PLUGIN_URL' ) ) {
	define( 'LIMECUDA_BB_MODULES_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'lc_register_bb_scripts' );
/**
 * Register scripts and styles that we'll use throughout our modules.
 */
function lc_register_bb_scripts() {

	wp_register_script( 'slick-slider', LIMECUDA_BB_MODULES_PLUGIN_URL . '/resources/js/slick.min.js', array( 'jquery' ) );

}

add_action( 'init', 'lc_bb_modules' );
/**
 * Run our plugin modules.
 */
function lc_bb_modules() {

	if ( ! class_exists( 'FLBuilderModule' ) )
		return;

	require_once( LIMECUDA_BB_MODULES_PLUGIN_DIR . 'modules/hero-slider/hero-slider.php' );
	//require_once( LIMECUDA_BB_MODULES_PLUGIN_DIR . 'modules/cig-stats/cig-stats.php' );
	//require_once( LIMECUDA_BB_MODULES_PLUGIN_DIR . 'modules/fifty-fifty/fifty-fifty.php' );
	//require_once( LIMECUDA_BB_MODULES_PLUGIN_DIR . 'modules/world-map/world-map.php' );
	//require_once( LIMECUDA_BB_MODULES_PLUGIN_DIR . 'modules/blog-feature/blog-feature.php' );

}
