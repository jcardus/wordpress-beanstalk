<?php
define('DB_NAME', $_SERVER['RDS_DB_NAME']);
define('DB_USER', $_SERVER['RDS_USERNAME']);
define('DB_PASSWORD', $_SERVER['RDS_PASSWORD']);
define('DB_HOST', $_SERVER['RDS_HOSTNAME'] . ':' . $_SERVER['RDS_PORT']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         $_SERVER['AUTH_KEY']);
define('SECURE_AUTH_KEY',  $_SERVER['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    $_SERVER['LOGGED_IN_KEY']);
define('NONCE_KEY',        $_SERVER['NONCE_KEY']);
define('AUTH_SALT',        $_SERVER['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_SERVER['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   $_SERVER['LOGGED_IN_SALT']);
define('NONCE_SALT',       $_SERVER['NONCE_SALT']);
$table_prefix  = 'wp_';
define('WP_DEBUG', false);
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && 'https' == $_SERVER['HTTP_X_FORWARDED_PROTO'] ) {
	$_SERVER['HTTPS'] = 'on';
}
require_once(ABSPATH . 'wp-settings.php');
