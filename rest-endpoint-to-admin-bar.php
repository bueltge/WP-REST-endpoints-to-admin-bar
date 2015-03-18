<?php # -*- coding: utf-8 -*-

/**
 * Plugin Name: REST endpoints to admin bar
 * Description: Places Links to the WP API endpoints in the admin bar. <strong>Requires PHP 5.4!</strong>
 * Version: 2015.03.18
 * Plugin URI: https://github.com/dnaber-de/WP-REST-endpoints-to-admin-bar
 * Author: David Naber
 * Author URI: https://dnaber.de
 * Licence: MIT
 */

namespace RESTAdminBar;

$file_loader = function( $file ) {

	require_once __DIR__ . '/inc/' . $file;
};
$file_loader( 'init-requisite.php' );
$file_loader( 'register-autoloading.php' );
$file_loader( 'init.php' );

add_action( 'wp_loaded', __NAMESPACE__ . '\init' );