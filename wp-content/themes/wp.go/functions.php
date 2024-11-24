<?php
// Реєстрація стилів і скриптів батьківської теми
function parent_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'parent_theme_enqueue_styles');