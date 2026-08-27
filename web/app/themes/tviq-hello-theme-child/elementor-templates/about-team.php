<?php
/**
 * Template Name: About — Team
 * Description: Leadership panel and team grid.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tviq_team_img = get_stylesheet_directory_uri() . '/assets/img/team/';

// alt="" is deliberate: each portrait sits directly beside the person's name in
// the adjacent <h5>, so a descriptive alt would make screen readers announce the
// name twice. The images carry no information the text does not already give.
?>
<section class="team-panel">
  <div class="wrap">
    <span class="pill">Our Team</span>
    <h2>U.S.-Based Leadership, Backed by an AI-Enabled Offshore Bench.</h2>
    <p>Every engagement is led onshore and scaled offshore — one standard of execution, top to bottom. Every offshore resource is recruited, trained, and directly supervised by our U.S.-based leadership.</p>
    <div class="team-grid">
      <div class="t-card"><img class="avatar" src="<?php echo esc_url( $tviq_team_img ); ?>scott-ryan.jpg" width="52" height="52" loading="lazy" decoding="async" alt=""><h5>Scott Ryan</h5><span>CEO</span><a href="mailto:sryan@tviq.io">sryan@tviq.io</a></div>
      <div class="t-card"><img class="avatar" src="<?php echo esc_url( $tviq_team_img ); ?>sara-sinclair.jpg" width="52" height="52" loading="lazy" decoding="async" alt=""><h5>Sara Sinclair</h5><span>COO</span><a href="mailto:ssinclair@tviq.io">ssinclair@tviq.io</a></div>
      <div class="t-card"><img class="avatar" src="<?php echo esc_url( $tviq_team_img ); ?>miles-pretlove.jpg" width="52" height="52" loading="lazy" decoding="async" alt=""><h5>Miles Pretlove</h5><span>VP, Ad Operations</span><a href="mailto:miles@tviq.io">miles@tviq.io</a></div>
      <div class="t-card"><img class="avatar" src="<?php echo esc_url( $tviq_team_img ); ?>steven-gold.jpg" width="52" height="52" loading="lazy" decoding="async" alt=""><h5>Steven Gold</h5><span>VP, Revenue Management</span><a href="mailto:steven@tviq.io">steven@tviq.io</a></div>
    </div>
  </div>
</section>
