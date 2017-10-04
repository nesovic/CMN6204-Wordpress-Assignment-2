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
define('DB_NAME', 'wp2_portfolio');

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
define('AUTH_KEY',         'g%>7VBmMAv${da>Z6.TZ93TO4Qhy9{JF]s_4IVg4Wbc*;cpKn&5KmGwcS$<x}S9K');
define('SECURE_AUTH_KEY',  'jY=6CL})Qm=%5JSv(]?C_m`Rl]eC/OvR88^fOckpo.=}~_BWe6XF~S?G?%7e:Q1z');
define('LOGGED_IN_KEY',    't3[vMuUKWU}I7A{%WVC,F1z+|k/aO>c~U%{]f^Q-4=Q&%u~59=yvN@L>zwwR!OQH');
define('NONCE_KEY',        'pg(N},3`^b8ni=e>k}Or.A%qb+ZwOpbU_+XY1d)^X<EI!Q4Wvzm0?&<u)* <9>:2');
define('AUTH_SALT',        'qCTRQO|e>haozx5d]oCO2b?tAUZ/Jm-H8[fNSm*OG%`@`M,)VImA*uE6[NoyfQSz');
define('SECURE_AUTH_SALT', ' Y[9bMG^P18;X02o+VAid]`FjE3xA#x?7:(~M[jyLSILgn>Ux+*qI,`~.H<PHbZZ');
define('LOGGED_IN_SALT',   'c{kUU-9roHw<#-+c&h,zeCF#.C*!hNfw*:/ZRtBn3^A2MQa1M5^c3)6`H;,-y9>3');
define('NONCE_SALT',       'L@k;>c}zdNv, 5c=.UjUR!<c+E7Z7Whm~+E5;[9+x#<re&dye6{EJda=pd`wLK9N');

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
