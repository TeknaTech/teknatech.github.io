<?php
define('WP_CACHE', true); // Added by SpeedyCache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teknatec_wp357' );

/** Database username */
define( 'DB_USER', 'teknatec_wp357' );

/** Database password */
define( 'DB_PASSWORD', '7g5S8q2Y3p' );

/** Database hostname */
define( 'DB_HOST', '192.168.0.100' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tzwo5t79xtnqlo8gn6tjd4em8wxj7cuq06zrjq3bw38fjtumqzcpsoidyvzxerwq' );
define( 'SECURE_AUTH_KEY',  'mulpomxvd4lfcathwecyaiknpz1kufu7qm1tcultisfvx5myihazxrgctekurpcl' );
define( 'LOGGED_IN_KEY',    'tidvcm1xjh09n5rmtkpompxzbfvwgeybjelmjbpsfkiqzgpcxnqqrns9umgvj6km' );
define( 'NONCE_KEY',        'btsalaf2xowjnmmjmlsb8ptk0p965nh1ndlayzunacnyvw7rln7zvwztuv8ickll' );
define( 'AUTH_SALT',        'uxnksl69jmmdqi0nj2tqelhwfyxt73tomnjdywax5oclwora4x5rfcxzffnofcdn' );
define( 'SECURE_AUTH_SALT', 'fgtfdzwezbozfixkzlxyw9t0g5q533bagskmx2bvgkzncpc8uzq2iaut4vspxo8f' );
define( 'LOGGED_IN_SALT',   'z9zd8l7hnuk9lio3ddeotvesnqv6oanyjeqtmv9pnxw7mvpu16ul5bmub8gaqpp2' );
define( 'NONCE_SALT',       'due2sry5ootitts9fa9wbyghga6saudwxnguce3jobxjpxcutxsymripwuven9tz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wprn_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
