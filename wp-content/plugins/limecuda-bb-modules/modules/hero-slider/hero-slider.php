<?php
/**
 * Slick slider component for Beaver Builder
 *
 * @package limecuda-bb-modules
 */
class LC_Hero_Slider extends FLBuilderModule {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 */
	public function __construct() {

		parent::__construct( array(
			'name'          => 'Hero Slider',
			'description'   => 'Hero Slider built using posts from the slide cpt',
			'category'		  => 'LimeCuda Custom Components',
			'dir'           => LIMECUDA_BB_MODULES_PLUGIN_DIR . 'modules/hero-slider',
			'url'           => LIMECUDA_BB_MODULES_PLUGIN_URL . 'modules/hero-slider',
		) );

		$this->add_js( 'slick-slider', LIMECUDA_BB_MODULES_PLUGIN_URL . 'resources/js/slick.min.js', array( 'jquery' ) );
		$this->add_js( 'hero-slider', $this->url . 'js/hero-slider.js', array( 'jquery', 'slick-slider' ) );

		$this->add_css( 'slick-slider', LIMECUDA_BB_MODULES_PLUGIN_URL . 'resources/css/slick.css' );

	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module( 'LC_Hero_Slider', array(
	'general'       => array(
		'title'         => 'General',
		'sections'      => array(
			'general'       => array(
				'title'         => 'Slider Content',
				'fields'        => array(
					'overlay_text' => array(
					    'type'          => 'textarea',
					    'label'         => 'Overlay Text',
					    'default'       => '',
					    'placeholder'   => 'Permanent text to display over slider',
					    'rows'          => '6',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.slider__overlay-text',
					    ),
					),
					'button_text'     => array(
					    'type'          => 'text',
					    'label'         => 'Button Text',
					    'default'       => '',
					    'placeholder'   => 'Button Text',
					    'preview'         => array(
					        'type'             => 'text',
					        'selector'         => '.slider__button',
					    ),
					),
					'button_link'     => array(
					    'type'          => 'text',
					    'label'         => 'Button Link',
					    'default'       => '',
					    'placeholder'   => 'Button Link',
					),
				),
			),
		),
	),
) );
