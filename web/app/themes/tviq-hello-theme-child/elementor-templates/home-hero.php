<?php
/**
 * Template Name: Home — Hero
 * Description: Tall split hero with gradient wordmark and side panel.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="page-hero tall">
	<div class="hero-glow"></div>
	<div class="wrap hero-split">
		<div>
			<h1>Reinventing<br>Media <span class="accent">Operations</span>.</h1>
		</div>
		<div class="hero-side">
			<div class="hero-divider"></div>
			<p class="hero-eyebrow">Better Systems. Better Operations. Better Outcomes.</p>
			<p class="lead">Integrated advisory, technology, and managed solutions for media companies.</p>
			<a href="<?php echo esc_url( tviq_page_url( 'services' ) ); ?>" class="hero-link">See How We Work <span class="arrow-box">&rarr;</span></a>
		</div>
	</div>
</section>
