<?php
/**
 * Plugin name: My block
 * Plugin URI: https://asdasd.com
 * Description: My block
 * Author: wp_site
 * Author URI: 
 */

 function wpsite_myblock_init(){
	register_block_type_from_metadata(__DIR__);
 }

 add_action('init', 'wpsite_myblock_init' );