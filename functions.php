<?php
/*wp_enqueue_style( 'slider', get_template_directory_uri() . '/veci/dist/style.css', false, '1.1', 'all');*/

function add_menu_link_class($atts, $item, $args) {
    $atts['class'] = 'nav-item';
    return $atts;
}

function remove_menu_classes($classes, $item, $args) {
    return array();
}
add_filter('nav_menu_css_class', 'remove_menu_classes', 10, 3);

function remove_menu_item_id($id, $item, $args) {
    return "";
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);

function remove_menu_div($menu) {
    return preg_replace('/^<div[^>]*>/', '', $menu);
}
add_filter('wp_nav_menu', 'remove_menu_div');