<?php
/**
 * Template Name: Financial Operations
 * Description: The complete Financial Operations page — hero, practices, outcomes, how we work, expertise panel, CTA.
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

<?php // Hero — gradient hero with chevron decorations and lead paragraph. ?>
<section class="page-hero">
	<?php require get_stylesheet_directory() . '/elementor-templates/_hero-deco.php'; ?>

	<div class="wrap">
		<span class="pill pill--on-dark">Financial Operations</span>
		<h1>Financial Operations That Complete Your Revenue Lifecycle.</h1>
		<p class="lead">TVIQ connects revenue operations to financial control for publishers, SSPs, and ad tech platforms. Extend your reconciliation workflow into invoicing, collections, cash forecasting, and outsourced controller support &mdash; bringing programmatic expertise to your books, with clear visibility from impression to bank account.</p>
	</div>
</section>

<?php // Practices — the four integrated finance practices. ?>
<section class="intro intro--practices">
	<div class="wrap">
		<span class="pill outline">Four Integrated Practices</span>
		<h2 class="section-title">Four Practices, Focused on Five Outcomes</h2>
		<p class="section-lead">Controllers who speak programmatic &mdash; bringing the same operational discipline to your books that TVIQ brings to your ad stack.</p>
		<div class="value-grid value-grid--pairs">
			<div class="v-card"><h3>Revenue Assurance &amp; Reconciliation</h3><p>Match platform reports to invoices and receipts. Resolve discrepancies and deductions; reconcile publisher revenue shares.</p></div>
			<div class="v-card"><h3>Cash Flow &amp; Collections</h3><p>Track receivables, coordinate collections, and plan publisher payments. Maintain a rolling 13-week cash forecast aligned to buyer payment terms.</p></div>
			<div class="v-card"><h3>Outsourced Controller Services</h3><p>Embed controller support in your team for monthly close, balance-sheet reconciliations, financial reporting, and oversight of payables and receivables.</p></div>
			<div class="v-card"><h3>Financial Intelligence</h3><p>Track partner profitability, budget variances, and cash conversion. Build financial reporting for growth and transaction readiness.</p></div>
		</div>
	</div>
</section>

<?php
// Outcomes — grid of measurable outcome cards.
//
// Five cards, matching the headline. Card order matters: the shared six-track grid
// places each one explicitly by :nth-child.
?>
<section class="outcomes outcomes--tight">
	<div class="wrap">
		<div class="outcomes-head">
			<span class="pill">The Bottom Line</span>
			<h2>Every Engagement Is Measured Against Five Outcomes</h2>
			<p class="sub">Financial Clarity From Impression to Bank Account</p>
			<p class="desc">Clear visibility into revenue, receivables, and cash &mdash; reconciled, forecast, and reported on a consistent monthly cadence.</p>
		</div>
		<div class="outcome-grid">
			<div class="o-card"><div class="top-bar"></div><h4>Revenue Visibility &uarr;</h4><p>Trace reported revenue through billing, reconciliation, and receipt.</p></div>
			<div class="o-card"><div class="top-bar"></div><h4>Overdue Receivables &darr;</h4><p>Keep aging balances and collection priorities in focus.</p></div>
			<div class="o-card"><div class="top-bar"></div><h4>Cash Predictability &uarr;</h4><p>Anticipate funding gaps across buyer receipts and publisher payments.</p></div>
			<div class="o-card"><div class="top-bar"></div><h4>Close Efficiency &uarr;</h4><p>Create a consistent monthly close with reconciled balances.</p></div>
			<div class="o-card"><div class="top-bar"></div><h4>Operational Overhead &darr;</h4><p>Reduce manual matching, reporting, and follow-up work.</p></div>
		</div>
	</div>
</section>

<?php // How we work — five-step operating model. ?>
<section class="intro intro--how">
	<div class="wrap">
		<span class="pill outline">How We Work</span>
		<h2 class="section-title section-title--how">A structured financial operating model, start to finish.</h2>
		<p class="how-lead">Engage TVIQ for ongoing controller support, an extension of managed revenue operations, or a focused reconciliation and finance setup project.</p>
		<div class="how-row">
			<div class="how-item"><div class="dot">1</div><h5>Assess</h5><p>Review revenue flows, books, payment terms &amp; reporting gaps.</p></div>
			<div class="how-item"><div class="dot">2</div><h5>Integrate</h5><p>Connect your platforms, ledger &amp; approval workflows.</p></div>
			<div class="how-item"><div class="dot">3</div><h5>Operate</h5><p>Reconcile, invoice, support collections &amp; close the books.</p></div>
			<div class="how-item"><div class="dot">4</div><h5>Optimize</h5><p>Improve cash planning, controls &amp; partner economics.</p></div>
			<div class="how-item"><div class="dot">5</div><h5>Report</h5><p>Deliver cash forecasts, financials &amp; management insights.</p></div>
		</div>
	</div>
</section>

<?php // Expertise panel — dark panel on controller expertise and automation. ?>
<section class="team-panel">
	<div class="wrap">
		<span class="pill">Expertise &amp; Automation</span>
		<h2>Controllers Who Speak Programmatic.</h2>
		<p>Financial oversight informed by revenue shares, payment terms, and discrepancy disputes. Finance Ops automation supports invoice matching, aging alerts, and draft forecasts &mdash; with human controller review and client payment approval.</p>
	</div>
</section>

<?php // Final CTA — closing call to action. ?>
<section class="final-cta">
	<div class="wrap">
		<h2>Financial Operations Built<br>Around Your Business</h2>
		<p class="cta-note">Start with a financial operations assessment. Engage TVIQ for ongoing controller support, an extension of managed revenue operations, or a focused reconciliation and finance setup project.</p>
		<a href="<?php echo esc_url( tviq_contact_url() ); ?>" class="cta-pill">Get in Touch</a>
	</div>
</section>
