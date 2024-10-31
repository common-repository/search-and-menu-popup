<?php
/**
 * Plugin Gen Functions
 */

 // Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Get unique value number
 */
function rjsmp_get_unique() {
	static $unique = 0;
	$unique++;

	return $unique;
}

function rjsmp_pluginmenu_setup() {
	
	// Uses wp_nav_menu() in two loc
	register_nav_menus( array(
		'rjsmp-popup-menu'    => __( 'Popup Menu', 'search-and-menu-popup' ),		
	) );
	
}	
add_action( 'after_setup_theme', 'rjsmp_pluginmenu_setup' );