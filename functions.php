<?php

// Helpers.
require_once get_template_directory() . '/functions/helpers/helpers.php';

// Admin setup.
require_once get_template_directory() . '/functions/admin/admin-setup.php';
require_once get_template_directory() . '/functions/admin/admin-styles.php';
require_once get_template_directory() . '/functions/admin/admin-scripts.php';

// Theme setup.
include_once get_template_directory() . '/functions/theme/theme-setup.php';
include_once  get_template_directory() . '/functions/theme/theme-styles.php';
include_once  get_template_directory() . '/functions/theme/theme-scripts.php';


/* 
 Auto-install and activate necessery plugins 
*/
/* 
require_once( get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/inc/tgm/plugins.php' );
 */


/* ACTIVATE KIRKI PLUGIN FOR CUSTOMIZER FIELDS */
require_once( get_template_directory() . '/inc/class-kirki-installer-section.php' );


/*  CUSTOMIZERS */
require_once get_template_directory() . '/inc/customizer/header-panel.php';

/*  CUSTOM POST TYPES */
//require_once get_template_directory() . '/inc/posttypes/product-post-type.php';

/*  META BOX FIELDS */
require_once get_template_directory() . '/inc/metaboxes/repeater-fields.php';
require_once get_template_directory() . '/inc/metaboxes/upload-media-example.php';

/* 
 * Jovana had a conflict with this function when she installed "Contact Form 7" plugin.   
*/
//require_once get_template_directory() . '/inc/metaboxes/upload-image-example.php';