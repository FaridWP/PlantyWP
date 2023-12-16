<?php

function planty_load_scripts()
{
    wp_enqueue_style('planty-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'planty_load_scripts');


function planty_config()
{
    add_theme_support('custom-logo', array(
        'height' => 19,
        'width' => 201,
        'flex-height' => true,
        'flex-width' => true
    ));

    register_nav_menus(
        array(
            'wp_planty_main_menu' => 'Main Menu'
        )
    );
}
add_action('after_setup_theme', 'planty_config', 0);


function remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library'); // Remove WordPress core CSS
    //wp_dequeue_style('wp-block-library-theme'); // Remove WordPress theme core CSS
    //wp_dequeue_style('classic-theme-styles'); // Remove global styles inline CSS
    //wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
    //wp_dequeue_style('global-styles'); // Remove theme.json css
}
add_action('wp_enqueue_scripts', 'remove_wp_block_library_css', 100);


function add_admin_link($items, $args)
{
    if (is_user_logged_in()) {
        if ($args->theme_location == 'wp_planty_main_menu') {
            $items = $items . '<li id="admin"><a class="menu-items admin" title="Admin" href="' . admin_url() . '" target="_blank">Admin</a></li>';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
