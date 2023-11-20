<?php

require_once 'vendor/autoload.php';


Timber\Timber::init();
Timber::$dirname = 'views';

add_filter('wp_enqueue_scripts', function () {
    $style_path = get_template_directory() . '/dist/main.css';
    wp_register_style('main-css', get_template_directory_uri() . '/dist/main.css', [], filemtime($style_path), null);
    wp_enqueue_style('main-css');

    $js_path = get_template_directory() . '/dist/main.js';
    wp_register_script('main-scripts', get_template_directory_uri() . '/dist/main.js', ['jquery'], filemtime($js_path), true);
    wp_enqueue_script('main-scripts');
});

// Disable block editor, use classic editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// Show 'Menus' in Appearance > Menus
add_theme_support('menus');

// Add a Menu to the global context
add_filter('timber/context', function ($context) {
    $context['menu'] = Timber::get_menu('main');
    return $context;
});
