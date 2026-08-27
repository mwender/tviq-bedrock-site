<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	// Shared design system for the elementor-templates/ sections. Every rule is
	// scoped under .eti-tpl, so this is inert on pages with no ETI widgets.
	$design_css = get_stylesheet_directory() . '/assets/css/tviq-design.css';

	wp_enqueue_style(
		'tviq-design',
		get_stylesheet_directory_uri() . '/assets/css/tviq-design.css',
		[
			'hello-elementor-child-style',
		],
		file_exists( $design_css ) ? (string) filemtime( $design_css ) : HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

/**
 * Load the shared design system inside the Elementor editor preview too, so
 * ETI sections render styled on the canvas rather than unstyled.
 *
 * @return void
 */
function tviq_editor_preview_styles() {

	$design_css = get_stylesheet_directory() . '/assets/css/tviq-design.css';

	wp_enqueue_style(
		'tviq-design',
		get_stylesheet_directory_uri() . '/assets/css/tviq-design.css',
		[],
		file_exists( $design_css ) ? (string) filemtime( $design_css ) : HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'elementor/preview/enqueue_styles', 'tviq_editor_preview_styles' );

/**
 * Make every ETI template stylesheet depend on the shared design system.
 *
 * ETI registers its per-template styles before the child theme's, so without this
 * they print FIRST and lose every specificity tie to tviq-design.css — including
 * to its `.eti-tpl.eti-tpl *{margin:0;padding:0}` reset, which silently ate
 * per-template margins. Declaring the dependency guarantees the shared sheet
 * prints first and template rules win ties, which is the expected precedence.
 *
 * @return void
 */
function tviq_eti_style_dependencies() {

	$styles = wp_styles();

	foreach ( $styles->registered as $handle => $style ) {
		if ( 0 === strpos( $handle, 'eti-tpl-' ) && ! in_array( 'tviq-design', $style->deps, true ) ) {
			$styles->registered[ $handle ]->deps[] = 'tviq-design';
		}
	}

}
add_action( 'wp_print_styles', 'tviq_eti_style_dependencies', 5 );

/**
 * Register the primary menu location used by the site-header template.
 *
 * @return void
 */
function tviq_register_menus() {

	register_nav_menus(
		array(
			'tviq_primary' => __( 'Primary Menu', 'hello-elementor-child' ),
		)
	);

}
add_action( 'after_setup_theme', 'tviq_register_menus' );

/**
 * Add an `active` class to the current menu item's link.
 *
 * The comp styles the current page with `.nav-links a.active`, so mirroring that
 * class onto WordPress's current-menu-item lets the shared design CSS apply
 * unchanged. Scoped to the primary location so other menus are untouched.
 *
 * @param array    $atts The link attributes.
 * @param WP_Post  $item The menu item.
 * @param stdClass $args The wp_nav_menu arguments.
 * @return array
 */
function tviq_nav_active_class( $atts, $item, $args ) {

	if ( empty( $args->theme_location ) || 'tviq_primary' !== $args->theme_location ) {
		return $atts;
	}

	$classes = (array) ( $item->classes ?? array() );

	if ( array_intersect( array( 'current-menu-item', 'current_page_item', 'current-menu-ancestor' ), $classes ) ) {
		$atts['class'] = trim( ( $atts['class'] ?? '' ) . ' active' );
	}

	return $atts;

}
add_filter( 'nav_menu_link_attributes', 'tviq_nav_active_class', 10, 3 );

/**
 * Items of the primary menu, in order.
 *
 * @return WP_Post[]
 */
function tviq_primary_menu_items() {

	$locations = get_nav_menu_locations();
	$menu      = ! empty( $locations['tviq_primary'] ) ? $locations['tviq_primary'] : 'main-menu';
	$items     = wp_get_nav_menu_items( $menu );

	return is_array( $items ) ? $items : array();

}

/**
 * Permalink for a page by slug, falling back to the home page if it is missing.
 *
 * The design comps link between flat .html files; templates use this so the
 * markup carries real permalinks and a renamed page degrades to home rather
 * than emitting a dead link.
 *
 * @param string $slug The page slug.
 * @return string
 */
function tviq_page_url( $slug ) {

	$page = get_page_by_path( $slug );

	return $page ? (string) get_permalink( $page ) : home_url( '/' );

}

/**
 * URL of the contact page.
 *
 * @return string
 */
function tviq_contact_url() {

	return tviq_page_url( 'contact-us' );

}
