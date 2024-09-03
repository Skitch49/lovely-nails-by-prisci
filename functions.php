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
    

add_action( 'phpmailer_init', 'configurer_smtp' );
function configurer_smtp( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host = SMTP_HOST; // Remplacez par votre hôte SMTP
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = SMTP_PORT; // Modifiez-le en fonction des exigences de votre serveur SMTP
    $phpmailer->Username = SMTP_USERNAME; // Remplacez par votre nom d'utilisateur SMTP
    $phpmailer->Password = SMTP_PASSWORD; // Remplacez par votre mot de passe SMTP
    $phpmailer->SMTPSecure = SMTP_SECURE; // Modifiez-le en fonction des exigences de votre serveur SMTP. Il peut s'agit également de 'ssl'.
    $phpmailer->From = SMTP_FROM; // Remplacez par votre adresse e-mail
    $phpmailer->FromName = SMTP_FROM_NAME; // Remplacez par votre nom
}