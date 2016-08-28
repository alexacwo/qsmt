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
define('DB_NAME', 'qsmt');

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
define('AUTH_KEY',         'EsV2rZMN~(jZ*>FAxQ74; dDGLfHWVP7]`S<-Vq3ljBjge;HEDm^&%)7[_5$16|}');
define('SECURE_AUTH_KEY',  'nV]?xJ4kM$HN4XB&bCx)<bfhXZc^IVF@OP(Q^W.}?2It+@uRJqP|{F1fn+f4 =>p');
define('LOGGED_IN_KEY',    '++AoPp;cf|:An0vo[i}!qP/Zu=CRDhxGFy-b.kigHngisx8(!:oM6CC`w,dcn:!o');
define('NONCE_KEY',        't/+!ikQKj]8duNq .o`p(+AAoq,jL+?R{}cUX$uu+^%9v3f/|&rm|c]EF|Z^l~Rf');
define('AUTH_SALT',        'HSY1n`@^ldT0O4GQl0ML?Ksrcz<oG]|<3 >Se+~ HL`?J`(@l,Y#k8w6HsE4mA=?');
define('SECURE_AUTH_SALT', '!* SFu}Q[/.5mEwcSk>K]:pJsQTOmd>D0mT<~W1In=uJ,XBxjE@q)6a?td~uI!`x');
define('LOGGED_IN_SALT',   'zJ++KR^H f@L@byrFd*`/7MLl2{M+V(z#o@3e=[>?XIqa3f56OBjZOuX|r.)htc2');
define('NONCE_SALT',       '`)7O5{+AT;];`p5.:jc<%7lP`~T2]hZ@H%!A).!qa.f5eV; [~_#HL2Yz6:E*_$m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pr_';

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
