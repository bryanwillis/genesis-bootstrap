<?php

// replace style.css - Theme Information (no css)
// with css/style.min.css -  Compressed CSS for Theme

remove_action( 'genesis_meta', 'genesis_load_stylesheet' );

function bsg_enqueue_css_js() {

    // wp_register_style( $handle, $src, $deps, $ver, $media );
    wp_register_style( 'bsg-combined-css', plugins_url('bootstrap/css/style.min.css', __DIR__), array(), '3.3.5' );

    // wp_register_script( $handle, $src, $deps, $ver, $in_footer );
    wp_register_script( 'bsg-combined-js', plugins_url('bootstrap/js/javascript.min.js', __DIR__), array('jquery'), '3.3.5', true );


    wp_enqueue_style( 'bsg-combined-css' );
    wp_enqueue_script( 'bsg-combined-js' );

}
add_action( 'wp_enqueue_scripts', 'bsg_enqueue_css_js' );
