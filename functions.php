<?php

add_action('wp_enqueue_scripts', function () {
    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array($parent_style),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'child-theme-extra',
        get_stylesheet_directory_uri() . '/assets/css/theme.css',
        array('child-style'),
        '1.0.0'
    );

    wp_enqueue_script(
        'child-theme-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
});
