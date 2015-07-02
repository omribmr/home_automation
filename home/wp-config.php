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
define('DB_NAME', 'home');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Omri1982');

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
define('AUTH_KEY',         'c:6mNvDB}Lw6|fSoUi]|)^z&2r|5!?)Da)t5q#%&m<N^0VyCijoPl+8s1N,mcL$|');
define('SECURE_AUTH_KEY',  'o4Sd|@f5Be6h]O@;U:,+6zwM&obO1@60Tax9C%}eGJ15LC6FzpmL|J0i!O%6zbT2');
define('LOGGED_IN_KEY',    'Vy+NyuYNYOf~<@4hBf<0y1$EY3UK-hmt-{A e~2*vh1-;83f)@y,MaXHbjQ#D+mF');
define('NONCE_KEY',        'b!nT=/@L6B<#s6cEGfX;9||z{mx^}B1*J-skvo0`6FS*q|r?xxYM;L`-NbT-2~t(');
define('AUTH_SALT',        '`WZ!TdNS9-)A_Wsx&,hK:Ry%C7(%(HRacGRMAG6R%x}_+if6w&k~6*UnNV<8j)6`');
define('SECURE_AUTH_SALT', '!?X~,LqwL3Z!Y-57=)v#Qi%)>^{xJhe|iH(L)jUq}(uM,zQbmTj?qL9JjFxzt`@?');
define('LOGGED_IN_SALT',   'Fz$h+|-cFpmbg&8)9h_-J+nlANEfSem?QQt9p.++qsP8mjxr#NgZB`d2ka*^Wp1K');
define('NONCE_SALT',       '-;uT@Z-V2GXCKzcQYJpCmHZb$~f)JD1{sUzBHhf7Klj^]n>fV` P5L@_@2(|7Vso');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
if(is_admin()) {
	add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
	define( 'FS_CHMOD_DIR', 0751 );
}
define('FS_METHOD','direct');
