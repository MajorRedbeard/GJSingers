<?php
/**
 * Core functions and functionality for BuilderChild-Acute-Blue
 *
 * @package Builder
 * @subpackage BuilderChild-Acute-Blue
 * @since See each function
*/

// Tell the main theme that a child theme is running. Do not remove this.
$GLOBALS['builder_child_theme_loaded'] = true;

// Load translations
load_theme_textdomain( 'it-l10n-Builder-Acute-Blue', get_stylesheet_directory() . '/lang' );

locate_template( '/lib/admin/settings.php', true );
locate_template( '/lib/structure/alternate-modules.php', true );
locate_template( '/lib/structure/pagination.php', true );

// Add Builder 3.0 Support
add_theme_support( 'builder-3.0' );
add_theme_support( 'builder-responsive' );
add_theme_support( 'builder-full-width-modules' );

// add theme support for post formats
add_theme_support( 'post-formats', array( 'gallery' ) );