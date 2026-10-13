<?php
/**
 * Keep Ads.txt Manager (10up `ads-txt`) healthy on this site.
 *
 * 1. Cap revisions. The settings page loads every revision of the ads.txt
 *    post in full on each load; at ~127 KB per revision, an uncapped history
 *    exhausted PHP memory and took the editor down (2026-10-13). WordPress
 *    trims the excess on each save once a cap is in place.
 *
 * 2. Purge the page cache on save. SpinupWP purges a post's permalink, but
 *    these posts are served at /ads.txt and /app-ads.txt, so without this a
 *    saved change is not public until the cache entry expires.
 */

defined('ABSPATH') || exit;

const TVIQ_ADSTXT_REVISIONS_TO_KEEP = 20;

const TVIQ_ADSTXT_PUBLIC_PATHS = [
    'adstxt'     => '/ads.txt',
    'app-adstxt' => '/app-ads.txt',
];

add_filter('wp_revisions_to_keep', function ($num, $post) {
    if ($post instanceof WP_Post && isset(TVIQ_ADSTXT_PUBLIC_PATHS[$post->post_type])) {
        return TVIQ_ADSTXT_REVISIONS_TO_KEEP;
    }

    return $num;
}, 10, 2);

foreach (TVIQ_ADSTXT_PUBLIC_PATHS as $post_type => $path) {
    add_action("save_post_{$post_type}", function () use ($path): void {
        if (function_exists('spinupwp_purge_url')) {
            spinupwp_purge_url(home_url($path));
        }
    });
}