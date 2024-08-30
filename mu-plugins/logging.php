<?php
/**
 * Plugin Name: Custom Debug Log Path
 */

 /**
 * Suppress errors generated by specified WordPress plugins.
 *
 * Include in the auto_prepend_file php.ini directive to ignore globally.
 *
 * @see http://plugins.trac.wordpress.org/browser/ostrichcize/tags/0.1/ostrichcize.php#L146
 *
 * @param string $errno The error number.
 * @param string $errstr The error message.
 * @param string $errfile Path to the file that caused the error.
 * @param int    $errline Line number of the error.
 *
 * @return bool True to success error reporting; false to use default error handler.
 */
function blazersix_error_handler( $errno, $errstr, $errfile, $errline ) {

	// Return true to disable all strict notices.
	if ( E_STRICT === $errno ) { // phpcs:ignore
		// e.g. return true;.
	}

	// Add path to file to suppress error logs on the entire file/theme/plugin.
	$files = array(
		// e.g. 'plugins/woothumbs-premium/inc/vendor/wp-settings-framework/wp-settings-framework.php'.
		// e.g. 'plugins/woothumbs-premium'.
		'/Volumes/WebDev/sites/Objectiv/fp/site/wp-includes/theme.php',
		'/Volumes/WebDev/sites/Objectiv/fp/site/wp-content/themes/fppathfinder/vendor/mpdf/mpdf/src/Mpdf.php',
		'/Volumes/WebDev/sites/Objectiv/fp/site/wp-content/plugins/restrict-content-pro/restrict-content-pro.php',
		'/Volumes/WebDev/sites/Objectiv/fp/site/wp-content/plugins/wp-sent-mail/inc/class-wp-sent-mail.php',
		// '/Volumes/WebDev/sites/Objectiv/fp/site/wp-content/plugins/fp-pdf-generator/vendor/mpdf/mpdf/src/Writer/MetadataWriter.php',
		// '/Volumes/WebDev/sites/Objectiv/fp/site/wp-content/plugins/fp-pdf-generator/vendor/mpdf/mpdf/src/Mpdf.php',
	);

	foreach ( $files as $file ) {
		$file = str_replace( array( '/', '\\' ), DIRECTORY_SEPARATOR, $file );

		if ( false !== strpos( $errstr, $file ) ) {
			return true;
		}

		if ( false !== strpos( $errfile, $file ) ) {
			return true;
		}
	}

	// Add text found in the error string to suppress error log.
	$strings = array(
		'is deprecated',
		'was called <strong>incorrectly</strong>',
		'RCP_Levels::get_levels',
		'Time-out connecting to debugging client',
		'Unparenthesized `a ? b : c ? d : e`',
	);

	foreach ( $strings as $string ) {
		// TODO: REMOVE!
		// error_log( ': ' . print_r( $string, true ) ); // phpcs:ignore
		// error_log( '$errstr: ' . print_r( $errstr, true ) ); // phpcs:ignore
		if ( false !== strpos( $errstr, $string ) ) {
			return true;
		}
	}

	// The path was not found, so report the error.
	return false;
}
set_error_handler( 'blazersix_error_handler' ); // phpcs:ignore

ini_set( 'error_log', '/Volumes/WebDev/Logs/wp-debug.log' );
