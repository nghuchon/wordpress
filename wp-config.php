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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         ')-:!Ulm#N6IGiQ=l}Iv%O`(/,YW#AOs:ayB%,ar7 {d[D;S,d.+4<=;yTlO3J`2%');
define('SECURE_AUTH_KEY',  'UR:R4#yh3V^x!?P<2$4z=(ge>9hP3}18j,Pm7ysFS:tl*k[45eB>&p?S=9C]Y.pE');
define('LOGGED_IN_KEY',    '%ZJJb3L.AYg6@eOGUgbr1MPyE=>.G>mPba!i1HMZH@QuHGhHFZ6InzqKt=knf}[#');
define('NONCE_KEY',        '?NGI7,E%sGJ]_EenZ ak85jQe*`rj Jm^~H v^8yRjJG[o%3i2V7]I3g5by3&mdl');
define('AUTH_SALT',        'mv<a/7:.K7$1?VH;OA5D:!3YsO43| [hJ!$YA>yy!P:)0:N8<QpSNgOqpO!w#cme');
define('SECURE_AUTH_SALT', '&eCu7(:yb 1&WYfOmDLyH_Ou$G[/ FnA7l[~>Oir$iC#nNr,[Q+=&LR|1._*(16,');
define('LOGGED_IN_SALT',   'Pny^H$&8OwYQKW7x+EAXLNrAbA1lGjT44.m(~38x949^Ovx}&qZiDF,1+I^~H&c*');
define('NONCE_SALT',       'ZUl+L](mrK{=n#*43!3b2i$_Fyw>~gV/itGIfSrtOvkElDaf.NXf4.KsR>c0}!e~');

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
