<?php
/**
 * A Blog Feature module.
 *
 * @package cornerstone-bb-modules
 */
class LC_Blog_Feature extends FLBuilderModule {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 */
	public function __construct() {

		parent::__construct( array(
			'name'          => 'Blog Feature',
			'description'   => 'Display featured blog list along with cta sidebar',
			'category'		  => 'Cornerstone Components',
			'dir'           => CORNERSTONE_BB_MODULES_PLUGIN_DIR . 'modules/blog-feature',
			'url'           => CORNERSTONE_BB_MODULES_PLUGIN_URL . 'modules/blog-feature',
		) );

	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module( 'LC_Blog_Feature', array(
	'general'       => array(
		'title'         => 'General',
		'sections'      => array(
			'cta-one'       => array(
				'title'         => 'CTA One',
				'fields'        => array(
					'content_cta_one' => array(
						'type'  => 'editor',
						'label' => 'First cta content',
					),
				),
			),
			'cta-two'      => array(
				'title'          => 'CTA Two',
				'fields'         => array(
					'content_cta_two' => array(
						'type'  => 'editor',
						'label' => 'Second cta content',
					),
				),
			),
		),
	),
) );
