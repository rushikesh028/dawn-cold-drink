<?php
function dawn_cold_drink_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array('primary' => __('Primary Menu', 'dawn-cold-drink')));
}
add_action('after_setup_theme', 'dawn_cold_drink_setup');

function dawn_cold_drink_assets() {
    wp_enqueue_style('dawn-cold-drink-style', get_stylesheet_uri(), array(), '1.1.0');
    wp_enqueue_script('dawn-cold-drink-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.1.0', true);
}
add_action('wp_enqueue_scripts', 'dawn_cold_drink_assets');

/**
 * Handle contact form submissions.
 * Requires proper mail configuration (SMTP plugin recommended) to deliver emails.
 */
function dawn_handle_contact_form() {
    if (!isset($_POST['dawn_contact_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['dawn_contact_nonce'])), 'dawn_contact_nonce')) {
        wp_safe_redirect(add_query_arg('contact', 'error', home_url('/#contact')));
        exit;
    }

    $name    = isset($_POST['dawn_name']) ? sanitize_text_field(wp_unslash($_POST['dawn_name'])) : '';
    $email   = isset($_POST['dawn_email']) ? sanitize_email(wp_unslash($_POST['dawn_email'])) : '';
    $message = isset($_POST['dawn_message']) ? sanitize_textarea_field(wp_unslash($_POST['dawn_message'])) : '';

    if (empty($name) || empty($email) || empty($message) || !is_email($email)) {
        wp_safe_redirect(add_query_arg('contact', 'error', home_url('/#contact')));
        exit;
    }

    $to      = 'contact@dawncolddrink.com';
    $subject = 'Dawn Cold Drink enquiry from ' . $name;
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>');

    $sent = wp_mail($to, $subject, $body, $headers);

    $status = $sent ? 'success' : 'error';
    wp_safe_redirect(add_query_arg('contact', $status, home_url('/#contact')));
    exit;
}
add_action('admin_post_nopriv_dawn_contact_form', 'dawn_handle_contact_form');
add_action('admin_post_dawn_contact_form', 'dawn_handle_contact_form');
