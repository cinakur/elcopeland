<?php
/**
* Plugin Name: LimeCuda Custom Content
* Plugin URI: http://joshmallard.com
* Description: Simple way to add custom content for client projects
* Author: Josh Mallard
* Version: 1.0.0
* Author URI: http://joshmallard.com
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load CPT Helper
require_once( plugin_dir_path( __FILE__ ) . 'core-classes/CPT_Core.php' );

// Load Taxonomy Helper
require_once( plugin_dir_path( __FILE__ ) . 'core-classes/Taxonomy_Core.php' );

// Register Snippet CPT
register_via_cpt_core(
	array(
		'Snippet',
		'Snippets',
		'code-snippets'
	),
	array(
		'menu_icon'           => 'dashicons-media-code',
		'publicly_queryable' 	=> true,
		'rewrite'             => array( 'slug' => 'code-snippets' ),
		'hierarchical'        => true,
		'supports'            => array( 'title', 'editor', 'revisions', 'genesis-cpt-archives-settings', 'author', 'genesis-adjacent-entry-nav' )
	)
);

// Register Tutorial CPT
register_via_cpt_core(
	array(
		'Tutorial',
		'Tutorials',
		'tutorials'
	),
	array(
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'publicly_queryable' 	=> true,
		'rewrite'             => array( 'slug' => 'tutorial' ),
		'hierarchical'        => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'genesis-cpt-archives-settings', 'author', 'comments' )
	)
);
