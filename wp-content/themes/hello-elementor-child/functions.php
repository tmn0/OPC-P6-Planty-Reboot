<?php
function my_theme_enqueue_styles() {
    $parent_style = 'hello-elementor'; 
    $child_style = 'hello-elementor-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $child_style, get_stylesheet_uri() );	
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu',10,2);
function add_extra_item_to_nav_menu($items) {
    if (is_user_logged_in ()) {
        $items .= '<li id="menu-item-412" class="menu-admin-class"><a href="http://opcr-p6.local/wp-admin/">Admin</a></li>';
    }
    
    return $items;
}
