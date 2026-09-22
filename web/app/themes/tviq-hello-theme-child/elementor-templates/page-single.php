<?php
/**
 * Template Name: Page Single
 * Description: Hero plus a prose column for plain WordPress pages — the page's
 * own title and editor content, not copy baked into the template.
 *
 * Placed in the Elementor "Page Single" theme template (1089), whose conditions
 * cover every singular page except the front page. Elementor-built pages render
 * their own content and never reach this; it is what plain pages such as the
 * Privacy Policy and Terms and Conditions get. Unlike the other templates here,
 * the copy stays in the WP editor, because legal text is edited by the client.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Editing the theme template itself in Elementor makes the library post the
// global post; rendering its content here would recurse into this template.
$tviq_is_library = 'elementor_library' === get_post_type();
?>

<?php // Hero — gradient hero with chevron decorations, title from the page. ?>
<section class="page-hero page-hero--single">
	<?php require get_stylesheet_directory() . '/elementor-templates/_hero-deco.php'; ?>

	<div class="wrap">
		<h1><?php echo $tviq_is_library ? 'Page Title' : esc_html( get_the_title() ); ?></h1>
	</div>
</section>

<?php // Body — the page's editor content in a readable measure. ?>
<section class="page-body">
	<div class="wrap">
		<div class="page-prose">
			<?php
			if ( $tviq_is_library ) {
				echo '<p>The page&rsquo;s editor content renders here.</p>';
			} else {
				the_content();
			}
			?>
		</div>
	</div>
</section>
