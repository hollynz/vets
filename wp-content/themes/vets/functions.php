<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );

/** Customization */

/** Custom post types */
require_once( 'library/custom-post-types.php' );

/** Custom post types */
require_once( 'library/custom-meta-boxes.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

function vets_widgets_init() {
    // add testimonials section to home page
    register_sidebar(
        array(
            'name'          => __( 'Home Testimonials', 'vets' ),
            'id'            => 'home-testimonials',
            'description'   => __( 'Testimonials section on the home page.', 'vets' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s grid-container">',
            'after_widget'  => '</div>',
            // 'before_title'  => '<h2 class="vets-heading-size-small">',
            // 'after_title'   => '</h2>',
        )
    );

}
add_action( 'widgets_init', 'vets_widgets_init' );

if ( !function_exists('vets_setup')) :
    function vets_setup()
    {
        //add theme support

        // add_theme_support( 'customize-selective-refresh-widgets' );

        //register menus
        register_nav_menus(array(
            'healthcare-menu' => __('Healthcare'),
            'surgical-menu' => __('Surgical'),
            'wellbeing-menu' => __('Wellbeing')
            // 'footer-menu' => __('Footer'),
            // 'social-menu' => __('Social'),
        ));

        //set the permalink structure
        // global $wp_rewrite;
        // $wp_rewrite->set_permalink_structure('/%postname%/');

    }

endif;
add_action('after_setup_theme', 'vets_setup');

