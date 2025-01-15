<?php
/*
Plugin Name: Zack Simple Plugin
Description: Creates a custom single page with styles.
Version:     1.0
Author:      Your Name
Author URI:  (Your Website)
*/

function my_single_page_plugin_load_template( $template ) {
    if ( is_page( 'zack-sample-page' ) ) { 
        $plugin_dir = plugin_dir_path( __FILE__ );
        $new_template = $plugin_dir . 'zack-sample-page.php';
        if ( file_exists( $new_template ) ) {
            return $new_template;
        }
    }

    return $template;
}
add_filter( 'template_include', 'my_single_page_plugin_load_template' );

// TODO: new pages on active plugin and delete page on deactive plugin