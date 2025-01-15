<?php 
function snowpack_scripts() {
  wp_enqueue_style( 'snowpack-style', get_template_directory_uri() . '/dist/main.css');
  wp_enqueue_style( 'snowpack-script', get_template_directory_uri() . '/dist/main.js');
}

add_action( 'wp_enqueue_scripts', 'snowpack_scripts' );

// Disallow file edit
define( 'DISALLOW_FILE_EDIT', true );