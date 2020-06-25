<?php

/**
 * Theme styles
 *
 * @package s7design
 */


function load_css(){
    
    //register styles

    /*************
    * MATERIALIZE
     ************/
        //  wp_register_style( 'materializecss', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0', 'all' );
        //  wp_register_style( 'materializecss-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0', 'all' );
        //  wp_enqueue_style( 'materializecss' );
        //  wp_enqueue_style( 'materializecss-icons' );
        
    /*************
     * BOOTSTRAP
     ************/
    
     /*    wp_register_style( 'bootstrapmin', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
        wp_enqueue_style( 'bootstrapmin' );
      */
   
    wp_register_style( 'customcss', get_template_directory_uri() . '/dist/css/frontend.min.css', array(), '1.0.0', 'all' );
        //wp_register_style( 'bootstraptheme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.3.7', 'all' );
    
    //enqueue registerd styles
   
    wp_enqueue_style( 'customcss' );
   
    
}

add_action('wp_enqueue_scripts', 'load_css');
