<?php
function videograph_theme_setup() {
    // Theme unterstützt Beitragsbilder
    add_theme_support('post-thumbnails');
    
    // Menüs registrieren
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'videograph-theme'),
    ));

    // Webfonts und Styles einbinden
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('local-font', get_template_directory_uri() . '/fonts/fontname.css');
    
    // JavaScript für Mobilmenü einbinden
    wp_enqueue_script('jquery');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
}
add_action('after_setup_theme', 'videograph_theme_setup');
