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
define('DB_NAME', 'sbdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'nH=&^Im%]hn=4K*ekOVMh-/.?.||:W=qx,9S|0!2Ke-nv}g (P`g%Gj-#DN+uifH');
define('SECURE_AUTH_KEY',  'tF+KRb9+~D1>@)VxOPev1.|,P)zirw:qgeJ-Qr76NY2wv[auQO^An,`:T_9M4yt0');
define('LOGGED_IN_KEY',    'DR4wno]MfpZK_dckX&y5BqfKD;jwa]s}l2j3YNfx.q%DlN07U-uOJ5itJLaiL%}6');
define('NONCE_KEY',        'E]1F,S@sd]|)_Xp~_E5So(#LN)KU},NB*OP@2D;GOwmQq-4(xVUB59<sY).kuos~');
define('AUTH_SALT',        '~Of@??nF[JZ7-e{++i0RXGoo/ZvJJldkA@yLSQwy]C+5+u7~A_Q}&PxK ~lxLFb6');
define('SECURE_AUTH_SALT', 'Ql9~QFK1EZX#b^WqqF0km7tBqg66uv6<_|pGy87FV_J;Jb8y6s-^%tS8j8(qC~zb');
define('LOGGED_IN_SALT',   '{Ba2/y[fA*^W.FH;&u>/`{Rl]1x1Cw(BasX182k~C{+xjX]@}0oJ8P8?bmE3mp;&');
define('NONCE_SALT',       '~7Z^/H,o~#z]9O,FuV09I;lS*3._4f[PAz;).>G]gzH13$n9W}n5I^];Vch0a[)L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcln_';

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
