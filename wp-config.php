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
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'tomakis' );

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
define( 'AUTH_KEY',         '|T9fn7&5n^g!CC8NY7HJ${dA;cvP}*7uE}? l%PU88g0dz8phsSNx^{SrA$Jq>QO' );
define( 'SECURE_AUTH_KEY',  '*M>f%kNMBnFszh}-?-QeEh YLS+:kh$VNJc3m6hYy(z/|lz`bCIBCwBB;;Q aX32' );
define( 'LOGGED_IN_KEY',    'W%$ApBr;6<f_^~_{JqEsUOTRp+RP ZbiA7pY$mjHMi)!pd~LhS_/h=:jxK*8UA`W' );
define( 'NONCE_KEY',        'lAxE{<`8wd<x@NeN5%qJJ-5D2)?Yy=V5rJ8b1FNFAB#1ijK|=sd|<uAD|uI27- b' );
define( 'AUTH_SALT',        'VSDqI#miQOjyeW->n ChC.u8p.A~;tzy1;*%$y9]d$p+4$iZl;%F?yvSPbEWjEtk' );
define( 'SECURE_AUTH_SALT', '9L?(za_pJEGkng3%=?xD3FL2p1C,e4P*gug`./_cp?g1Ysn~9^g8;lB[,;vf~fxv' );
define( 'LOGGED_IN_SALT',   ',`z$vSd{YzQ<^h0sX0UK{~/EF:9>&x;|OS{FT@ CRi{CNH{Wcs(q0[{,~^YfL<cT' );
define( 'NONCE_SALT',       '?O 2voeK`;Uq`+N+`:x=)_vPMq@[9I3_DNy.U#adXH$K07k![r2pF:<#R@~&LG9h' );

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
