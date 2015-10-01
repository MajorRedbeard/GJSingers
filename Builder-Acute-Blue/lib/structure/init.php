<?php
/**
 *	Builder Child Structure Init
 *
 *	@package Builder
 *	@subpackage	BuilderChild-Acute-Blue
 *	@since 1.0.0
*/

// require the files within the structure folder
require_once( dirname( __FILE__ ) . '/full-width-module.php' );
require_once( dirname( __FILE__ ) . '/alternate-modules.php' );
require_once( dirname( __FILE__ ) . '/pagination.php' );

// Adding 
if ( function_exists( 'it_builder_loaded' ) ) { 
	add_action( 'it_libraries_loaded', 'it_builder_loaded' );
}

// Moving classes and width from outer wrapper to inner wrapper
add_filter( 'builder_get_container_width', 'it_set_full_width_container' );
add_filter( 'builder_module_filter_outer_wrapper_attributes', 'it_set_full_width_module' );