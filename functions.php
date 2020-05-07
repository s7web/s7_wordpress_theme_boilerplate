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

    add_image_size( 'my-custom-size', 220, 180, true );
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//funtion for registering CSS files included bootstrap 4.4

function load_css(){
    
    //register styles
    $css_library = get_option('css_library');
    if( $css_library === 'materialize' ) {
        wp_register_style( 'materializecss', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0', 'all' );
        wp_register_style( 'materializecss-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'materializecss' );
        wp_enqueue_style( 'materializecss-icons' );
    } else {
        wp_register_style( 'bootstrapmin', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
        wp_enqueue_style( 'bootstrapmin' );
    }
   
    wp_register_style( 'customcss', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all' );
        //wp_register_style( 'bootstraptheme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.3.7', 'all' );
    
    //enqueue registerd styles
   
    wp_enqueue_style( 'customcss' );
}

add_action('wp_enqueue_scripts', 'load_css');

//function for registering JS

function load_js(){

    //enqueue jquery script before all
    wp_enqueue_script( 'jquery');

    //register script
    $css_library = get_option('css_library');
    if( $css_library === 'materialize' ) {
        wp_register_script( 'materializejs', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', 'jquery', '1.0.0', true );
        wp_enqueue_script( 'materializejs');
     
    } else {
        wp_register_script( 'popperjs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', 'jquery', '1.16.0', true );
        wp_register_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), false, true );
        wp_enqueue_script( 'popperjs');
        wp_enqueue_script( 'bootstrapjs');
    }
  
    wp_register_script( 'customjs', get_template_directory_uri() . '/js/custom.js', array(), false, true );

    //enqueue registered scripts

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
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
add_theme_support( 'custom-logo', array(
    'height'      => 150,
    'width'       => 150,
    'flex-width'  => true,
    'flex-height' => true,
) );

/**
 * ADMIN PAGE SETUP
 */
require_once get_template_directory() . '/inc/functions/admin-setup.php';
require_once get_template_directory() . '/inc/functions/functions-admin.php';

/* HELPERS */
require_once get_template_directory() . '/inc/functions/helpers.php';

/* LIBRARY SETUP FOR CUSTOMIZER REPEATER FIELDS */
include_once get_theme_file_path( 'inc/class-kirki-installer-section.php' );


/*  CUSTOMIZERS */
require_once get_template_directory() . '/inc/customizer/header-panel.php';
