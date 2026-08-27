<?php
/**
 * Template Name: Home — Practices
 * Description: Numbered list of the four integrated practices.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
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
