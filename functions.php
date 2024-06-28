<?php

function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
}



add_action('after_setup_theme', 'montheme_supports');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

function wpdocs_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');


// Excerpt length
function mytheme_custom_excerpt_length($length)
{
    return 75;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);
    
// // SMTP email settings
// define('SMTP_username', 'api');  // host username
// define('SMTP_password', 'your-mailtrap-smtp-password');   // Mailtrap SMTP password
// define('SMTP_server', 'live.smtp.mailtrap.io');     // SMTP server address
// define('SMTP_FROM', 'youremail@example.com');   // Your Email Address
// define('SMTP_NAME', 'Your Name');   //  Business From Name
// define('SMTP_PORT', '587');     // Server Port Number
// define('SMTP_SECURE', 'tls');   // Encryption - ssl or tls (recommended)
// define('SMTP_AUTH', true);  // Use SMTP authentication (true|false)
// define('SMTP_DEBUG',   0);  // for debugging purposes only