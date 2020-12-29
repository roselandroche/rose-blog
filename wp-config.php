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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'AjrLF35RI3+EGLTszn31Ip4QyfjXpesPmNBUz4xIWp7jv7Rt5Ba0Ma2SSmq+NkhDtj/hcKPwEBlnurIhHIuNFA==');
define('SECURE_AUTH_KEY',  '0UJC7Qz3TPDqPGPS8AFCtRfw+S2yfki1z1MSK9juWOR0x6VL18ghWiEO825BOaF7qa3mSSG3M4kkKCr365D67A==');
define('LOGGED_IN_KEY',    '2mHsdxHIARRF9D+KG9hIhHNjF8fAQUgLr/10KI4/fjb4Hh1vHWAprVQ/Lsrl0AlTWEqqPyCkEAhNviPmAH0ROA==');
define('NONCE_KEY',        'u63Jn2O+EdrBvt7XqSZ4VHTGlCuEXGIrPczuyzlBLt1nBgadWGSaiTbgeWAYXvUK4PM0Tu8WaPyEihjNL2Adig==');
define('AUTH_SALT',        'ExAXjZi67zaenah30xWNlPQ37ZcSSlik6Me7oRzTJwrccOBwmyIDcYi6RgLHJibeQ2KsyCE7U1q43gKIarJzpA==');
define('SECURE_AUTH_SALT', 'IXWQXX5aBBl8dxsmA0k0hfT8ZqG6G9/nd1/bbr/TPTExK+387MulzTsSbi53TDaI8spe4/1ReI9vb/U30jK31A==');
define('LOGGED_IN_SALT',   'bcF2jnpFuDbvh59aiu4M7w+aoI1UOYVIZTm0lUgfQpHdQKY7l5cKW4icMZ5KTUNIOoX7vE1SIhHAZvMSMxhPQg==');
define('NONCE_SALT',       'eU1IfB3NFcdTnI3BlHJME/7wcUorlMPubMBCOQ/K1dUTrFhgJBPSniVi058kKIRjOPmNcRpvj7TfnLCLYBbx9g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
