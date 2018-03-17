<?php
/**
 * Display pretty statistics about CIG.
 *
 * @package cornerstone-bb-modules
 */
class LC_CIG_Stats extends FLBuilderModule {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 */
	public function __construct() {

		parent::__construct( array(
			'name'          => 'CIG Stats',
			'description'   => 'Display 3 cool stats about the CIG network.',
			'category'		  => 'Cornerstone Components',
			'dir'           => CORNERSTONE_BB_MODULES_PLUGIN_DIR . 'modules/cig-stats',
			'url'           => CORNERSTONE_BB_MODULES_PLUGIN_URL . 'modules/cig-stats',
		) );

		$this->add_js( 'cig-stats', $this->url . 'js/cig-stats.js', array( 'jquery' ) );

	}
}

FLBuilder::register_module( 'LC_CIG_Stats', array(
	'general'       => array(
		'title'         => 'General',
		'sections'      => array(
			'general'       => array(
				'title'         => 'Stats',
				'fields'        => array(
					'section_title' => array(
					    'type'          => 'text',
					    'label'         => 'Section Title',
					    'default'       => '',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.stats__section-title',
					    ),
					),
					'stat_number_one' => array(
					    'type'          => 'text',
					    'label'         => 'Statistic Number One',
					    'default'       => '',
					    'placeholder'   => 'The number for the first statistic',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.stats__number-one',
					    ),
					),
					'stat_description_one' => array(
					    'type'          => 'text',
					    'label'         => 'Statistic Description One',
					    'default'       => '',
					    'placeholder'   => 'The description for the first statistic',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.stats__description-one',
					    ),
					),
					'stat_relation_word_one' => array(
					    'type'          => 'text',
					    'label'         => 'Relationship Word',
					    'default'       => '',
					    'placeholder'   => 'The relationship between the first and second stat',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.stats__relationship-one',
					    ),
					),
					'stat_number_two' => array(
					    'type'          => 'text',
					    'label'         => 'Statistic Number Two',
					    'default'       => '',
					    'placeholder'   => 'The number for the second statistic',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.stats__number-two',
					    ),
					),
					'stat_description_two' => array(
					    'type'          => 'text',
					    'label'         => 'Statistic Description Two',
					    'default'       => '',
					    'placeholder'   => 'The description for the second statistic',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.stats__description-two',
					    ),
					),
					'stat_relation_word_two' => array(
					    'type'          => 'text',
					    'label'         => 'Relationship Word',
					    'default'       => '',
					    'placeholder'   => 'The relationship between the second and third stat',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.stats__relationship-two',
					    ),
					),
					'stat_number_three' => array(
					    'type'          => 'text',
					    'label'         => 'Statistic Number Three',
					    'default'       => '',
					    'placeholder'   => 'The number for the third statistic',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.stats__number-three',
					    ),
					),
					'stat_description_three' => array(
					    'type'          => 'text',
					    'label'         => 'Statistic Description Three',
					    'default'       => '',
					    'placeholder'   => 'The description for the third statistic',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.stats__description-three',
					    ),
					),
				),
			),
		),
	),
) );
