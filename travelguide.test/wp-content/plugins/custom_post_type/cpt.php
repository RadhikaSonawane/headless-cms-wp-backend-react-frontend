<?php
/**
 * Plugin Name: Travel Lovers
 * Plugin URI: http://yoursite.com
 * Description: A simple plugin that adds custom post types, taxonomies
 * Version: 0.1
 * Author: Radhika Sonawane
 * Author URI: http://yoursite.com
 * License: GPL2
 */

/*  Copyright 2019  Radhika  (email : sach.radhika@gmail.com)
*/



require( plugin_dir_path( __FILE__ ) . '/advace-custom-post-type.php');
require( plugin_dir_path( __FILE__ ) . '/contact-form-code.php');
require( plugin_dir_path( __FILE__ ) . '/taxonomies/custom-taxonomies.php');
require( plugin_dir_path( __FILE__ ) . '/menu-endpoint/wp-rest-api-menu.php');
require( plugin_dir_path( __FILE__ ) . '/menu-endpoint/wp-rest-api-footer-menu.php');
require( plugin_dir_path( __FILE__ ) . '/admin-nav-menu-slug.php');
require( plugin_dir_path( __FILE__ ) . '/admin-setting-endpoint-for-address.php');
?>
