<?php

// Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Add featured image sizes
add_image_size( 'bsg-featured-image', 1170, 630, true );

// Add .container wrap classes
add_filter( 'genesis_attr_structural-wrap', 'bsg_attributes_structural_wrap' );
function bsg_attributes_structural_wrap( $attributes ) {
    $attributes['class'] = 'container';
    return $attributes;
}

add_theme_support( 'genesis-structural-wraps', array(
        'nav',
        'subnav',
        'jumbotron-inner',
        'site-inner',
        'footer'
) );

// Remove item(s) from genesis admin screens
add_action( 'genesis_admin_before_metaboxes', 'bsg_remove_genesis_theme_metaboxes' );

// Remove item(s) from genesis customizer
add_action( 'customize_register', 'bsg_remove_genesis_customizer_controls', 20 );



/**
 * Remove selected Genesis metaboxes from the Theme Settings and SEO Settings pages.
 *
 * @param string $hook The unique pagehook for the Genesis settings page
 */

function bsg_remove_genesis_theme_metaboxes( $hook ) {
    /** Theme Settings metaboxes */
    //remove_meta_box( 'genesis-theme-settings-version',  $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-feeds',    $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-layout',   $hook, 'main' );
    remove_meta_box( 'genesis-theme-settings-header',   $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-nav',      $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-breadcrumb', $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-comments', $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-posts',    $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-blogpage', $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-scripts',  $hook, 'main' );

    /** SEO Settings metaboxes */
    //remove_meta_box( 'genesis-seo-settings-doctitle',   $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-homepage',   $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-dochead',    $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-robots',     $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-archives',   $hook, 'main' );
}



/**
 * Filter to remove selected Genesis Customizer Menu controls
 *
 * @param instance of WP_Customize_Manager $wp_customize
 */
function bsg_remove_genesis_customizer_controls( $wp_customize ) {
    // remove Site Title/Logo: Dynamic Text or Image Logo option from Customizer
    $wp_customize->remove_control( 'blog_title' );
    return $wp_customize;
}



/* Remove Genesis Page Templates
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/remove-genesis-page-templates
 *
 * @param array $page_templates
 * @return array
 */
function bsg_be_remove_genesis_page_templates( $page_templates ) {
	unset( $page_templates['page_archive.php'] );
	unset( $page_templates['page_blog.php'] );
	return $page_templates;
}
add_filter( 'theme_page_templates', 'bsg_be_remove_genesis_page_templates' );

