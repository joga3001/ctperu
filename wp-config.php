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
define('DB_NAME', 'newctp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'YY<>;OT5+IT~)G,%6Cw~-ojLZ2!n$Dy0KLV`HZ|s/*+.c+^*egK%jWh^X,hbnOn&');
define('SECURE_AUTH_KEY',  '.5-8 Z+L4cl+1=$,kABw@>teRMDK}}Ej.1f3N{tnO(Flj<6+2?Bo?axs@>,|^+p8');
define('LOGGED_IN_KEY',    'x?q})dy-p*]b!}7k-@Yd[SyW-,<ce9i|tq&$[2O)~`v-GyFE cb[R- gD]R<1Xf-');
define('NONCE_KEY',        '2{hgBXR~[xqO;YY~F]#/au2*foIqm8.EFk-B{f4Bu BymQOR!-JfJK}<wiWa21L:');
define('AUTH_SALT',        'dsV!Wz^@+1[9b(j{Nx0@|L[ar92u=Y&b+ZqASNlfWrKxUfU}WG6/L#bg:@<MK4Eq');
define('SECURE_AUTH_SALT', 'aalXWlA.5 6j90k~e>>%b_;Y}mdy:c+*gwP7[]B*U..u,WN |<ko]:Y3_h7{:~WH');
define('LOGGED_IN_SALT',   'y&m^,1Ee)tJ+nN&NjKWv+JNEd.BK,%V o.WaXYIA-=-6urwk?ryb6Q$2+w]jzg-k');
define('NONCE_SALT',       'D><X@N~hp=)OfrUk]|rl4BG*3 hcI?WKKyqa+`w(;ke;iVrn8K58LCDc;*@a/ h[');

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
