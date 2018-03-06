<?php
/**
 * Home extra meta.
 *
 * @since   1.0.0
 * @package GreaterJacksonHabitatTheme2018
 * @subpackage  GreaterJacksonHabitatTheme2018/library/admin/extra-meta
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

add_action( 'init', 'greater_jackson_habitat_remove_home_supports' );
add_action( 'do_meta_boxes', 'greater_jackson_habitat_remove_home_metaboxes' );
add_action( 'add_meta_boxes', 'greater_jackson_habitat_add_home_metaboxes' );

/**
 * Determine if we're editing the Home Page
 * 
 * @since       1.0.0
 * @return      boolean Whether we're editing the Home Page or not
 */
function greater_jackson_habitat_is_editing_home() {
    
    if ( is_admin() && 
        isset( $_REQUEST['post'] ) && 
        $_REQUEST['post'] == get_option( 'page_on_front' ) ) {
        return true;
    }
    
    return false;
    
}

/**
 * Remove Supports from the Home Page
 * 
 * @since       1.0.0
 * @return      void
 */
function greater_jackson_habitat_remove_home_supports() {
    
    if ( greater_jackson_habitat_is_editing_home() ) {

        //remove_post_type_support( 'page', 'thumbnail' );
        
    }
    
}

/**
 * Needs to be called at do_meta_boxes since it is created at a different time than Supports Metaboxes
 * 
 * @since       1.0.0
 * @return      void
 */
function greater_jackson_habitat_remove_home_metaboxes() {
    
    if ( greater_jackson_habitat_is_editing_home() ) {
    
        // "Attributes" Meta Box
        remove_meta_box( 'pageparentdiv', 'page', 'side' );
        
    }
    
}

/**
 * Create Metaboxes for the Home Page
 * 
 * @since       1.0.0
 * @return      void
 */
function greater_jackson_habitat_add_home_metaboxes() {
    
    if ( greater_jackson_habitat_is_editing_home() ) {
        
    }
    
}