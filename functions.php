<?php 

 function add_theme_features_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
 }

 add_action('after_setup_theme','add_theme_features_support');

// register assets i.e css and js files
function register_assets(){

    wp_enqueue_script("script",get_template_directory_uri(). "/assets/js/app.js",[],time(),true);

    wp_enqueue_style('my-css',get_template_directory_uri(). "/style.css",[],time(),'all');
    wp_enqueue_style('tailwind-css',get_template_directory_uri(). "/tailwind.css",[],time(),'all');
}

add_action('wp_enqueue_scripts','register_assets');
  
function register_menus(){
    $location=[
        'primary' => 'Desktop Menu Item',
    ];
    register_nav_menus($location);
}
add_action('init','register_menus');

?>