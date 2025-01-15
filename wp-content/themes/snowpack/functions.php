<?php 
function snowpack_scripts() {
  wp_enqueue_style( 'snowpack-style', get_template_directory_uri() . '/prod/scripts.css.map', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'snowpack-script', get_template_directory_uri() . '/prod/scripts.js.map', array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'snowpack_scripts' );