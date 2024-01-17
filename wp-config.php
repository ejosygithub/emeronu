<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'emeronus_wp948' );

/** Database username */
define( 'DB_USER', 'emeronus_wp948' );

/** Database password */
define( 'DB_PASSWORD', '96AE!iS@6p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'gkwhetvwooag8klstjswa2yn2fs7a9glkisiirvoi3vbchyyxn9b2vcvqgf6klip' );
define( 'SECURE_AUTH_KEY',  'j16m4dagdairqy5n7n0b9xrnjhzf5tb4xkmhmpagrufjhwxwjkbsj2wytzohsold' );
define( 'LOGGED_IN_KEY',    '737wxpppqwakq1txnomncs4aiglpq5kh1k3shtklnp93lf5qairkrakunntbkw8x' );
define( 'NONCE_KEY',        'qlnagnvmq9htwf7w1lxxjoq461ztyv3flw81qvb46kirevv1bqacnfxbgsrlybkd' );
define( 'AUTH_SALT',        'sabdet2sykqsclxtiznov2qgrrngjkyhlna2sk5rxy2rvjoevqj33dwwsengqcq8' );
define( 'SECURE_AUTH_SALT', 'd8w80248ssdcv451gfzonoeecfysgbbcnlocaajfphz7465vhkhyjg8jjyye4oaa' );
define( 'LOGGED_IN_SALT',   'lmipyxdownbg1xpytlkuosgcnmc12y5tvagzkfkay4fvxesrl4842gdjn0xeh4tz' );
define( 'NONCE_SALT',       '2zuksubfhegg8jyu6pxnnngoayn5gtnrpvfr4edt9nsl3ssl5gs4klkxviybhhdv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyy_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
