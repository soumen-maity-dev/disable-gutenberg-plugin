# Disable Gutenberg by Soumen
A lightweight WordPress plugin that completely disables the Gutenberg block editor, block-based widgets, Full Site Editing (FSE), and related block styles — restoring the classic editor experience across your entire website.

This plugin is ideal for websites that prefer the classic editing workflow or want to avoid block-based interfaces entirely.

## 🚀 Features
- Disables Gutenberg editor for all post types  
- Disables the Gutenberg plugin (if installed)  
- Disables block-based widgets  
- Disables Full Site Editing (FSE) support  
- Removes Gutenberg block styles from the frontend (faster loading)  
- Zero configuration — activate and done  
- Clean, secure, and lightweight code  

## 🛠 Installation
1. Download or clone this repository.  
2. Upload the plugin folder to `/wp-content/plugins/`.  
3. Activate **Disable Gutenberg by Soumen** from **WordPress Admin → Plugins**.  
4. Your site now uses the Classic Editor everywhere.

## 📌 Plugin Code (Main File)

```php
add_filter( 'use_block_editor_for_post', '__return_false', 10 );
add_filter( 'use_block_editor_for_post_type', '__return_false', 10 );

add_filter( 'gutenberg_can_edit_post', '__return_false', 10 );
add_filter( 'gutenberg_can_edit_post_type', '__return_false', 10 );

add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'after_setup_theme', function () {
    remove_theme_support( 'block-templates' );
} );

add_action( 'wp_enqueue_scripts', function () {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
}, 20 );
