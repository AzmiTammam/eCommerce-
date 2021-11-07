<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!Jyg|PpqKs>g_XDkE.;t7~ |P6{=uG~/rm:qX$s>5M{t-<8X=U.Oyf0CcyDZm!j[' );
define( 'SECURE_AUTH_KEY',  'gMNkXZ{i:?xQU`I Z9RP<H:hY_!eGT9ozM>x]rfMo?Nx&#%jnn^70Gw[Z<9fN*?9' );
define( 'LOGGED_IN_KEY',    'JW{d7r):R-!{cx!09+t9(eHkxTJ7X .)F+w%eT)QaV5m|sUJq4FglQEQ*xlC_ y9' );
define( 'NONCE_KEY',        '< %f7u<Tx4NUMq7+k+PJBV|<r0KdKEWRyWGS>H!Dw7Ji  0SA$fq R5@0(G5H,m#' );
define( 'AUTH_SALT',        'JX=1N,uEc$^^IOHv]OKev`E:P<V8bIm !,K%_&_m-S!}&MfPe[Fe154}.)_5dqA~' );
define( 'SECURE_AUTH_SALT', 'd}BKF%|[-Dw8g6n(e{w0eG/!zIz3eYff6Q7j0(#4ZT;sTv?VIyCGh7d2M^d(/vwu' );
define( 'LOGGED_IN_SALT',   'BSqbQr*hD `O<j.k~u32{>2%mL*WiY+G9@H?la4D92VA N?it+3)Didr5`3QYB(w' );
define( 'NONCE_SALT',       ')WD5dV@:L-y?J{KUIcyM=MSq%;[xt(?eM*>5AQlc%mhZ;Mg0G%=HkEP;3U{,5n@@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hjofq_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);