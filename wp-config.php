<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'alinalinconstruction');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}li^:GAui-^9V%>+ZaWYGEXpZ!0Cf8#.+8xx@Q>}FUZU:Q7&|Co!M09}l]<%4QoO');
define('SECURE_AUTH_KEY',  '#*&-^]g?C=23,PInhsOQj#vfph%Om)E7cj_eW*)E].2xSf!@N1L9W?B/#yv7%v|;');
define('LOGGED_IN_KEY',    'E|[K{,W36nwlXgM-^_hYd|ddS;+1l j>cT}= HDOY[6eH+MF7VP]RJ3yQ<te}}e#');
define('NONCE_KEY',        '8Bc:W>030Q`b _MZgOx4hHvT`pZrrp[#/hM$Vz]j-0o U0o_](PZ0%<=18!G9}lx');
define('AUTH_SALT',        'x@[e`aQ+g|FpM&r(c;2$#685-Lx%gIu1vx[X(Qh~5&Voq5yrSt?o!L!,f#Vv}f$j');
define('SECURE_AUTH_SALT', '+X$Qoq3coH$|i+;-4b<r@<4Q~.*5C]rjbdMk[hWfs!S}|O>-J~e<[#m{gn=}EGyM');
define('LOGGED_IN_SALT',   '[((:LVzpUojjcFMqAm3R% 8V}~S2S`/ @6kqGVzSJZQcwU&qN/UY>]R37y~7SJ)J');
define('NONCE_SALT',       '-NwE;rH*0<dwI6c`%c5_gYQ[ga*=yd+TW5`o;6213&B.]fG(~ue*M(>pKI>PAI*o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
