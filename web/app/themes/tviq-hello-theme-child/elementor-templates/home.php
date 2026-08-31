<?php
/**
 * Template Name: Home
 * Description: The complete home page — hero, intro, practices, outcomes, team panel, CTA.
 *
 * Consolidated from six per-section templates. The Elementor containers those sat
 * in carried no design settings (full width, zero padding, zero gap), so the whole
 * page is now a single ETI widget and the sections are plain siblings in this file.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tviq_hex = get_stylesheet_directory_uri() . '/assets/img/hex-visual.png';
?>

<?php // Hero — tall split hero with gradient wordmark and side panel. ?>
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

<?php // Intro — welcome copy alongside the hexagonal workstreams visual. ?>
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

<?php // Practices — numbered list of the four integrated practices. ?>
<section class="list-section">
	<div class="wrap">
		<div class="list-head">
			<span class="pill outline">TVIQ Operations</span>
			<h2 class="list-head__title">Accelerate Performance Across the Revenue Spectrum</h2>
			<p class="sub">Four Integrated Practices, One Operating Model</p>
			<p class="desc">From ad server configuration to demand growth and revenue intelligence, TVIQ offers a full-stack set of practices designed to monetize every impression across your streaming business.</p>
		</div>

		<div class="num-item"><h3>CTV &amp; Online Video Revenue Operations</h3><span class="desc-inline">Ad server, SSAI &amp; SSP configuration, inventory architecture, technical revenue audits.</span></div>
		<div class="num-item"><h3>Campaign &amp; Platform Operations</h3><span class="desc-inline">Enterprise ad operations, SSP &amp; exchange management, yield optimization, direct &amp; PG operations.</span></div>
		<div class="num-item"><h3>Marketplace &amp; Demand Growth</h3><span class="desc-inline">Premium PMPs, curated marketplaces, SPO, DSP relationships, direct demand packaging.</span></div>
		<div class="num-item"><h3>Analytics &amp; Revenue Intelligence</h3><span class="desc-inline">Executive dashboards, yield analysis, forecasting, continuous auction-level optimization.</span></div>

		<a href="<?php echo esc_url( tviq_page_url( 'services' ) ); ?>" class="arrow-link blue explore-link">Explore Our Services &rarr;</a>
	</div>
</section>

<?php
// Outcomes — grid of measurable outcome cards.
//
// Five cards, matching the headline. The sixth ("Flexible Engagement") was dropped
// in the 2026-08-31 comp revision, which settles the earlier five-vs-six mismatch.
// Card order matters: the grid places each one explicitly by :nth-child.
?>
<section class="outcomes">
	<div class="wrap">
		<div class="outcomes-head">
			<span class="pill">The Bottom Line</span>
			<h2>Every Engagement Is Measured Against Five Outcomes</h2>
			<p class="sub">Our Proven Operating Model Speaks for Itself</p>
			<p class="desc">We don't just run your ad ops &mdash; we're directly accountable to the metrics that matter most to your revenue organization.</p>
		</div>
		<div class="outcome-grid">
			<div class="o-card"><div class="top-bar"></div><h4>Fill Rates &uarr;</h4><p>More inventory monetized across every platform &amp; demand source.</p></div>
			<div class="o-card"><div class="top-bar"></div><h4>CPM Performance &uarr;</h4><p>Stronger pricing via floor strategy and bid density.</p></div>
			<div class="o-card"><div class="top-bar"></div><h4>Yield Per Impression &uarr;</h4><p>Optimized across SSPs, marketplaces, and direct demand.</p></div>
			<div class="o-card"><div class="top-bar"></div><h4>Operational Overhead &darr;</h4><p>Less internal time on trafficking, QA, and reporting.</p></div>
			<div class="o-card"><div class="top-bar"></div><h4>Revenue Per Headcount &uarr;</h4><p>Scale monetization without scaling your team.</p></div>
		</div>
	</div>
</section>

<?php // Team panel — dark panel introducing the leadership bench. ?>
<section class="team-panel">
	<div class="wrap">
		<span class="pill">Our Team</span>
		<h2>An Operational Force Multiplier, Led by Operators Who've Done This Before</h2>
		<p>Leadership from the largest streaming, publishing, and ad tech companies in the world &mdash; directing an AI-enabled offshore delivery bench for 24/7 campaign and yield management.</p>
		<a href="<?php echo esc_url( tviq_page_url( 'about' ) ); ?>" class="arrow-link white">Meet the Team &rarr;</a>
	</div>
</section>

<?php // Final CTA — closing call to action. ?>
<section class="final-cta">
	<div class="wrap">
		<h2>Let's Talk About<br>Your Revenue Operations</h2>
		<a href="<?php echo esc_url( tviq_contact_url() ); ?>" class="cta-pill">Get in Touch</a>
	</div>
</section>
