<?php
/*
Plugin Name:        GB3
Plugin URI:         https://github.com/bryanwillis/genesis-bootstrap/
Description:        Add Bootstrap 3 to Genesis Theme
Version:            1.0.0
Author:             bryanwillis
Author URI:         https://github.com/bryanwillis/
License:            MIT License
License URI:        http://opensource.org/licenses/MIT
*/




function bsg_load_lib_files() {
  global $_wp_theme_features;
  foreach (glob(__DIR__ . '/lib/*.php') as $file) {
    $feature = 'bsg-' . basename($file, '.php');
    if (isset($_wp_theme_features[$feature])) {
      require_once $file;
    }
  }
}
add_action( 'genesis_setup', 'bsg_load_lib_files', 15 );





