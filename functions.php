<?php

if(current_user_can('manage_options')) {
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery', 'video', 'image'));
    add_theme_support('menus');
} else {
    add_theme_support('post-formats', array('aside'));
}

register_nav_menus(
    array(
        'header_menu'       => 'Header Menu',
        'footer_menu'       => 'Footer Menu',
        'left_sidebar'      => 'Left Sidebar Menu',
        'header_submenu'    => 'Header Submenu'
    )
);

add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('title-tag');

$html5_support = array('search-form', 'comment-form', 'gallery', 'comment-list', 'caption');

add_theme_support('html5', $html5_support);


function the_current_date() {
    $this_year = date('Y');
    return $this_year;
}