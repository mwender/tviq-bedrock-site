<?php
/**
 * Template Name: Site Footer
 * Description: Copyright line and secondary link row.
 *
 * @package TviqHelloThemeChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// The comp's footer row omits Home, so the primary menu is rendered manually
// with the front-page item skipped rather than through wp_nav_menu().
$tviq_front_id   = (int) get_option( 'page_on_front' );
$tviq_menu_items = tviq_primary_menu_items();
?>
<footer class="tviq-footer">
	<div class="wrap foot-bottom">
		<div>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. All rights reserved.</div>
		<div>
			<?php
			foreach ( $tviq_menu_items as $tviq_item ) {
				if ( $tviq_front_id && (int) $tviq_item->object_id === $tviq_front_id ) {
					continue;
				}
				?>
				<a href="<?php echo esc_url( $tviq_item->url ); ?>"><?php echo esc_html( $tviq_item->title ); ?></a>
				<?php
			}
			?>
		</div>
	</div>
</footer>
