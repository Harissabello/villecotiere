<?php
/**
 * Child-Theme functions and definitions
 */

function unitravel_child_scripts() {
    wp_enqueue_style( 'unitravel-parent-style', get_template_directory_uri(). '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'unitravel_child_scripts' );
?>