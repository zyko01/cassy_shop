<?php 

function Wordpress_resources(){

    wp_enqueue_style('style', get_stylesheet_uri());
}
    add_action('wp_enqueue_scripts', 'Wordpress_resources');

function wordpress_setup(){
    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
}

add_theme_support('menus');


?>
