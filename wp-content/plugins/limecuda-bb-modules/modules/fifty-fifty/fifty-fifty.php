<?php
/**
 * A Fifty Fifty module for showing 2 equal panels of content.
 *
 * @package cornerstone-bb-modules
 */
class LC_Fifty_Fifty extends FLBuilderModule {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 */
	public function __construct() {

		parent::__construct( array(
			'name'          => 'Fifty Fifty',
			'description'   => 'Display 2 equal panels of content',
			'category'		  => 'Cornerstone Components',
			'dir'           => CORNERSTONE_BB_MODULES_PLUGIN_DIR . 'modules/fifty-fifty',
			'url'           => CORNERSTONE_BB_MODULES_PLUGIN_URL . 'modules/fifty-fifty',
		) );

		$this->add_js( 'match-height', CORNERSTONE_BB_MODULES_PLUGIN_URL . 'resources/js/jquery.matchHeight.js', array( 'jquery' ) );
		$this->add_js( 'fifty-fifty', $this->url . 'js/fifty-fifty.js', array( 'jquery', 'match-height' ) );
	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module( 'LC_Fifty_Fifty', array(
	'general'       => array(
		'title'         => 'General',
		'sections'      => array(
			'left-half'       => array(
				'title'         => 'Left Half',
				'fields'        => array(
					'backround_color_left' => array(
					    'type'    => 'select',
					    'label'   => 'Background Color',
							'options' => cig_color_options_array(),
					),
					'content_left' => array(
						'type'  => 'editor',
						'label' => 'Left half content',
					),
				),
			),
			'right-half'      => array(
				'title'          => 'Right Half',
				'fields'         => array(
					'backround_color_right' => array(
							'type'          => 'select',
							'label'         => 'Background Color',
							'options'       => cig_color_options_array(),
					),
					'content_right' => array(
						'type'  => 'editor',
						'label' => 'Left half content',
					),
				),
			),
		),
	),
) );
