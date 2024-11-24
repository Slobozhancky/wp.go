<?php
// Підключення стилів батьківської теми та дитячої теми
function child_theme_enqueue_styles() {
    // Стиль батьківської теми
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Стиль дитячої теми
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');

// Додавання елемента у футер
add_action('wp_footer', function() {
    echo '<p style="text-align: center;">Це додано через дитячу тему</p>';
});
