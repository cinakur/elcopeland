<?php
/**
 * Genesis Child Theme for LimeCuda client projects
 *
 * @package genesis-starter
 */

// Start the engine.
include_once( get_template_directory() . '/lib/init.php' );

// Add our default settings.
include_once( get_stylesheet_directory() . '/includes/theme-defaults.php' );

// Child theme (do not remove).
define( 'CHILD_THEME_NAME', 'El Copeland' );
define( 'CHILD_THEME_URL', 'https://elcopeland.com/' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
/**
 * Enqueue all our styles and scripts for the site.
 */
function genesis_sample_enqueue_scripts_styles() {

	if ( WP_DEBUG ) {
		wp_enqueue_script( 'mobile-navigation', get_stylesheet_directory_uri() . '/assets/js/mobile-navigation.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
		wp_enqueue_script( 'home-scripts', get_stylesheet_directory_uri() . '/assets/js/home-scripts.js', array( 'jquery', 'jquery-ui-tabs' ), CHILD_THEME_VERSION, true );
		wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), CHILD_THEME_VERSION, false );
	} else {
		if ( is_front_page() ) {
			wp_enqueue_script( 'home-scripts', get_stylesheet_directory_uri() . '/js/home-scripts.js', array( 'jquery', 'jquery-ui-tabs' ), CHILD_THEME_VERSION, true );
		} else {
			wp_enqueue_script( 'page-scripts', get_stylesheet_directory_uri() . '/js/page-scripts.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
		}
	}

	wp_enqueue_style( 'load-fonts', 'https://fonts.googleapis.com/css?family=BioRhyme|Lato|Montserrat', array(), CHILD_THEME_VERSION );

}

// Add HTML5 markup structure.
add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

// Add Accessibility support.
add_theme_support( 'genesis-accessibility', array( '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links' ) );

// Add viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Add support for 3-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 3 );

// Force BFA local fallback.
add_filter( 'bfa_force_fallback', '__return_true' );

// Add front-end styles to backend editor.
add_editor_style();

// Reposition the breadcrumbs.
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );

add_filter( 'genesis_breadcrumb_args', 'limecuda_blog_breadcrumbs' );
/**
 * Filter the default Genesis breadcrumb settings utilize FontAwesome icon
 * classes for home and separator
 *
 * @param array $args Existing arguments for the breadcrumbs.
 */
function limecuda_blog_breadcrumbs( $args ) {

	$args['home']   = '<a href="' . get_bloginfo( 'url' ) . '"><i class="fa fa-home"></i></a>';
	$args['prefix'] = sprintf( '<div %s><div %s>', genesis_attr( 'breadcrumb' ), genesis_attr( 'wrap' ) );
	$args['suffix'] = '</div></div>';
	$args['sep']    = ' <i class="fa fa-angle-right"></i> ';
	$args['labels'] = array(
		'prefix'    => __( '', 'genesis' ),
		'author'    => __( 'Archives for ', 'genesis' ),
		'category'  => __( 'Archives for ', 'genesis' ),
		'tag'       => __( 'Archives for ', 'genesis' ),
		'date'      => __( 'Archives for ', 'genesis' ),
		'search'    => __( 'Search for ', 'genesis' ),
		'tax'       => __( 'Archives for ', 'genesis' ),
		'post_type' => __( 'Archives for ', 'genesis' ),
		'404'       => __( 'Not found: ', 'genesis' ),
	);

	return $args;

}

// Allow shortcodes to be used in sidebar widgets.
add_filter( 'widget_text', 'do_shortcode' );

add_filter( 'genesis_footer_creds_text', 'limecuda_footer_creds_text' );
/**
 * Filter the default credits to include LimeCuda branding and info.
 *
 * @since 1.0.0
 */
function limecuda_footer_creds_text() {
	?>

	<div class="creds">
		<p>Copyright &copy; <?php echo esc_attr( date( 'Y' ) ); ?> &middot; <a href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a> &middot; <a href="/sitemap/">Sitemap</a></p>
		<p>Website Development by <a href="https://limecuda.com" target="_blank" title="Strategic Website Development">LimeCuda</a></p>
	</div>

<?php
}
