<?php 
/**
 * Plugin Name: Button Click Register
 * Description: add a button that register Clicks with shortcode [lc_button_click_register]
 * Plugin URI:  https://github.com/lucassdantas/wpButtonClickRegister.git
 * Version:     1.0.0
 * Author:      Lucas Dantas
 * Author URI:  linkedin.com/in/lucas-de-sousa-dantas/
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if(!function_exists('add_action')){
    die;
}
function button_click_register(){
	
}
add_shortcode('lc_button_click_register', 'button_click_register');