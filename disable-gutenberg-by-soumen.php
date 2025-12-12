<?php
/**
 * Plugin Name: Disable Gutenberg by Soumen
 * Description: Completely disable the Gutenberg block editor, block widgets, and FSE (Site Editor) for a classic WordPress editing experience.
 * Version:     1.0.0
 * Author:      Soumen Maity
 * Author URI:  https://www.linkedin.com/in/professional-soumen/
 * License:     MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: disable-gutenberg-soumen
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Disable block editor for all post types.
 */

// For core block editor (WordPress 5.0+).
add_filter( 'use_block_editor_for_post', '__return_false', 10 );
add_filter( 'use_block_editor_for_post_type', '__return_false', 10 );

// For sites that still have the standalone Gutenberg plugin active.
add_filter( 'gutenberg_can_edit_post', '__return_false', 10 );
add_filter( 'gutenberg_can_edit_post_type', '__return_false', 10 );

/**
 * Disable block-based widgets.
 */
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

/**
 * Disable Site Editor (FSE) if theme supports block templates.
 * This pushes WP back toward the traditional Appearance > Menus / Widgets flow.
 */
add_action( 'after_setup_theme', function () {
    remove_theme_support( 'block-templates' );
} );

/**
 * (Optional) Stop loading some block editor styles on the frontend.
 * Comment out this block if any theme styles break.
 */
add_action( 'wp_enqueue_scripts', function () {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' ); // WP 5.9+ global styles.
}, 20 );
