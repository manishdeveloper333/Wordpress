<?php
/*
 * Plugin Name: User Plugin
 * Plugin URI: https://github.com/manishdeveloper333/Wordpress
 * Description: Custom Demo Plugins
 * Author: Manish Srivas
 * Author URI: https://github.com/manishdeveloper333/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_shortcode('demo_plugins' , 'test_function' );

function test_function(){
	echo "Welcome to My Plugin";	
}
?>