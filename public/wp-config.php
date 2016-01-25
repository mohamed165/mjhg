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
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ')o]c&)ForH$0tpv9B:IQ!h;28w*E+q+hGkZ+>KiXLs:$WFZ<9{l!0^p.fW>w8+X]');
define('SECURE_AUTH_KEY',  '{Po*|EElL3 ,26,heP)lvtDIvNX(e+~#HL{IL(MK%9as  9K-s IIoS|8S(x$F-s');
define('LOGGED_IN_KEY',    '/EqSWT-ca60*b.B7nfj.k,E.o<>B=U/jRxZ0>:%[x;-X[tWC!*nB}Pj4NKl4`dN3');
define('NONCE_KEY',        '|P{$+*q3GFGL;kUd|)!k]YD]LAMz]r=9e?:nv-dW!A6VQnRh@mgApN+F0id}@6OW');
define('AUTH_SALT',        '>|r)pDt{ 6T?qg`YbA{[(kXi*-K)E{J-#@uuUl ]2~A&< Kaor4x.dw;ETNU|`bg');
define('SECURE_AUTH_SALT', 'eXs+B3ezMe7$r4A~_|oyc-se?w&`Uw*Rn&Yh.N6G51b|AO|g3/m`D.}wIA6<D2&d');
define('LOGGED_IN_SALT',   '%!{h$0i#ILAkC`+cgmvE|pT[,o_J|.!a}rrzRf4rl>Wz+~=km`Vj/f[t,/_RGPn}');
define('NONCE_SALT',       'ErkemgJ]?3oH$<S|RDP/&apIexb, }Y#:p/9Mz*Lxx2C.$hIm$Bn{;{[hS@brR{f');

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
