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
 * @link http://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'addlab_wivians_factory_db');

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
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '=W#~YKCa0Vyuc8@j7)m!bi>n(Be!,f1tS-:kH7:vEzyh6DQ=zscg5 gcmG(gc? 1');
define('SECURE_AUTH_KEY', 'nCq-<+zUg>h;0FN#?D} 5+0.I|P_?2rklG7uJa}BvUSi~]#5zy+La:L][L@3;$HS');
define('LOGGED_IN_KEY', 'Nr)s,c$rj.V2n9Z8P&PwNQAa>WbGaD-+W^3oLD-LZLV=0+muRmTF?IN7eDC>^l`m');
define('NONCE_KEY', 'V)PU7jX7M/k*K,4V<FI_|h9l|r_B,.Y/|gg2jLdnJM_ XY|<rMiNyh#)O1q6X-mk');
define('AUTH_SALT', 'Yk0JV1YXlf`8|dIdSVZJe(DL2mBgI}j.mWd%;|`%%0}/*M6Cu1~EwXD0Ny^4m+{ ');
define('SECURE_AUTH_SALT', 'Ql|SZ:krM96n/>EK(ito^^8|h a-&eYJ+tl-_D@hQ;$YxvT~X.bk+GUaNO6=!Y*X');
define('LOGGED_IN_SALT', 'EnWu?irUY]#^u[jFE;|f(LO^2-S}^q$RrbWq8d-._+p%H|zP2Q l.9BKbQ$1 dF;');
define('NONCE_SALT', '`{Krw#mQI}*K>XwncP|7a{Z[f)~sFgjQ+s)$gb75M5rRVg7*e:$^;]];URPa}={M');

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
 * @link http://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
    define('WP_SITEURL', 'https://' . $_SERVER['SERVER_NAME'] . '/wivians_factory/wp');
}
if (!defined('WP_HOME')) {
    define('WP_HOME', 'https://' . $_SERVER['SERVER_NAME'] . '/wivians_factory/');
}
if (!defined('WP_DIR')) {
    define('WP_DIR', dirname(__FILE__) . '/wivians_factory/wp');
}
if (!defined('WP_CONTENT_DIR')) {
    define('WP_CONTENT_DIR', dirname(__FILE__) . '/site');
}
if (!defined('WP_CONTENT_URL')) {
    define('WP_CONTENT_URL', 'https://' . $_SERVER['SERVER_NAME'] . '/wivians_factory/site');
}


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



