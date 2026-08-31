<?php
/**
 * Template Name: Services
 * Description: The complete services page — hero, four practice blocks, CTA.
 *
 * Consolidated from three per-section templates. The `--first` / `--last`
 * modifiers on the outer practice blocks replace the `:first-of-type` /
 * `:last-of-type` selectors those templates used: now that the hero and the CTA
 * are siblings in this same wrapper, the first <section> here is the hero and the
 * last is the CTA, so the positional selectors would no longer match any block.
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
		<span class="pill pill--on-dark">Services</span>
		<h1>Four Practices. One Integrated Operating Model.</h1>
		<p class="lead">A full-stack media operations partner across revenue, technology, demand, and intelligence &mdash; deployed as a full-stack managed service, team augmentation, or project-based technical audit.</p>
	</div>
</section>

<?php // Practice 1 — CTV & online video revenue operations. ?>
<section class="practice-block practice-block--first">
  <div class="wrap">
    <div class="p-head">
      <h2>CTV &amp; Online Video Revenue Operations</h2><p>End-to-end monetization management for enterprise streaming businesses.</p>
    </div>
    <div class="col-grid">
      <div class="col"><h4>What We Deliver</h4><ul>
        <li>Enterprise ad operations management</li>
        <li>SSP &amp; exchange management</li>
        <li>Programmatic yield optimization</li>
        <li>Direct &amp; programmatic guaranteed operations</li>
        <li>Supply path optimization (SPO)</li>
        <li>Executive revenue reporting</li>
      </ul></div>
      <div class="col"><h4>Measurable Outcomes</h4><ul class="outcome-list">
        <li>↑ Fill rates</li>
        <li>↑ CPM performance</li>
        <li>↓ Operational overhead</li>
        <li>↑ Yield per impression</li>
        <li>↑ Revenue without headcount</li>
      </ul></div>
    </div>
  </div>
</section>

<?php // Practice 2 — ad technology & platform operations. ?>
<section class="practice-block">
  <div class="wrap">
    <div class="p-head">
      <h2>Ad Technology &amp; Platform Operations</h2><p>Whether launching a new FAST channel or optimizing an existing streaming business, TVIQ manages the ecosystem of platforms, integrations, and ad technology.</p>
    </div>
    <div class="col-grid">
      <div class="col"><h4>Core Services</h4><ul>
        <li>Platform configuration</li>
        <li>Inventory architecture</li>
        <li>Ad server optimization</li>
        <li>Demand partner onboarding</li>
        <li>Bidstream QA</li>
        <li>Technical revenue audits</li>
      </ul></div>
      <div class="col"><h4>Platform Expertise</h4>
        <div class="outcome-strip">
          <span>SpringServe / Magnite</span><span>Publica</span><span>Google Ad Manager</span>
          <span>FreeWheel</span><span>Added TV</span><span>Aniview</span><span>Elemental TV</span><span>Limelight</span><span>Teqblaze</span>
          <span>Indicue</span><span>Basis</span><span>Beeswax</span><span>Claude</span><span>Gemini</span><span>ChatGPT</span><span>StackAdapt</span><span>SSPs</span><span>DSPs</span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php // Practice 3 — marketplace & demand growth. ?>
<section class="practice-block">
  <div class="wrap">
    <div class="p-head">
      <h2>Marketplace &amp; Demand Growth</h2><p>Expand demand beyond traditional open-market monetization.</p>
    </div>
    <div class="col-grid">
      <div class="col"><h4>Revenue Growth Services</h4><ul>
        <li>Premium PMP strategy</li>
        <li>Curated marketplace development</li>
        <li>Inventory &amp; audience extension</li>
        <li>Buyback programs &amp; backfill optimization</li>
        <li>DSP relationship management</li>
        <li>Direct demand packaging</li>
      </ul></div>
      <div class="col"><h4>Business Outcomes</h4><ul class="outcome-list">
        <li>More qualified buyers</li>
        <li>Higher bid competition</li>
        <li>Revenue diversification</li>
        <li>Reduced SSP dependency</li>
        <li>Premium demand activation</li>
      </ul></div>
    </div>
  </div>
</section>

<?php // Practice 4 — analytics & revenue intelligence. ?>
<section class="practice-block practice-block--last">
  <div class="wrap">
    <div class="p-head">
      <h2>Analytics &amp; Revenue Intelligence</h2><p>Transform operational data into revenue growth.</p>
    </div>
    <div class="col-grid">
      <div class="col"><h4>Revenue Intelligence</h4><ul>
        <li>Executive dashboards</li>
        <li>Yield analysis &amp; SSP performance reviews</li>
        <li>Buyer scorecards &amp; revenue forecasting</li>
        <li>Inventory health monitoring</li>
        <li>Quarterly business reviews</li>
      </ul></div>
      <div class="col"><h4>What You Get</h4><ul class="outcome-list">
        <li>Greater transparency</li>
        <li>Faster revenue decisions</li>
        <li>Improved forecasting</li>
        <li>Continuous optimization</li>
      </ul></div>
    </div>
  </div>
</section>

<?php // Final CTA — closing audit call to action. ?>
<section class="final-cta">
  <div class="wrap">
    <h2>Ready to Grow Your Revenue?</h2>
    <p class="cta-note">Start with a technical revenue audit across your ad stack, integrations, and demand mix.</p>
    <a href="<?php echo esc_url( tviq_contact_url() ); ?>" class="cta-pill">Request an Audit</a>
  </div>
</section>
