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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'monarca_revista');

/** MySQL database username */
define('DB_USER', 'liseth');

/** MySQL database password */
define('DB_PASSWORD', 'liseth');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mkP(fj8UwhY{QSQE^6pKu}Pd<((J+y9Bu083{f@}w=SOtc 4.[b0YXEWl]55>/oj');
define('SECURE_AUTH_KEY',  'cV55/_~gOoD,0x9^-,tkR;*&ewP={sSo=i/X3U`G:y@aivJsOTLAmyaL)r_w7{8O');
define('LOGGED_IN_KEY',    '$qO)7}7%YgFYM.shf#&hrL^X@*}n8wEUCSn=I86)$mPTx,/Al+eTn^Q!IRokTVcx');
define('NONCE_KEY',        'Hd.W(1on}6lJa j@^;WMTOT0>czb)0}&-X_VG-,NZQ{`W/LIh7(!W$Fxb,WmH}[4');
define('AUTH_SALT',        'C;@s|YR(_9n4G6H*i@T^f@`fMRtKmLX)EA5@m@? lSLT7(?)eJUCi*1TV0Pfy:H{');
define('SECURE_AUTH_SALT', 'g*e]9LQ9!sxY%6y8qdb7<U>c%UvN0;~.c- ZEuC@yDk!R[@A{zdHsbK|eW#]4`:9');
define('LOGGED_IN_SALT',   '&j]w/V68:E6]hl-#T!Po|_W8}v`#W^f|xS^EawJ]XH|A3TEiXG@7l`[luIbnM}3q');
define('NONCE_SALT',       'E7h9[(e7T:H a$Y3k^)g01;$6EB*{{:&Sd~zJ2?i79lYnZ&pZoX]rh-`8d&ik4Ij');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
