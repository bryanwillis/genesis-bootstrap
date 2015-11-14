<?php
/*
Plugin Name:        Bootstrap Genesis 
Plugin URI:         https://github.com/bryanwillis/bootstrap-genesis-addons/
Description:        Add Bootstrap to Genesis Theme via plugin
Version:            1.0.0
Author:             bryanwillis 
Author URI:         https://github.com/bryanwillis/
License:            MIT License
License URI:        http://opensource.org/licenses/MIT
*/


function gb3_custom_theme_support() {

$bsg_add_theme_support = array(
                        'bsg-add-head-markup',
                        'bsg-bootstrap-markup',
                        'bsg-bootstrap-walker',
                        'bsg-comment-form',
                        'bsg-custom-css-js',
                        'bsg-customizer',
                        'bsg-footer-creds',
                        'bsg-genesis-setup',
                        'bsg-image-display',
                        'bsg-load-assets',
                        'bsg-nav',
                        'bsg-pagination',
                        'bsg-post-content-nav',
                        'bsg-search-form',
                        'bsg-skip-to-main-content',
                        'bsg-jumbotron',
                        'bsg-widget-grid-classes',

    );
    
    foreach ( $bsg_add_theme_support as $bsg_support ) {
	           add_theme_support( $bsg_support );
    } 

}

add_action('after_setup_theme', 'gb3_custom_theme_support');



function bsg_load_lib_files() {
  global $_wp_theme_features;
  foreach (glob(__DIR__ . '/lib/*.php') as $file) {
    $feature = 'bsg-' . basename($file, '.php');
    if (isset($_wp_theme_features[$feature])) {
      require_once $file;
    }
  }
}
add_action('after_setup_theme', 'bsg_load_lib_files', 100);






