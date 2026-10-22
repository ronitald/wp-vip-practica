<?php
/**
 * Plugin Name: Hola VIP
 * Description: Mu-plugin de práctica para aprender el flujo de VIP.
 */

add_action( 'wp_footer', function () {
	echo '<p style="text-align:center;">Este sitio corre gracias a mi primer mu-plugin de práctica 🎉</p>';
} );

/**
 * Registra la ruta REST de práctica.
 */
function hv_register_rest_routes() {
	register_rest_route(
		'hola-vip/v1',
		'/saludo',
		array(
			'methods'             => WP_REST_Server::READABLE,
			'callback'            => 'hv_rest_saludo',
			'permission_callback' => '__return_true', // Endpoint público de solo lectura.
			'args'                => array(
				'nombre' => array(
					'type'              => 'string',
					'default'           => 'visitante',
					'sanitize_callback' => 'sanitize_text_field',
				),
			),
		)
	);
}
add_action( 'rest_api_init', 'hv_register_rest_routes' );

/**
 * Responde al endpoint de saludo.
 *
 * @param WP_REST_Request $request Petición REST.
 * @return WP_REST_Response
 */
function hv_rest_saludo( WP_REST_Request $request ) {
	return rest_ensure_response(
		array(
			'mensaje' => 'Hola, ' . $request->get_param( 'nombre' ),
		)
	);
}