<?php

// Helpers.
require_once get_template_directory() . '/functions/helpers.php';

// Admin setup.
require_once get_template_directory() . '/functions/admin/admin-setup.php';
require_once get_template_directory() . '/functions/admin/admin-styles.php';
require_once get_template_directory() . '/functions/admin/admin-scripts.php';

// Theme setup.
include_once get_template_directory() . '/functions/theme/theme-setup.php';
include_once  get_template_directory() . '/functions/theme/theme-styles.php';
include_once  get_template_directory() . '/functions/theme/theme-scripts.php';


require_once get_template_directory() . '/functions/widgets.php';


/* 
 Auto-install and activate necessery plugins
*/
require_once( get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/inc/tgm/plugins.php' );

/* ACTIVATE KIRKI PLUGIN FOR CUSTOMIZER FIELDS */
require_once( get_template_directory() . '/inc/class-kirki-installer-section.php' );


/* LIBRARY SETUP FOR CUSTOMIZER REPEATER FIELDS */
include_once get_theme_file_path( 'inc/class-kirki-installer-section.php' );


/*  CUSTOMIZERS */
require_once get_template_directory() . '/inc/customizer/header-panel.php';

/*  CUSTOM POST TYPES */
//require_once get_template_directory() . '/inc/posttypes/product-post-type.php';

/*  META BOX FIELDS */
require_once get_template_directory() . '/inc/metaboxes/repeater-fields.php';
require_once get_template_directory() . '/inc/metaboxes/upload-image-example-1.php';