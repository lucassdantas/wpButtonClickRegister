<?php 

add_action('wp_footer', 'button_click_script');
function button_click_script(){
    wp_register_script( 
        'button_click_register_script', 
        plugins_url('/assets/buttonClickRegister.js', plugin_dir_path(__FILE__)), 
        array('jquery')
    );

    wp_enqueue_script( 'button_click_register_script' );

    wp_localize_script( 
        'button_click_register_script', 
        'ajaxUrlFromBackEnd', 
        array(admin_url('admin-ajax.php')) 
    ); 
}