<?php

    add_theme_support('post-thumbnails');
    add_image_size('homeslider', 1440, 500, true);
    add_image_size('postformat', 700, 500, true);
    add_theme_support('post-formats',array('image','aside','video'));
function custom_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary Header Navigation');
    register_nav_menu('secondary','Secondary Footer Navigation');
}
/*Theme support function*/
add_action('init','custom_theme_setup');

function change_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="myclass" /',$menu);
    return $menu;
}
add_filter('wp_nav_menu','change_submenu_class');