<?php 
/**
 * Plugin Name: Button Click Register
 * Description: add a button that register Clicks with shortcode [lc_button_click_register]
 * Plugin URI:  https://github.com/lucassdantas/wpButtonClickRegister.git
 * Version:     1.0.0
 * Author:      Lucas Dantas
 * Author URI:  linkedin.com/in/lucas-de-sousa-dantas/
 */

 if ( ! defined( 'ABSPATH' ) ||  !function_exists('add_action')) {
	exit;
}


register_activation_hook( __FILE__, 'onPluginActivation' );
function onPluginActivation() {
    create_clicks_register_table();
}
function create_clicks_register_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'lc_button_clicks';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		click_time varchar(255)  NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );
    
}


add_shortcode('lc_button_click_register', 'button_click_register');
function button_click_register(){
    echo "<a class='lc_button_click_register'>Botão de registro</a>";
}


require_once plugin_dir_path(__FILE__) . 'src/button_click_add_script.php';
require_once plugin_dir_path(__FILE__) . 'src/callback_register_click.php';

