<?php

//Use use_widgets_block_editor filter to disable it. You can place following code in your theme functions.php file or your plugin.

add_filter( 'use_widgets_block_editor', '__return_false' );


//Use following code in functions.php of your theme to declare that your theme doesn't support the new widget editor system.

remove_theme_support( 'widgets-block-editor' );

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );