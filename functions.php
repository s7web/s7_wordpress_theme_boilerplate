<?php
/**
 * Functions for theme
 *
 * @package S7design
 */
add_action( 'after_setup_theme', 's7design_theme_setup' );

/**
 * Set up theme
 *
 * @return void
 */
function s7design_theme_setup() {


}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//funtion for registering CSS files included bootstrap 4.4

function load_css(){

    //register styles
    wp_register_style( 'bootstrapmin', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
    wp_register_style( 'customcss', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all' );
        //wp_register_style( 'bootstraptheme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.3.7', 'all' );
    
    //enqueue registerd styles
    wp_enqueue_style( 'bootstrapmin' );
    wp_enqueue_style( 'customcss' );
}

add_action('wp_enqueue_scripts', 'load_css');

//function for registering JS

function load_js(){

    //enqueue jquery script before all
    wp_enqueue_script( 'jquery');

    //register script
    wp_register_script( 'popperjs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', 'jquery', '1.16.0', true );
    wp_register_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), false, true );
    wp_register_script( 'customjs', get_template_directory_uri() . '/js/custom.js', array(), false, true );

    //enqueue registered scripts
    wp_enqueue_script( 'popperjs');
    wp_enqueue_script( 'bootstrapjs');
    wp_enqueue_script( 'customjs');
}

add_action('wp_enqueue_scripts', 'load_js');

//Register menu placeholder

register_nav_menus( 
    
    array(

        'top-menu-front-page' => "Top Menu front location",
        'top-menu-global-page' => "Top Menu global location",

    )

);

//Add theme support

//add theme support for display Menu
add_theme_support( 'menus');
//add theme support for title tag
add_theme_support( 'title-tag' );
//add theme support for post thumbnails
add_theme_support( 'post-thumbnails');
//add theme support for widgets
add_theme_support( 'widgets');
//add theme support for Yoast plugin
add_theme_support( 'yoast-seo-breadcrumbs' );

/**
 * ADMIN PAGE SETUP
 */
require_once get_template_directory() . '/inc/functions/functions-admin.php';

include_once get_theme_file_path( 'inc/class-kirki-installer-section.php' );


require_once get_template_directory() . '/inc/functions/admin-setup.php';
