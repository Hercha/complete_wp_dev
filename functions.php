<?php

add_action('customize_register', 'initiate_customizer');

function initiate_customizer($wp_customize) {
    
//    $wp_customize->add_panel();
//    $wp_customize->remove_panel();
//    $wp_customize->get_panel();
//    
//    $wp_customize->add_section();
//    $wp_customize->remove_section();
//    $wp_customize->get_section();
//    
//    $wp_customize->add_control();
//    $wp_customize->remove_control();
//    $wp_customize->get_control();
//    
//    $wp_customize->add_setting();
//    $wp_customize->remove_setting();
//    $wp_customize->get_setting();
    $wp_customize->remove_section('title_tagline');
    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('header_image');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('custom_css');
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('nav');
}

add_action('init', 'create_rockband_post_type');

function create_rockband_post_type() {
    register_post_type('cpt',
        array(
            'labels'        =>  array(
            'name'          =>  __('Rock band'),
            'singular_name' =>  __('Rock bands')
            ),
            'public'        =>  true,
            'has_archive'   =>  true,
            'taxonomies'    =>  array('category', 'post_tag'),
            'supports'      =>  array('custom-fields', 'thumbnail', 'editor')
        )
    );
}

add_action('init', 'create_concerthall_post_type');

function create_concerthall_post_type() {
    
    set_post_thumbnail_size(300,300);
    
    register_post_type('concerthall',
        array(
            'labels'        =>  array(
            'name'          =>  __('Concert Hall'),
            'singular_name' =>  __('Concert Halls')
            ),
            'public'        =>  true,
            'has_archive'   =>  true,
            'supports'      =>  array('custom-fields', 'thumbnail', 'editor')
        )
    );
}

function submenus() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") .
    "://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js", false, null);
    wp_enqueue_script('script-name', get_template_directory_uri() . '/js/submenus.js',
    array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'submenus');

//function submenus() {
//   wp_deregister_script('jquery');
//   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js", false, null);
//   wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/submenus.js', array('jquery'), '1.0.0', true );
//}
//add_action( 'wp_enqueue_scripts', 'submenus' );

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