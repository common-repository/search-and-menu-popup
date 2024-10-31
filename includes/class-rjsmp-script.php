<?php
/**
 * Script and style func
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Rjsmp_Script {

	function __construct() {

		// Action Front Side
		add_action( 'wp_enqueue_scripts', array($this, 'rjsmp_front_style') );		
		
		// Action Front Side
		add_action( 'wp_enqueue_scripts', array($this, 'rjsmp_plugin_script') );		
		
	}
	
	/**
	 * Function Front Side
	 */
	function rjsmp_front_style() {		

		// Reg & enq button with css
		wp_register_style( 'rjsmp-public-style', RJSMP_URL.'assets/css/rjsmp-public-style.css', array(), RJSMP_VERSION );
		wp_enqueue_style( 'rjsmp-public-style' );

	}
	
	/**
	 * Function Front Side
	 */
	function rjsmp_plugin_script() {			
		
		if( !wp_script_is( 'jquery-custombox-legacy', 'registered' ) ) {
			wp_register_script( 'jquery-custombox-legacy', RJSMP_URL.'assets/js/custombox.legacy.min.js', array('jquery'), RJSMP_VERSION, true );	
		}	
		if( !wp_script_is( 'jquery-custombox', 'registered' ) ) {
			wp_register_script( 'jquery-custombox', RJSMP_URL.'assets/js/custombox.min.js', array('jquery'), RJSMP_VERSION, true );
		}		
		
	}	
}

$rjsmp_script = new Rjsmp_Script();