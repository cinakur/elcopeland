<?php
/**
 * World map and search area.
 *
 * @package cornerstone-bb-modules
 */
class LC_World_Map extends FLBuilderModule {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 */
	public function __construct() {

		parent::__construct( array(
			'name'          => 'Start Your Search & Map',
			'description'   => 'Displays the general about, search links, and world maps',
			'category'		  => 'Cornerstone Components',
			'dir'           => CORNERSTONE_BB_MODULES_PLUGIN_DIR . 'modules/world-map',
			'url'           => CORNERSTONE_BB_MODULES_PLUGIN_URL . 'modules/world-map',
		) );

		$this->add_js( 'world-map', $this->url . 'js/world-map.js', array( 'jquery' ) );

	}
}

FLBuilder::register_module( 'LC_World_Map', array(
	'general'       => array(
		'title'         => 'General',
		'sections'      => array(
			'general'       => array(
				'title'         => 'Start Your Search Area',
				'fields'        => array(
					'section_title' => array(
					    'type'          => 'text',
					    'label'         => 'Section Title',
					    'default'       => 'Start Your Search',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.start-search__section-title',
					    ),
					),
					'content' => array(
					    'type'          => 'textarea',
					    'label'         => 'Search about content',
					    'default'       => '',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.start-search__content',
					    ),
					),
				),
			),
		),
	),
) );
