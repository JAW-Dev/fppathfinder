<?php
/**
 * Plugin Name: Always logged in admin
 */

add_action('init', 'wpc_add_user');
function wpc_add_user() {

	$username = 'localadmin';
	$password = 'password';
	$email = 'example@example.com';

	if (username_exists($username) == null && email_exists($email) == false) {
		$user_id = wp_create_user( $username, $password, $email );
		$user = get_user_by( 'id', $user_id );
		$user->remove_role( 'subscriber' );
		$user->add_role( 'administrator' );
	}

}

 add_action( 'init', 'wpc_programmatic_login' );
 function wpc_programmatic_login() {

	$login = isset( $_GET['login'] ) ? true : false;

	if ( ! $login ) {
		return;
	}

	$username = 'localadmin';
	$user     = wp_get_current_user();

	if ( ! isset( $user->user_login ) && $username !== $user->user_login ) {
		add_filter( 'authenticate', 'allow_programmatic_login', 10, 3 );
		$user = wp_signon( array( 'user_login' => $username ) );
		remove_filter( 'authenticate', 'allow_programmatic_login', 10, 3 );

		if ( is_a( $user, 'WP_User' ) ) {
			wp_set_current_user( $user->ID, $user->user_login );

			if ( is_user_logged_in() ) {
				return true;
			}
		}
    }

	return false;
}

function allow_programmatic_login( $user, $username, $password ) {
	return get_user_by( 'login', $username );
}
