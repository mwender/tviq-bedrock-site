<?php
/**
 * Template Name: Contact — Form & Details
 * Description: Gravity Forms enquiry form alongside the contact detail cards.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ID of the Gravity Form rendered in the card.
 *
 * The comp's raw <form> is markup only; submissions need a real form behind them.
 * Filterable so the form can be swapped without editing this template.
 */
$tviq_form_id = (int) apply_filters( 'tviq/contact_form_id', 2 );
?>
<div class="wrap contact-grid">
	<div class="form-card">
		<?php
		if ( function_exists( 'gravity_form' ) && ! empty( GFAPI::get_form( $tviq_form_id ) ) ) {
			gravity_form( $tviq_form_id, false, false, false, null, true );
		} else {
			echo '<p class="form-card__fallback">The contact form is temporarily unavailable. Please email <a href="mailto:sryan@tviq.io">sryan@tviq.io</a>.</p>';
		}
		?>
	</div>
	<div>
		<div class="info-card">
			<h4>Primary Contact</h4>
			<div class="person">
				<div><h5>Scott Ryan</h5><span>CEO, TVIQ</span></div>
				<a href="mailto:sryan@tviq.io">sryan@tviq.io</a>
			</div>
		</div>
		<div class="info-card">
			<h4>Engagement Models</h4>
			<div class="engagement-row">
				<span>Full-stack managed service</span>
				<span>Team augmentation</span>
				<span>Technical audits</span>
			</div>
		</div>
		<div class="info-card">
			<h4>Connect</h4>
			<p class="info-note">LinkedIn: <a href="https://www.linkedin.com/company/tviq" rel="noopener">linkedin.com/company/tviq</a></p>
			<p class="info-note">www.tviq.io</p>
		</div>
	</div>
</div>
