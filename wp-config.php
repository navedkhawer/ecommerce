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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'X0<.f@J S4GXYBN[mOK`HA!_nW68.G6Egnpnq?Wg*%H})a#QE+oB=x0J!H51+*1M' );
define( 'SECURE_AUTH_KEY',  ' x&42P5(Kv4}>wn`+p/sO/oG<!;#<yB[B5+_ZLdedHD:%@tHIa|=FK&L+$K(/~}b' );
define( 'LOGGED_IN_KEY',    '8$a-qby.q8l8]Rk-S!jN>?}H|Xa`DbgEUT3#R-p||_:7j/?+y2`lB:/c#pvk,xVk' );
define( 'NONCE_KEY',        '.x`hgdo9Xib!OfT[QV:#%K2!O,|qa`1eS:w^BS(E&|E lG6Xv~,&a rss2 &;s1P' );
define( 'AUTH_SALT',        '+eY+$]k kU xX?cPI?XT73Lo>Q0n1xin?=;,=/[G@2M7?!=Z|X_rr]pPpB}IjjM#' );
define( 'SECURE_AUTH_SALT', 'M~IT)r9VQ%drRwoJM^f4[}4Wkd$)(I$~RdX=u9ZJQl~ElGHWj:sEz7Ky_QGT{+!,' );
define( 'LOGGED_IN_SALT',   'bRd|1A)|s<sL=?RKOsqqTa%h}Q kY*)i=al*A/5bxm-Q*u20pCtC`2UNXW~ue^Zw' );
define( 'NONCE_SALT',       'v$B{`4xP%<QFQ9$1d6%=rD,=L%I^CxI;I^$DR8e6%}{g!0]4Hx^jQ@.5+q] z[*%' );

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
