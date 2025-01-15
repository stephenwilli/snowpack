<?php 
function snowpack_scripts() {
  wp_enqueue_style( 'snowpack-style', get_template_directory_uri() . '/prod/scripts.css');
  wp_enqueue_style( 'snowpack-script', get_template_directory_uri() . '/prod/scripts.js');
}

add_action( 'wp_enqueue_scripts', 'snowpack_scripts' );