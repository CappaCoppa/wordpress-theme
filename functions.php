<?php
// Enqueue Classes
foreach (glob(get_template_directory() . '/inc/classes/*.php') as $file) {
    require_once $file;
}

// Enqueue Scripts
function enqueue_theme_scripts() {
    wp_enqueue_script('alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

// Enqueue Styles
function enqueue_theme_styles() {
    wp_enqueue_style('tailwind.css', get_template_directory_uri() . '/dist/tailwind.css', [], '1.0', 'all' );

    // Correct way: Enqueue as a *style*, not a script
    wp_enqueue_style(
        'material-icons',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200',
        [],
        null
    );
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

// Add Custom Logo to the Theme
function theme_setup() {
    add_theme_support('custom-logo', [
        'height'      => 100, 
        'width'       => 300, 
        'flex-height' => true,
        'flex-width'  => true,
    ]);
}
add_action('after_setup_theme', 'theme_setup');

// Register Menus
function register_menus() {
    register_nav_menus( array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
    ));
}
add_action( 'init', 'register_menus');