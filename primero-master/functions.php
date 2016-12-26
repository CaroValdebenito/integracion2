<?php
function los_scripts() {
wp_register_script( 'script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery'), '3.3.7', true );
wp_register_script( 'script-otracosa', get_template_directory_uri() . '/js/otra-cosa.min.js', array( 'jquery'), '3.3.7+1', true );
wp_enqueue_script( 'script-bootstrap' );
wp_enqueue_script( 'script-otracosa' );
}

add_action( 'wp_enqueue_scripts', 'los_scripts' );

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}

?>
