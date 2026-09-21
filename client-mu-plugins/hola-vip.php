<?php
/**
 * Plugin Name: Hola VIP
 * Description: Mu-plugin de práctica para aprender el flujo de VIP.
 */

add_action( 'wp_footer', function () {
	echo '<p style="text-align:center;">Este sitio corre gracias a mi primer mu-plugin de práctica 🎉</p>';
} );