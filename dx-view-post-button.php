<?php
/**
 * Plugin Name: DX View Post Button
 * Plugin URI:  http://devrix.com/
 * Description: Restores `View Post` Button in the Edit Post
 * Version:     1.0.0
 * Author:      DevriX
 * Author URI:  http://devrix.com/
 * Tags: Button, Post, Edit
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if( ! class_exists( 'DX_View_Post_Button' ) ):
	
/**
 * Class : DX_View_Post_Button
 *
 * @since  1.0.0
 * @access public
 */
class DX_View_Post_Button {

	public function __construct() {
		 add_action( 'admin_enqueue_scripts', array( $this, 'return_view_post_edit_screen' ) );
	}
	
	public function return_view_post_edit_screen( $admin_hook ) {
 		if ( 'post.php' === $admin_hook 
 				&& ! empty( $_GET['action'] ) 
 				&& 'edit' === $_GET['action'] ) {
 			wp_enqueue_script( 'view-poster', plugins_url( '/assets/js/view-post-helper.js' , __FILE__ ), array( 'jquery' ) );
 		}
 	}
}

new DX_View_Post_Button;
endif;