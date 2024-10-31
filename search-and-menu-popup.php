<?php
/**
 * Plugin Name: Search and Menu Popup
 * Plugin URI: https://wordpress.org/plugins/search-and-menu-popup
 * Text Domain: search-and-menu-popup
 * Description: Display Search OR Menu Popup by Clicking on a Button.
 * Domain Path: /languages/
 * Version: 1.0
 * Author: Rajdip Sinha Roy
 * Author URI: https://rajdip.tech
 * Contributors: Rajdip Sinha Roy
 * Developer: Rajdip Sinha Roy
 * Developer URI: https://rajdip.tech
*/

if( !defined( 'RJSMP_VERSION' ) ) {
	define( 'RJSMP_VERSION', '1.0' ); 
}
if( !defined( 'RJSMP_DIR' ) ) {
    define( 'RJSMP_DIR', dirname( __FILE__ ) );
}
if( !defined( 'RJSMP_URL' ) ) {
    define( 'RJSMP_URL', plugin_dir_url( __FILE__ ));
}
if( !defined( 'RJSMP_PLUGIN_BASENAME' ) ) {
	define( 'RJSMP_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}

/**
 * Ready for translation
 */
add_action('plugins_loaded', 'rjsmp_load_textdomain');
function rjsmp_load_textdomain() {
	load_plugin_textdomain( 'search-and-menu-popup', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}


require_once( RJSMP_DIR .'/includes/rjsmp-functions.php' );
require_once( RJSMP_DIR . '/includes/class-rjsmp-script.php' );

// SHORTCODE
require_once( RJSMP_DIR . '/includes/shortcode/rjsmp-menupopup-shortcode.php' );
require_once( RJSMP_DIR . '/includes/shortcode/rjsmp-searchpopup-shortcode.php' );