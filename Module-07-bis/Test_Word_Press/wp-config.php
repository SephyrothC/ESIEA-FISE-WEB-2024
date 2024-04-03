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
define( 'DB_NAME', 'wp202110_itconnect' );

/** Database username */
define( 'DB_USER', 'adminwp202110_itconnect' );

/** Database password */
define( 'DB_PASSWORD', 'adminwp' );

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
define( 'AUTH_KEY',         'osA3M/rskGfrp1%.>HmL|^5q;ho8Gh!hL;Eqw,)h%&h:j@k`oA{[=>Q{~i7vl{|:' );
define( 'SECURE_AUTH_KEY',  '6LCr!DZ;y&VTRIv5]uyPz7plw}9+/PQ;Cs`;dqqdWMhIO(Li5_d-}g4BDA+-w^t2' );
define( 'LOGGED_IN_KEY',    'j> Cekp,qr*EU1=,tQ[k`m}mW`63{VS>4k!X*wVe,;B^5pfY~K-8v&-R# jLAE M' );
define( 'NONCE_KEY',        '2? _G!}7dJL$wj=^CP8rNbT1#0@s>@RJSQeSn8X%={&U$L:ZvQJn*- TAHk].qY#' );
define( 'AUTH_SALT',        ' 8Wc.;Eb?xCo^F>cA_a~Ahw}]8mn=dHW4[.7)|3) O3mba@fzzc,m$@Mcw$s`}g;' );
define( 'SECURE_AUTH_SALT', 'ChU~qG;MtY<y~JI|~xxG;]?&VZXec$6~ZcDzJ/t ~5C|Yh$(A:sJ3aAI>p1/o.,i' );
define( 'LOGGED_IN_SALT',   '|IBJ k.m+&7#>;~B`|Ex+374au]GZ1!GO(FgUyLXj~;!TapA7CuQyd$MYTN{+>]h' );
define( 'NONCE_SALT',       'oosHbt,hvwF<sZc0.yVuGHO`q9D,T4yFW<4>lii,m=SzuQKrfAkMyvWL#s<[+qqy' );

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
