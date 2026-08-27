<?php
/**
 * Template Name: Home — Intro
 * Description: Welcome copy alongside the hexagonal workstreams visual.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tviq_hex = get_stylesheet_directory_uri() . '/assets/img/hex-visual.png';
?>
<section class="intro">
	<div class="wrap intro-grid">
		<div>
			<span class="pill">Welcome</span>
			<h2>Revenue &amp; Campaign Operations Partner for Enterprise Publishers</h2>
			<p>TVIQ is the global leader in video revenue operations. We don't replace your ad ops organization &mdash; we multiply it: senior U.S.-based ad tech operators embedded in your workflows, backed by an AI-enabled offshore delivery bench.</p>
			<p>For enterprise streamers, publishers, and platforms, TVIQ has become the trusted operating partner behind the scenes &mdash; increasing revenue and efficiency while reducing operational latency.</p>
			<a href="<?php echo esc_url( tviq_page_url( 'about' ) ); ?>" class="arrow-link">Discover Our Team &rarr;</a>
		</div>
		<div class="photo-frame">
			<div class="glow"></div>
			<div class="hex-visual">
				<img src="<?php echo esc_url( $tviq_hex ); ?>" width="900" height="934" alt="TVIQ Revenue Operations Workstreams diagram">
				<svg class="hex-caption" viewBox="0 0 900 934" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
					<text x="450" y="395" text-anchor="middle" font-family="Helvetica, Arial, sans-serif" font-weight="800" font-size="46" fill="#161033">TVIQ</text>
					<text x="450" y="443" text-anchor="middle" font-family="Helvetica, Arial, sans-serif" font-weight="800" font-size="34" fill="#161033">REVENUE</text>
					<text x="450" y="491" text-anchor="middle" font-family="Helvetica, Arial, sans-serif" font-weight="800" font-size="34" fill="#161033">OPERATIONS</text>
					<text x="450" y="539" text-anchor="middle" font-family="Helvetica, Arial, sans-serif" font-weight="800" font-size="34" fill="#161033">WORKSTREAMS</text>
				</svg>
			</div>
		</div>
	</div>
</section>
