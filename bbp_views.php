<?php
/**
 * @package bbP_Views
 * @version 0.1 beta
 */

/*
Plugin Name: bbP Views
Plugin URI: http://www.wphandcraft.com/plugins/bbp-views/
Description: This plugin adds some of the most-requested views for bbPress
Author: Gautam Gupta
Version: 0.1 beta
Author URI: http://www.wphandcraft.com/
*/

/**
 * Register these bbPress views:
 *  - Popular Topics
 *  - Unpopular Topics
 *
 * Please refer to
 * {@link http://www.wphandcraft.com/creating-custom-views-in-bbpress
 * WPHandcraft.com bbPress Views Tutorial} in case of any difficulties.
 * 
 * @todo Add more!
 *
 * @uses bbp_register_view() To register the view
 */
function wphc_register_custom_views() {
	bbp_register_view( 'popular-topics', __( 'Popular Topics' ), array( 'meta_key' => '_bbp_reply_count', 'orderby' => 'meta_value_num' ), false );
	bbp_register_view( 'unpopular-topics', __( 'Unpopular Topics' ), array( 'meta_key' => '_bbp_reply_count', 'orderby' => 'meta_value_num', 'order' => 'asc' ), false );
}
add_action( 'bbp_register_views', 'wphc_register_custom_views' );

?>
