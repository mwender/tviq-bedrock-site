<?php
/**
 * Template Name: About
 * Description: The complete about page — hero, value grid, difference table,
 * how we work, team, who should work with TVIQ, CTA.
 *
 * Consolidated from seven per-section templates. Three sections share the base
 * class `.intro` and four share `.section-title`, but the comp gave them
 * different heading sizes and spacing. Those differences used to be kept apart by
 * each template's own wrapper class; now that everything renders inside one
 * wrapper they are keyed off the `--value` / `--how` / `--who` / `--difference`
 * modifiers below. Do not remove a modifier without moving its rules.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tviq_team_img = get_stylesheet_directory_uri() . '/assets/img/team/';
?>

<?php // Hero — gradient hero with chevron decorations and lead paragraph. ?>
<section class="page-hero">
	<?php require get_stylesheet_directory() . '/elementor-templates/_hero-deco.php'; ?>

	<div class="wrap">
		<span class="pill pill--on-dark">About TVIQ</span>
		<h1>An Operational Force Multiplier for Enterprise Revenue Teams.</h1>
		<p class="lead">As the global leader in revenue operations, TVIQ's expertise allows our clients to increase revenue and efficiency and reduce operational latency &mdash; evolving a back-office practice into a driver of revenue and profit.</p>
	</div>
</section>

<?php // Value grid — we don't replace your organization. ?>
<section class="intro intro--value">
  <div class="wrap">
    <span class="pill outline">Built For Enterprises That Already Have An Ad Ops Team</span>
    <h2 class="section-title">We don't replace your organization — we multiply it.</h2>
    <div class="value-grid">
      <div class="v-card"><h3>Team Augmentation</h3><p>TVIQ becomes an extension of your revenue organization — senior ad tech operators embedded in your workflows, tools, and reporting cadence from day one.</p></div>
      <div class="v-card"><h3>Operational Velocity</h3><p>AI-enabled teams deliver reduced operational latency and faster delivery times across trafficking, campaign management, troubleshooting, and escalation.</p></div>
      <div class="v-card"><h3>Revenue Performance</h3><p>Back-office execution becomes a driver of revenue and profit: higher yield, better fill, stronger CPMs across every demand source.</p></div>
    </div>
  </div>
</section>

<?php // The TVIQ Difference — with/without comparison table. ?>
<section class="list-section list-section--difference">
  <div class="wrap">
    <span class="pill">The TVIQ Difference</span>
    <h2 class="section-title">We make Rev Ops the most cost-effective driver of advertising revenue growth.</h2>
    <div class="compare-scroll">
      <table class="compare">
      <tr><th>Capability</th><th>With TVIQ</th><th>Without TVIQ</th></tr>
      <tr><td>Team structure</td><td class="with">Dynamic team working across the entire ecosystem</td><td class="without">Small, under-resourced teams</td></tr>
      <tr><td>Approach</td><td class="with">Multi-disciplinary, vast systems expertise</td><td class="without">Bogged down in tag management</td></tr>
      <tr><td>Focus</td><td class="with">Top-line &amp; bottom-line growth</td><td class="without">Rote, task-driven tactics</td></tr>
      <tr><td>Technology</td><td class="with">AI-powered to increase yield</td><td class="without">Limited to a narrow set of systems</td></tr>
      </table>
    </div>
  </div>
</section>

<?php // How we work — five-step operating model. ?>
<section class="intro intro--how">
  <div class="wrap">
    <span class="pill outline">How We Work</span>
    <h2 class="section-title">A structured operating model, start to finish.</h2>
    <p class="section-lead">Flexible engagement: full-stack managed service, team augmentation alongside your existing ad ops group, or project-based technical audits.</p>
    <div class="how-row">
      <div class="how-item"><div class="dot">1</div><h5>Assess</h5><p>Technical revenue audit across your ad stack.</p></div>
      <div class="how-item"><div class="dot">2</div><h5>Integrate</h5><p>Embedded in your tools &amp; escalation paths.</p></div>
      <div class="how-item"><div class="dot">3</div><h5>Operate</h5><p>Daily ops &amp; campaign management.</p></div>
      <div class="how-item"><div class="dot">4</div><h5>Optimize</h5><p>Yield, floors, SPO &amp; demand development.</p></div>
      <div class="how-item"><div class="dot">5</div><h5>Report</h5><p>Executive dashboards &amp; QBRs.</p></div>
    </div>
  </div>
</section>

<?php
// Team — leadership panel and team grid.
//
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

<?php // Who should work with TVIQ — qualifying list. ?>
<section class="intro intro--who">
  <div class="wrap">
    <span class="pill outline">Who Should Work With TVIQ</span>
    <h2 class="section-title">Built for teams ready to turn ad ops into a growth driver.</h2>
    <div class="who-list">
      <div class="who-item"><p>Anyone looking to grow their advertising revenue.</p></div>
      <div class="who-item"><p>Anyone supply-constrained but wanting to control and grow their advertising business.</p></div>
      <div class="who-item"><p>Anyone resource-constrained and/or overpaying for limited ad operations services.</p></div>
      <div class="who-item"><p>Anyone who wants to deploy an entire department of ad technology experts.</p></div>
    </div>
  </div>
</section>

<?php // Final CTA — closing call to action. ?>
<section class="final-cta">
  <div class="wrap">
    <h2>Proven Experience.<br>Measurable Results.</h2>
    <a href="<?php echo esc_url( tviq_contact_url() ); ?>" class="cta-pill">Contact Scott Ryan, CEO</a>
  </div>
</section>
