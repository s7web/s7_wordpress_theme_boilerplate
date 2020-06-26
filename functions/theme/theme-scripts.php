<?php

/**
 * Theme styles
 *
 * @package s7design
 */

//function for registering JS
function load_js(){

    //enqueue jquery script before all
    wp_enqueue_script( 'jquery');

    //register script

    /*************
    * MATERIALIZE
     ************/
    wp_register_script( 'materializejs', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', 'jquery', '1.0.0', true );
    wp_enqueue_script( 'materializejs');
   


    /*************
     * BOOTSTRAP
     ************/
     
  /*   wp_register_script( 'popperjs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', 'jquery', '1.16.0', true );
    wp_register_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_script( 'popperjs');
    wp_enqueue_script( 'bootstrapjs'); */
    
   
    wp_register_script( 's7design-customjs', get_template_directory_uri() . '/dist/js/frontend-build.js', array(), false, true );

    //enqueue registered scripts

    wp_enqueue_script( 's7design-customjs');


   // THIS FUNCTION AUTOMATICLLY INCLUDE SCRIPT ON THE SPECIFIC PAGE
   // in assets/js create script with prefix 'page-'  and call file as link of page
   //  e.g.   url: /contact-us  , file name : page-contact-us.js   
    getScriptByPage(); // helpers/helpers.php
    

    //disable default jquery
    if(!is_admin()) {
      wp_deregister_script('jquery');
      wp_deregister_script('wp-embed');
     // wp_deregister_script('wp-emoji-release');
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
      // disable gutemberg style on front - optional
    // wp_dequeue_style( 'wp-block-library' ); // WordPress core
    // wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
    }
    
}

add_action('wp_enqueue_scripts', 'load_js');