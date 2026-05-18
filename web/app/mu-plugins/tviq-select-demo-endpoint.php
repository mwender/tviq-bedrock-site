<?php
/**
 * REST endpoint: TVIQ Select demo request form → Gravity Forms (form ID 1).
 * Route: POST /wp-json/tviq/v1/select-demo
 */

add_action('rest_api_init', function () {
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
    if (!class_exists('GFAPI')) {
        return new WP_REST_Response(['success' => false, 'message' => 'Form service unavailable.'], 503);
    }

    $result = GFAPI::submit_form(1, [
        'input_1' => $request->get_param('first_name'),
        'input_2' => $request->get_param('last_name'),
        'input_3' => $request->get_param('company'),
        'input_4' => $request->get_param('email'),
        'input_5' => $request->get_param('phone'),
        'input_6' => $request->get_param('interest'),
        'input_7' => $request->get_param('message'),
    ]);

    if (is_wp_error($result) || empty($result['is_valid'])) {
        $message = is_wp_error($result)
            ? $result->get_error_message()
            : 'Submission failed. Please try again.';
        return new WP_REST_Response(['success' => false, 'message' => $message], 400);
    }

    return new WP_REST_Response(['success' => true], 200);
}
