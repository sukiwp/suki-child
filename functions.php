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
 * Enqueue Child Theme CSS.
 * Attached on 'wp_enqueue_scripts' hook with priority set to 20 to make sure all parent theme CSS has been loaded first.
 * Comment out the block below if you don't have additional CSS on style.css.
 */
function suki_child_enqueue_styles() {
	wp_enqueue_style( 'suki-child', get_stylesheet_directory_uri() . '/style.css', array( 'suki' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'suki_child_enqueue_styles', 20 );