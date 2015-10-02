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

/* Add the theme customizer, and add a Site Logo to call anywhere. */
function wm_theme_customizer( $wp_customize ) {
$wp_customize->add_section( 'wm_header_section' , array(
    'title'       => __( 'Header', 'wm' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
$wp_customize->add_setting( 'wm_logo' );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wm_logo', array(
    'label'    => __( 'Logo', 'wm' ),
    'section'  => 'wm_header_section',
    'settings' => 'wm_logo',
) ) );

$wp_customize->add_setting( 'wm_logo_width' );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wm_logo_width', array(
    'label'    => __( 'Logo', 'wm' ),
    'section'  => 'wm_header_section',
    'settings' => 'wm_logo_width',
	'type' => 'text'
	'' => ''
) ) );

$wp_customize->add_setting( 'show-title' );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'show-title', array(
    'label'    => __( 'Show title?', 'wm' ),
	'type'     => 'checkbox',
    'section'  => 'wm_header_section',
    'settings' => 'show-title',
) ) );
}
add_action( 'customize_register', 'wm_theme_customizer' );
