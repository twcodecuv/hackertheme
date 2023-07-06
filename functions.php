<?php

if( ! function_exists( 'hackertheme_register_nav_menus' ) ) {

    function hackertheme_register_nav_menus(){
        register_nav_menus( array(
            'main_menu' => __('Main Menu', 'text_domain'),
            'second_menu' => __('Code Menu', 'text_domain'),
            'footer_menu' => __('Footer Menu', 'text_domain'),
        ) );
    }
    add_action('after_setup_theme', 'hackertheme_register_nav_menus', 0, );
}

function wdm_register_mobile_menu(){

    add_theme_support('nav-menus ');
    register_nav_menus(array('mobile-menu' => __ ('Mobile', 'wdm') ));
};

add_action ('after_setup_theme', 'wdm_register_mobile_menu');

function hackertheme_custom_logo_setup() {

    $defaults = array (
        'height' => 100,
        'width' =>  400,
        'flex-height' => true,
        'flex-width'  => false,
        'header-text' => array('site-title', 'site-description' ),
    );
    
    add_theme_support('custom-logo' , $defaults  );
    
}
add_action('after_setup_theme', 'hackertheme_custom_logo_setup');

wp_enqueue_script('wpb_togglemenu', get_template_directory_uri() . 'https://cdn3.wpbeginner.com/js/toggle-menu.js' , array ('jquery') , '20160909' , true );



?>

<?php add_theme_support('post-thumbnails'); ?>

<?php global $post; ?>

