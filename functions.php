<?php
/**
 * Child Theme main functions file.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Suki Child
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * By default, when migrating to Child Theme, your existing configuration on Parent Theme options are not inherited to Child Theme.
 * It's because WordPress treats Parent Theme configuration and Child Theme configuration as separate data.
 *
 * Set the constant to `true` to make this Child Theme inherit Parent Theme configuration data.
 *
 * Only available on Suki v1.0.0 or later version.
 */
if ( ! defined( 'SUKI_CHILD_USE_PARENT_MODS' ) ) {
	define( 'SUKI_CHILD_USE_PARENT_MODS', false );
}

/**
 * Enqueue Child Theme CSS.
 * Attached on 'wp_enqueue_scripts' hook with priority set to 20 to make sure all parent theme CSS has been loaded first.
 *
 * Remove or comment out this block below if you don't have additional CSS on style.css.
 */
function suki_child_enqueue_styles() {
	wp_enqueue_style( 'suki-child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'suki' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'suki_child_enqueue_styles', 20 );