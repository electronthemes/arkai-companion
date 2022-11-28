<?php
/*
Plugin Name: Arkai Companion Plugin
Plugin URI: 
Description: Companion Plugin for Arkai Theme
Version: 1.0.0
Author: Enamul Haque
Author URI: http://www.enamul.me/
Text Domain: arkai
Domain Path: /languages/
*/

function arkaic_load_text_domain(){
	load_plugin_textdomain('arkai', false, dirname(__FILE__)."/languages");
}
add_action( 'plugins_loaded', 'arkaic_load_text_domain' );


/**
 * 	WIDGETS AREA
 */
include_once( 'widgets/author-bio.php' );
include_once( 'widgets/popular-posts.php' );
include_once( 'widgets/ak-social-profiles.php' );
include_once( 'widgets/ak-recent-post.php' );

/**
*  Custom Posts
*/
include_once( 'custom-posts/portfolio.php' );

/**
*	External Plugins
*/
// if(file_exists(ABSPATH . PLUGINDIR . '/kirki/kirki.php')){
// 	require_once ABSPATH . PLUGINDIR . '/kirki/kirki.php';
// }

//require_once( 'libs/one-click-demo-import/one-click-demo-import.php' );
 
?>