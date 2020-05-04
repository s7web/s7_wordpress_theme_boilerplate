<?php
/* 
@package s7_theme

==============================
ADMIN PAGE
==============================

*/

function s7_theme_add_admin_page() {
    // Generate S7 Options page
    add_menu_page('S7 Theme Options' , 'S7 Theme' , 'manage_options', 's7options',  's7_theme_create_page','', 3);
   
    // Generate S7 Options Submenu Pages
    add_submenu_page('s7options', 'S7 Theme Options', 'Settings','manage_options', 's7options', 's7_theme_create_page');
    add_submenu_page('s7options', 'S7 CSS Options', 'CSS options','manage_options', 's7options_settings_css', 's7options_settings_css');
}

add_action('admin_menu', 's7_theme_add_admin_page');

function s7_theme_create_page() {
  require_once( get_template_directory() . '/inc/templates/admin/s7options-admin.php');
}

function s7options_settings_css() {
   echo "<h1>CSS Options</h1>";
}