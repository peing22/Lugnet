<?php

// Aktiverar menyer
add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array(
        'main-menu' => 'Huvudmeny'
    ));
}


// Aktiverar möjlighet till dynamisk headerbild
$args = array(
    'width' => 1920,
    'height' => 800,
    'default-image' => get_template_directory_uri() . '/images/glamping.jpg',
    'uploads' => true
);

add_theme_support('custom-header', $args);


// Aktiverar utvald bild
add_theme_support('post-thumbnails');


// Aktiverar widget-area på headerbild
add_action('widgets_init', 'header_widget');

function header_widget()
{
    register_sidebar(array(
        'name' => 'Widget på headerbild',
        'id' => 'header-widget'
    ));
}


// Aktiverar widget-area på startsidan
add_action('widgets_init', 'main_widget');

function main_widget()
{
    register_sidebar(array(
        'name' => 'Widget på startsidan',
        'id' => 'main-widget'
    ));
}


// Aktiverar widget-area i sidopanel
add_action('widgets_init', 'sidebar_widget');

function sidebar_widget()
{
    register_sidebar(array(
        'name' => 'Widget i sidopanel',
        'id' => 'sidebar-widget'
    ));
}


// Avaktiverar kommentarer
add_action('admin_menu', 'remove_menus');

function remove_menus() {
    remove_menu_page('edit-comments.php');
}
