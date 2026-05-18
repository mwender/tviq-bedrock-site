<?php

/**
 * Configuration overrides for WP_ENV === 'production'
 *
 * Debugging is off by default. To enable on SpinupWP, set in .env:
 *
 *   WP_DEBUG=true
 *   WP_DEBUG_LOG=/sites/tviq.io/logs/debug.log   ← outside the webroot
 *
 * WP_DEBUG_DISPLAY is intentionally kept false — errors are never shown
 * to visitors regardless of the WP_DEBUG setting.
 */

use Roots\WPConfig\Config;

use function Env\env;

Config::define('WP_DEBUG', env('WP_DEBUG') ?? false);
Config::define('WP_DEBUG_LOG', env('WP_DEBUG_LOG') ?? false);
