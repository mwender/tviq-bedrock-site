<?php
/**
 * Template Name: Site Header
 * Description: Sticky masthead — logo, primary nav, CTA button, and mobile drawer.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tviq_logo    = get_stylesheet_directory_uri() . '/assets/img/tviq-logo.png';
$tviq_contact = tviq_contact_url();

$tviq_nav_args = array(
	'theme_location' => 'tviq_primary',
	'menu'           => 'main-menu',
	'container'      => false,
	'depth'          => 1,
	'fallback_cb'    => false,
);
?>
<header class="tviq-header">
	<div class="nav">
		<a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php echo esc_url( $tviq_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="700" height="323">
		</a>

		<?php wp_nav_menu( $tviq_nav_args + array( 'items_wrap' => '<ul class="nav-links">%3$s</ul>' ) ); ?>

		<a class="nav-cta" href="<?php echo esc_url( $tviq_contact ); ?>">Connect With Us</a>

		<button
			type="button"
			class="nav-toggle"
			aria-expanded="false"
			aria-controls="tviq-nav-drawer"
			aria-label="<?php esc_attr_e( 'Open menu', 'hello-elementor-child' ); ?>">
			<span class="nav-toggle__bar"></span>
			<span class="nav-toggle__bar"></span>
			<span class="nav-toggle__bar"></span>
		</button>
	</div>

	<div class="nav-drawer" id="tviq-nav-drawer" hidden>
		<?php wp_nav_menu( $tviq_nav_args + array( 'items_wrap' => '<ul class="drawer-links">%3$s</ul>' ) ); ?>
		<a class="nav-cta nav-cta--drawer" href="<?php echo esc_url( $tviq_contact ); ?>">Connect With Us</a>
	</div>
</header>
