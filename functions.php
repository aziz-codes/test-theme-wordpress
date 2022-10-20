<?php 
function register_assets(){

    wp_enqueue_script("script",get_template_directory_uri(). "/assets/js/app.js",[],time(),true);
}
add_action('wp_enqueue_scripts','register_assets');
?>