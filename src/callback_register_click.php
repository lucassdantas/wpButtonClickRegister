<?php
add_action( 'wp_ajax_register_click', 'callback_register_click' );
add_action( 'wp_ajax_nopriv_register_click', 'callback_register_click' );

function callback_register_click(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'lc_button_clicks';

    $_REQUEST['clickMoment'];
    echo $_REQUEST['clickMoment'];

}