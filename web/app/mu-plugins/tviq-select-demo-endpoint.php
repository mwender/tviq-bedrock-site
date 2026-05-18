<?php
/**
 * REST endpoint: TVIQ Select demo request form → Gravity Forms.
 * Route: POST /wp-json/tviq/v1/select-demo
 *
 * Required constants (set in .env → config/application.php):
 *   TVIQ_SELECT_FORM_ID       — Gravity Forms form ID for the Select demo request form
 *
 * Optional constants:
 *   TVIQ_SELECT_ALLOWED_ORIGIN — CORS Access-Control-Allow-Origin value (omit if same-origin)
 *   TVIQ_SELECT_RATE_LIMIT     — Max submissions per IP per hour; default 5
 */

// Admin notice if required constants are missing
add_action('admin_notices', function () {
    if (!current_user_can('manage_options')) return;

    $missing = [];
    if (!defined('TVIQ_SELECT_FORM_ID')) $missing[] = 'TVIQ_SELECT_FORM_ID';
    if (empty($missing)) return;

    $env_lines = implode("\n", array_map(fn($c) => "{$c}='your-value-here'", $missing));
    $php_lines = implode("\n", array_map(fn($c) => "Config::define('{$c}', env('{$c}'));", $missing));

    printf(
        '<div class="notice notice-error"><p><strong>TVIQ Select Demo Endpoint</strong> — missing required constants:</p>'
            . '<ul>%s</ul>'
            . '<p>Add to <code>.env</code>:</p><pre>%s</pre>'
            . '<p>Add to <code>config/application.php</code> (Gravity Forms section):</p><pre>%s</pre></div>',
        implode('', array_map(fn($c) => '<li><code>' . esc_html($c) . '</code></li>', $missing)),
        esc_html($env_lines),
        esc_html($php_lines)
    );
});

// Only register the route if the required constant is present
add_action('rest_api_init', function () {
    if (!defined('TVIQ_SELECT_FORM_ID')) return;

    register_rest_route('tviq/v1', '/select-demo', [
        'methods'             => 'POST',
        'callback'            => 'tviq_handle_select_demo',
        'permission_callback' => '__return_true',
        'args'                => [
            'first_name' => ['required' => true,  'sanitize_callback' => 'sanitize_text_field'],
            'last_name'  => ['required' => true,  'sanitize_callback' => 'sanitize_text_field'],
            'company'    => ['required' => true,  'sanitize_callback' => 'sanitize_text_field'],
            'email'      => [
                'required'          => true,
                'sanitize_callback' => 'sanitize_email',
                'validate_callback' => 'is_email',
            ],
            'phone'    => ['required' => false, 'sanitize_callback' => 'sanitize_text_field'],
            'interest' => ['required' => false, 'sanitize_callback' => 'sanitize_text_field'],
            'message'  => ['required' => false, 'sanitize_callback' => 'sanitize_textarea_field'],
        ],
    ]);
});

function tviq_handle_select_demo(WP_REST_Request $request): WP_REST_Response {
    if (defined('TVIQ_SELECT_ALLOWED_ORIGIN')) {
        header('Access-Control-Allow-Origin: ' . TVIQ_SELECT_ALLOWED_ORIGIN);
    }

    if (!class_exists('GFAPI')) {
        return new WP_REST_Response(['success' => false, 'message' => 'Form service unavailable.'], 503);
    }

    // Rate limiting via transients: configurable, default 5 submissions/IP/hour
    $limit = defined('TVIQ_SELECT_RATE_LIMIT') ? (int) TVIQ_SELECT_RATE_LIMIT : 5;
    $ip    = sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'] ?? ''));
    $key   = 'tviq_select_rl_' . md5($ip);
    $count = (int) get_transient($key);

    if ($count >= $limit) {
        return new WP_REST_Response(
            ['success' => false, 'message' => 'Too many requests. Please try again later.'],
            429
        );
    }

    set_transient($key, $count + 1, HOUR_IN_SECONDS);

    $input_values = [
        'input_1' => $request->get_param('first_name'),
        'input_2' => $request->get_param('last_name'),
        'input_3' => $request->get_param('company'),
        'input_4' => $request->get_param('email'),
        'input_6' => $request->get_param('interest'),
        'input_7' => $request->get_param('message'),
    ];

    // Only include phone if provided — avoids GF format validation on empty values
    $phone = trim((string) $request->get_param('phone'));
    if ($phone !== '') {
        $input_values['input_5'] = $phone;
    }

    $result = GFAPI::submit_form((int) TVIQ_SELECT_FORM_ID, $input_values);

    if (is_wp_error($result) || empty($result['is_valid'])) {
        $message = is_wp_error($result)
            ? $result->get_error_message()
            : 'Submission failed. Please try again.';

        if (defined('WP_DEBUG_LOG') && WP_DEBUG_LOG) {
            if (is_wp_error($result)) {
                error_log(sprintf(
                    '[TVIQ Select] WP_Error for %s (form_id=%d): [%s] %s',
                    $ip,
                    TVIQ_SELECT_FORM_ID,
                    $result->get_error_code(),
                    $result->get_error_message()
                ));
            } else {
                $validation = $result['validation_messages'] ?? [];
                error_log(sprintf(
                    '[TVIQ Select] GF validation failed for %s (form_id=%d): %s',
                    $ip,
                    TVIQ_SELECT_FORM_ID,
                    wp_json_encode($validation)
                ));
            }
        }

        return new WP_REST_Response(['success' => false, 'message' => $message], 400);
    }

    $entry_id = $result['entry_id'] ?? 0;

    // GFAPI::submit_form() doesn't reliably fire notifications outside GF's
    // own POST cycle, so we send them explicitly here.
    $form  = GFAPI::get_form((int) TVIQ_SELECT_FORM_ID);
    $entry = GFAPI::get_entry($entry_id);
    if (!is_wp_error($entry)) {
        GFAPI::send_notifications($form, $entry);
    }

    if (defined('WP_DEBUG_LOG') && WP_DEBUG_LOG) {
        error_log(sprintf(
            '[TVIQ Select] Entry created for %s (form_id=%d, entry_id=%d)',
            $ip,
            TVIQ_SELECT_FORM_ID,
            $entry_id
        ));
    }

    return new WP_REST_Response(['success' => true], 200);
}
