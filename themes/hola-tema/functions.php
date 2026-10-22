<?php
/**
 * Funciones del tema.
 *
 * @package hola-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configura las funciones básicas del tema.
 */
function ht_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'ht_setup' );

/**
 * Carga la hoja de estilos del tema.
 */
function ht_enqueue_assets() {
	wp_enqueue_style( 'hola-tema', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'ht_enqueue_assets' );