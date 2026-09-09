<?php
/**
 * Template Name: Sensei SSP
 * Description: The complete Sensei SSP page — hero, why-Sensei value grid, CTA.
 *
 * One template per page, matching home.php / services.php: the Elementor page is a
 * single full-width container holding one ETI widget, and the sections below are
 * plain siblings in this file.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php
// Hero — the deep radial wash behind the shared chevron decorations.
//
// The wash is an SVG rather than a CSS gradient because a radial-gradient offset
// to 72%/14% is what the comp draws; .sensei-bg carries an equivalent linear
// gradient as the fallback ground beneath it.
?>
<section class="page-hero sensei-bg">
	<svg class="sensei-bg__wash" viewBox="0 0 1400 900" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
		<defs>
			<radialGradient id="sensei-bg-grad" cx="72%" cy="14%" r="95%">
				<stop offset="0%" stop-color="#5a35a8"/>
				<stop offset="32%" stop-color="#3a1f74"/>
				<stop offset="65%" stop-color="#1c0f42"/>
				<stop offset="100%" stop-color="#07040d"/>
			</radialGradient>
		</defs>
		<rect width="1400" height="900" fill="url(#sensei-bg-grad)"/>
	</svg>

	<?php require get_stylesheet_directory() . '/elementor-templates/_hero-deco.php'; ?>

	<div class="wrap">
		<span class="pill pill--on-dark">Sensei SSP</span>
		<h1>Revenue Reimagined for Connected TV, DOOH &amp; Streaming Audio.</h1>
		<p class="lead">Sensei by TVIQ is a leading video and audio ad technology platform, combining cutting-edge scalable, programmatic monetization technology with best-in-class ad serving systems to create a unified, robust advertising platform built for the next generation of Connected TV, DOOH, podcast, and streaming audio publishers.</p>
		<p class="hero-tagline hero-tagline--left">Maximize revenue, streamline operations, and deliver premium ad experiences across every screen and every stream &mdash; powered by real-time bidding, deep analytics, and flexible campaign control.</p>
		<a href="https://senseissp.com" target="_blank" rel="noopener" class="hero-link">Visit SenseiSSP.com <span class="arrow-box">&rarr;</span></a>
	</div>
</section>

<?php // Why Sensei — positioning copy and the four differentiators. ?>
<section class="intro">
	<div class="wrap">
		<span class="pill outline">Why Sensei</span>
		<h2 class="section-title">In the world of Connected TV and streaming audio, every publisher is also a network.</h2>
		<p class="section-lead">Sensei&rsquo;s intelligent SSP unifies networked supply, shared inventory, and distribution &mdash; across video and audio &mdash; to maximize revenue.</p>
		<div class="value-grid value-grid--pairs">
			<div class="v-card"><h3>One Ecosystem for Optimization &amp; Delivery</h3><p>Run ad serving, bidding, and deep analytics from a single, scalable platform.</p></div>
			<div class="v-card"><h3>Agile Monetization Across Every Screen &amp; Stream</h3><p>Capture live, FAST, VOD, OLV, DOOH, podcast, and streaming audio revenue without switching tools.</p></div>
			<div class="v-card"><h3>Transparent, Performance-First Architecture</h3><p>Fine-tune yield with customizable QPS controls and zero-latency pipelines.</p></div>
			<div class="v-card"><h3>Backed by TVIQ&rsquo;s Revenue-Ops Team</h3><p>Lean on seasoned experts who keep every placement earning at its peak.</p></div>
		</div>
	</div>
</section>

<?php // Final CTA — closing call to action. ?>
<section class="final-cta">
	<div class="wrap">
		<h2>Ready to Get Started?</h2>
		<p class="cta-note">Contact us today to learn how Sensei by TVIQ can transform your CTV, DOOH, podcast, and streaming audio inventory into a profit center &mdash; with smart AI, operational excellence, and a global partner in programmatic monetization.</p>
		<a href="<?php echo esc_url( tviq_contact_url() ); ?>" class="cta-pill">Get in Touch</a>
	</div>
</section>
