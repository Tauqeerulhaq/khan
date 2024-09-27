<?php
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
define( 'DB_NAME', 'khan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'gVt-u#}LtT@]0E$&7qDUvL5XxA/`l?;5VynKQ9#iHdmhM7az[UAR>|Op?wuXdEBX' );
define( 'SECURE_AUTH_KEY',  '<cC`Bj, 1[.0f]xH?sJ;PMQihp!kUnUAaMT5{kRu*3{Y]abkhZ8Q^s:0D-ZA}xhf' );
define( 'LOGGED_IN_KEY',    'SP+=9`?(nn_}auY} 0m8Yggbcew{Xl&R^JU9[[H|iy{ 89n@kBM0)u7.~~2HULX1' );
define( 'NONCE_KEY',        '5(wYQBD:`MT,{z>L)Q,:yh`=&~*/Ir)wMfX:1>iG1L>5?{_!b4gXalh}~0pL0-3-' );
define( 'AUTH_SALT',        'Krd7{Z{+%!H^o}T$cWX#Jrg<>i~h!lpn[o/N&CcIo6Um=4!`t}:$)I/rZ>Nc0?dK' );
define( 'SECURE_AUTH_SALT', '?LY(nk,gfU@TC7VS1,R{PTPx15^94_h@:9?n|#7^JVemb#fxD&<K<i-o|oK/7Uff' );
define( 'LOGGED_IN_SALT',   '15q&$2~;4mcldZd7lum2VzA|/JD^7d]+V#(S9Ys}1l|I<|*CzP*WJ.d<BZFDYcnh' );
define( 'NONCE_SALT',       'yVY^c+,l0Lzxnc0~}BboL@N5k(W1z7q (57j(+@7 b<nzCcuhjh@JwVXgv~=0?Vc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
