<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'awenarts-child-style',
        get_stylesheet_uri(),
        ['twentytwentyfour-style'],
        wp_get_theme()->get('Version')
    );
});
