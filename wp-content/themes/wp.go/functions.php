<?php
// Реєстрація стилів і скриптів батьківської теми
function parent_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'parent_theme_enqueue_styles');

function register_my_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu'), // Меню для шапки
        'footer-menu' => __('Footer Menu'), // Меню для футера (опціонально)
    ));
}
add_action('init', 'register_my_menus');