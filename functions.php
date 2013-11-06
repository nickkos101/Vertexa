<?php 

//Autocracy Dependencies

//Widget Dependencies
include 'widgets/centered-text-widget.php'; 

//Theme Supports

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
) );

//Register Sidebar

function vertexa_widgets() {

	if (function_exists("register_sidebar")) {
		register_sidebar(array(
			'name' => 'right-sidebar',
			'before_widget' => '<li>',
			'after_widget' => '</li>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
			));
	}

}

add_action('widgets_init', 'vertexa_widgets');

?>