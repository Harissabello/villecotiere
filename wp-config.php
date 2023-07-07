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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coastal' );

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
define( 'AUTH_KEY',         'K yY1Jj57xPmp<0mb)B)2`U_9$o~t/]9AE{(!S/kCug`d8<qB*/Fb>-SsAK;U2]e' );
define( 'SECURE_AUTH_KEY',  '/2[MXrKARGRs30@Bc~}S`Luez`Fe8$Ung2g8`q4reonXki5)E%=_c3MyU>z=%P+1' );
define( 'LOGGED_IN_KEY',    '!SN|1k@Qj/>rXvL):L^4ZlQO0[b]{afh;?SEG3jotW7noN$l:(0f_k ^_:~,1^f3' );
define( 'NONCE_KEY',        'a|VryoZK_:ms/X@b<APB^:.r+JL#I5%A[JBg%ke|g[K([$a:[>?v3Y|s%vDE13:e' );
define( 'AUTH_SALT',        '#!?ON%q%[kW`B_]`iY Dh>)z61+nLj:}[$&?cpoakIddF1vcRB]!eHQwt^5#DctO' );
define( 'SECURE_AUTH_SALT', '1Npavv+]N1+A)BuK|R)uZ0)49F:J^V(IE5j,=#)VK0(TQ,xA~]TfLL~1><LKgwKL' );
define( 'LOGGED_IN_SALT',   'z/F=u.eqjVaVxj]uqnJdXnENO&vt )V4Ff^UY[ti{;E*mo+b1X8u <D3sVV{xMR&' );
define( 'NONCE_SALT',       'PeBF4X?d>,&i~%T|+b2,40%1z;A)[z] c8a&Dw!F_j&-CCaV}*J[jMN$;FcoCao[' );

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
