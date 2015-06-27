<?php
/*
Plugin Name: Don't translate wp-admin
Version: 0.1
Description: This is a really simple plugin which prevents translating the strings in wp-admin. It doesn't change the locale in the backend so it doesn't cause problem when your theme or plugins work with locale of the site.
Author: Shinichi Nishikawa
Author URI: http://th-daily.shinichi.me
Text Domain: dont-translate-admin
Domain Path: /languages
*/

// return true at the very beginning of the load_textdomain in wp-includes/l10n.php
add_filter( 'override_load_textdomain', 'dont_translate_admin' );
function dont_translate_admin( $override ) {

	if ( is_admin() ) {
		$override = true;
	}

	return $override;
	
}
