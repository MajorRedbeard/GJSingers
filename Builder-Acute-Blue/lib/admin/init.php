<?php
/**
 *	Builder Child Admin Init
 *
 *	@package Builder
 *	@subpackage	BuilderChild-Acute-Blue
 *	@since 1.0.0
*/

// require files within the admin folder
require_once( dirname( __FILE__ ) . '/settings.php' );

// For the settings page.
if ( function_exists( 'builder_child_libraries_loaded' ) ) {
	add_action( 'it_libraries_loaded', 'builder_child_libraries_loaded' );
}
if ( function_exists( 'builder_child_settings_defaults' ) ) {
	add_filter( 'builder_filter_default_settings', 'builder_child_settings_defaults' );
}