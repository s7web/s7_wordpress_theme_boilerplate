
<?php
/*
 * S7design sanitize checkbox function
 */
function S7design_sanitize_checkbox( $checked ) {

    // Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );

}