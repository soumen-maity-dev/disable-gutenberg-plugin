# Disable Gutenberg by Soumen
A lightweight WordPress plugin that completely disables the Gutenberg block editor, block-based widgets, and FSE (Site Editor), restoring the Classic Editor experience for all post types.

## Features
- Disable Gutenberg block editor (WordPress 5.0+)
- Disable block widgets editor
- Disable Full Site Editing (FSE)
- Prevent Gutenberg plugin from loading (if installed)
- Remove block editor styles for faster frontend performance
- No settings required – activate and done
- Clean, secure, and lightweight code

## Installation
1. Download this plugin as a ZIP.
2. Upload it to `/wp-content/plugins/`.
3. Activate **Disable Gutenberg by Soumen** from WordPress → Plugins.
4. Gutenberg is now fully disabled across your site.

## Code Snippet Example
```php
add_filter( 'use_block_editor_for_post', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );
