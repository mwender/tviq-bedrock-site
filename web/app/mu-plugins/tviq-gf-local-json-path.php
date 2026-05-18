<?php
/**
 * Redirect Gravity Forms Local JSON saves to bin/gf-json/.
 * Requires wpackagist-plugin/power-boost-for-gravity-forms.
 *
 * Path resolves from this file:
 *   web/app/mu-plugins/ → web/app/ → web/ → project root → bin/gf-json/
 */

defined('ABSPATH') || exit;

add_filter('gravityforms_local_json_save_path', function (): string {
    return dirname(__FILE__, 4) . '/bin/gf-json/';
});
