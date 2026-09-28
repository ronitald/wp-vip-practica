<?php
function practica_vip_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array( 'primary' => 'Menú principal' ) );
}
add_action( 'after_setup_theme', 'practica_vip_setup' );

function practica_vip_styles() {
	wp_enqueue_style( 'practica-vip-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'practica_vip_styles' );