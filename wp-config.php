<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'tienda' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{:#d$j+}#5Cl/?A3j92L?(k{Qo-dzST ed]tTD/Iw2J|rf?&Nllfg`w_(7AO@%4l' );
define( 'SECURE_AUTH_KEY',  'iUjJ>&P{[B$JX/IODkVcz ?nUA G.17E!,%g~]__wZ l$37ZO8}DtrNv[qY8;z$;' );
define( 'LOGGED_IN_KEY',    '#t8GCuHTH`xoS3jwCs6Ycp-#N5[{pJAAo:=xDHN+p,Mv MhkGNtAB/8Tb^hX|00l' );
define( 'NONCE_KEY',        'RwpcOxEB|[a_%3@@>W,eP;::!u0Jy#[sSBQdx-bj6vr5Dy*_)|9:Nc@[}MJ#-Z&y' );
define( 'AUTH_SALT',        'vdS]%&Jg4G%45gT}i/v!%i7f,pz?LNbg&%I)bUZ2tCKeRCLrKjKS1VCY VXXUeV0' );
define( 'SECURE_AUTH_SALT', '5vI7{o5l8zQm_*JPBqhFRwzj`H%W+36WZc>^gw2E?;@#TULAz!$GYe)ZLNAX[GTA' );
define( 'LOGGED_IN_SALT',   'Ahr?@xBCYLbOnsyQ(,;n7@3`jb0jBc`./@K>>a0Xf*$F#fTOjm~=Bq38-b@nj_/(' );
define( 'NONCE_SALT',       'n-I9lJoi5QUBA]cSEiOlA/y|2%@n5xT%80U/$vv2zHxwz;~*QG(8UW+0qkBoR,UU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
