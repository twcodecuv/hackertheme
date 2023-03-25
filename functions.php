<?php

if( ! function_exists( 'hackertheme_register_nav_menus' ) ) {

    function hackertheme_register_nav_menus(){
        register_nav_menus( array(
            'main_menu' => __('Main Menu', 'text_domain'),
            'second_menu' => __('Code Menu', 'text_domain'),
            'footer_menu' => __('Footer Menu', 'text_domain'),
        ) );
    }
    add_action('after_setup_theme', 'hackertheme_register_nav_menus', 0 );
}
?>