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
define( 'DB_NAME', 'wdpf60_wp1' );

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
define( 'AUTH_KEY',         '/jknD)}&jr~Yw[PXyy;uSmpKfhq:Ae_]TNqO4GP0^JSVv!<y 32aA!6aF]KI/0(k' );
define( 'SECURE_AUTH_KEY',  'juYOF8lltNW$H@80Q/RaumlH0^pw29a+[gr<LxFAIKfe` Y-aJ@-dodAU{EJh.r+' );
define( 'LOGGED_IN_KEY',    'q-0pVDW}xT>l1wfho,^Ghq4=qUIho!8%X:#5NNfcOu?xYiYW.U>eY<Gx!~ls;h0/' );
define( 'NONCE_KEY',        'v}i)8I&}BE6q})uKSO:$_l>TmdRO}q L&^OBpvuh2MEDFavYyJ%,^=(^odzQSDJ:' );
define( 'AUTH_SALT',        't(zy+*ea3v3z:i[,mV`<%7A-2U2lRBWgw*.GhtEB@9cG:saWK6ABmPY;|I)t]?f7' );
define( 'SECURE_AUTH_SALT', ';4~^%3104bY?H_{f?3$m[PFd@[E2uDnVt*+poo!x- idH4S UN*lhl<ggu(Db4B{' );
define( 'LOGGED_IN_SALT',   'WkHnZ+BrAh^+v`K[Nx@7~cxkC](@:5tJuIXWMFWBLcTI*Rc_If^Lz#DChJ|Q[%I7' );
define( 'NONCE_SALT',       ']gZ^c2Y#VHjQud=bg#pY&xQ0[<do4XU63]pd1MjC$Jf9=wuTJEobbqO]G_Kft[v/' );

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
