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
define( 'DB_NAME', 'ali' );

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
define( 'AUTH_KEY',         'XnZo3oA;^F.HbfTnKQQre*wh<U>X/2`z,?Qljp&_;L0INRwb,%_S6gaHNnaje6 U' );
define( 'SECURE_AUTH_KEY',  'p27zqe@)9DJxVqm8,6Jnj~,*vDzx`A#VXO%j~g:0-o#,-w*b`P4a+MYu`+RkWHBC' );
define( 'LOGGED_IN_KEY',    'oo9U*LiG>jkzw8+RK$ vr6^-`h;75<8QI*:,4797]<p!iqqRq;iz^$+T)^H&@-KY' );
define( 'NONCE_KEY',        '9g{cjzRBt`H_)%LaRx7?[+ o`P];EoYGsKk~U(~Pp}BDadZI0OTh8Z%|ojsqE~NS' );
define( 'AUTH_SALT',        ']1#(k{z*[u2V8)i?wME]Z/qO-Z3T;[T>?bx.VIbds+~/$P;M%@iT{$s&%!:JU9~+' );
define( 'SECURE_AUTH_SALT', 'Pw-6sw,tPrYqZiP&Y{7?^|0J`G.Du@Rt`o:2f;5UP/]<d=WN.+2/s,Ixw^z!+1u4' );
define( 'LOGGED_IN_SALT',   'CT%+1n^Ed)!txa](z1.`V:}yNe|_rXIF.aD(j 7s;hdP{w50L-U<.ffY2ft~80cy' );
define( 'NONCE_SALT',       'Wo5fnD02mvLrFiElUjhgv_hl%-El[_Jo[Tk(V4-t>d{O0s !q5Mv7l^0ww92>bW4' );

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
