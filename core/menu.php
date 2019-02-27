<?php

//add classes  to menu items
add_filter( 'nav_menu_css_class', 'custom_nav_menu_css_class', 10, 3 );
function custom_nav_menu_css_class( $classes, $item, $args ) {

//add common class to ------main------ menu item
	if ( $args->theme_location == 'main_menu' ) {

//add common class to main menu item
		if ( $item->menu_item_parent == 0 ) {
			array_push( $classes,  'header__item' );
		} else {

//add common class to sub menu item
			array_push( $classes,'header__submenu-item' );
		}


//add class to item if has sub menu
		if (in_array('menu-item-has-children', $classes)){
			array_push( $classes, 'header__submenu-list' );
		} 
	}
	return $classes;
}

//change classes  submenu
add_filter( 'nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3 );
function change_wp_nav_menu( $classes, $args, $depth ) {
	foreach ( $classes as $key => $class ) {
		if ( $class == 'sub-menu' ) {
			$classes[ $key ] = 'header__submenu header__submenu_bg-color';
		}
	}
	return $classes;
}

add_filter( 'nav_menu_link_attributes', 'filter_function_name_3020', 10, 4 );
function filter_function_name_3020( $atts, $item, $args, $depth ){


	if($item->menu_item_parent == 0){
		if (in_array('menu-item-has-children',$item->classes)){
			$atts['class'] = "header__item-link header__item-submenu";
		}else{
			$atts['class'] = "header__item-link";
		}
	}else{
		$atts['class'] = "header__submenu-link header__submenu-link_color-black";
	}
	return $atts;
}