<?php
/**
 * Theme setup
 *
 * @package s7design
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


//Register menu placeholder
register_nav_menus( 
    array(

        'top-menu-front-page' => "Top Menu front location",
        'top-menu-global-page' => "Top Menu global location"
    )
);


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