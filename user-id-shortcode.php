<?php
/**
* Plugin Name: User ID Shortcode
* Plugin URI: https://github..com/bappi/user-id-shortcode
* Description: This plugin shows the current user ID with the [user_id] shortcode. 
* Version: 1.0
* Author: Bappi
* Author URI: https://bappi.blog
* License: 
* Text Domain: 
* Domain Path: 
*/

// Short code [user_id]

add_shortcode( 'user_id', 'get_current_user_id_func' );
function get_current_user_id_func( $atts ) {
    if ( ! function_exists( 'wp_get_current_user' ) ) {
        return 0;
    }
    $user = wp_get_current_user();
    return ( isset( $user->ID ) ? (int) $user->ID : 0 );
    
    // To generate unique id: (delete line 21 & 22 and uncomment line 25,26,27 &28)
    // $user = wp_get_current_user();
    // $uuid36 = wp_generate_uuid4();             
    // $uuid32 = str_replace( '-', '', $uuid36 );
    // return ( isset( $user->ID ) ? (int) $uuid32 : 0 );
}
?>
