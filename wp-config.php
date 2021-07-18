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
define( 'DB_NAME', 'coastwest2' );

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
define( 'AUTH_KEY',         'w(<fJttaFVo78&d%TGk|My,q2nNuo 8K2UgF.(/(D33gIe|~agcyW*/bm;[Y8Hr&' );
define( 'SECURE_AUTH_KEY',  'ADQR~0jPo-EjbLyf<OWu$sf`*r#<]6Dgb(F?)[67DE~Pw%aAb{>8!k{Gl5`za&z&' );
define( 'LOGGED_IN_KEY',    '!$`YxC]gJ`BWW-;X#JkL;C]vWMbuNZ1+pl*Fh5v4bX:;k`E;T)3jY54?TuZ{!Wd~' );
define( 'NONCE_KEY',        'j#p}X{?e!@Tl9Fv<J{-P&&67jZqfK]rvt<2uLuTw%I{1!9g#ChK-_5UJ(pm}`7<|' );
define( 'AUTH_SALT',        'zzgwpc-9v$2MtPLiipT_[ITJt^N%G/n(nZzg`vpczs2+oBv{w7 ![0g-euFGVeF>' );
define( 'SECURE_AUTH_SALT', 'FSll>|pYDUIL]T4d ;.Kse{~#t-bT0&A9,xN9a^iIA]zH]ydw ^d9iyObhOM#s:5' );
define( 'LOGGED_IN_SALT',   'bo@E%^v+EgcG*Ro0rx6c%1zhrT86$/)ADiJe`+A$y1YL^fFns?QS(wC8}D_s?dQw' );
define( 'NONCE_SALT',       'r*WBvCZtz-F+*Reg/::fQqG}gQl7hLijGP8jqjVVXDJUe.d4O=f@{Sys<:`,vD0|' );

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
