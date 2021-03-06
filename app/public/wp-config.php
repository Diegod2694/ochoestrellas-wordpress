<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qxTJOnA7CE80I4NvWmseNFLX6KWAHANxelK7IAHy95a8q061KxKrBlIJ3ny0kh0YR5CYMwjZEeBoE+EhkUlazw==');
define('SECURE_AUTH_KEY',  'EFSB0p7m87dAHon8BySgoG0uGBUHa9D2cIf6Qj1MG5X0KmhMPmqzGYvABvSyl1eOQy9HA7yAKwcrFw61UaVtQQ==');
define('LOGGED_IN_KEY',    'n2pk/AeZR/NDO8D6RMGsWotCPlrYD42D/gIxnqebuuO2IMQVIwYSilLQcUaR/ogZtYONwWyd8LR+m/7yCsY/EA==');
define('NONCE_KEY',        'Z5UcUleb2+c8PJY9eUabItYcIaoR0vzmvAZeuKWDdFhKG4irpZx5q8eDQs7U/O5iGhZ1EfLwbinMqshPDPK6aA==');
define('AUTH_SALT',        'yTd3z158h9mL5IUpeC4aXV69yHCVEE77uY6q+CyX2Jb3iRhWCHepQjq4NK9C2hlKyp0Q6VHYCTtWuY2ViXmb7w==');
define('SECURE_AUTH_SALT', 'NwQW13KfI2657jy2GJGlurPTeYaUuIjBsjYIyCcEfJ5pilaOsSdbSIvG0fyc2ee30TYIw60odh93DH7FkKzmGg==');
define('LOGGED_IN_SALT',   'W0mp1HtEuL97b/SunRFGs76zP69Vc2Bcb0YhYWbonJAVHsDZNFK1+c31aAsVN33XANPdYj2+oXjai5O0qZO4gA==');
define('NONCE_SALT',       'fFHF2WgV4r2ueO4bfE1iA0nmoSGMQ0FVGpzhanCKyOXfKzqdW5oCWhPkbca8sXi5DVCtCmkMFGsIi8nSpp10hg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
