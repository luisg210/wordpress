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
define( 'DB_NAME', 'farmacia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')|h|%E,7w6@YR164EDkBjs=Jx/J1mym`Pn):=m&23cs=%o_p@igR@|tZkD./)IAw' );
define( 'SECURE_AUTH_KEY',  '|i=;PL!5u,sE&=eE<6g`N~gXfP2Xg:$1.~yf~F@&?zX8r?+2B-/unE;x7yPb|*Qt' );
define( 'LOGGED_IN_KEY',    'H6J*M`2)/_JxpG4&H,SGc09xr/=*TVHRJr_Dq+f#c(RkRd*OwgPc9,WS`8H@FeM#' );
define( 'NONCE_KEY',        '#4:wsEq6.aDJnqtS:6wUyxb`BWlS#.:8.y-M ,K8r_$6i2@Ra,fEi-qLn$ha2H_^' );
define( 'AUTH_SALT',        '0G92L^}17sV!_yf:W}9rWMJaYv]9?^8 =w)x=c 6iw9G%Fd(==$Rn3yw&Kp9MLS)' );
define( 'SECURE_AUTH_SALT', 'Oka55)tpe @TfCHL%DF93c3o-L@k{0xsQb(*utbUu5VFNb8,>T=3nOp&^$)2T*#X' );
define( 'LOGGED_IN_SALT',   'cC4Z*oiSOhVOdZ>lBHLfWY@2g$|@l Zl5/eYN~`|R_%U#H;rA5O6%IMA<vHaa9vQ' );
define( 'NONCE_SALT',       'yW5.8pjr`#L$FH6_8Q9*eYw,mwKuN XA<BWxcP1apzve.b,N:vqkV6%IiT3 itG(' );

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
