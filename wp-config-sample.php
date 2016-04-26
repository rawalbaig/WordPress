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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'mXQli}I&#ZW,x{[)|s-+$xFmygb_FO~Pl(xh,F2 #zYuu?bsW-lh#-c5t2=c!+lH');
define('SECURE_AUTH_KEY',  '!,FB:gT&Om@A7PLe*r{}P;bZY+&|P.+M8<EYxld+Z3#Y^P(xOS,H$dLNK|f+*!6I');
define('LOGGED_IN_KEY',    'G)XEdZEr^+tS 5V9{ LeLQvlLd,n#wk}ibx#%5u35ru-+PcAe7Lj_hb]#R8VvTT%');
define('NONCE_KEY',        'e/2/n_,fy9cMz~+N+TWL9v*>k4jw4A++I@]d{imO0Xk9fTavh;xpT8^|QFHpP8$2');
define('AUTH_SALT',        'lZ15M+6^_K*BDHn$++*10&Lv=)j`FLLD@wGrNZo.; 7i`MKQ-Tc=kcA>mGLkD]-p');
define('SECURE_AUTH_SALT', '}?MUP-B=3cdm<e !FEXRFatjBW_WwI3O+2IDkvCZAELs*YPX5%-^sYVry+ ir-m+');
define('LOGGED_IN_SALT',   '-F8$zyN`rb^qKZbwzv.{ntK$T$|ZAjlh-OM?)Z)*ZF ,G]m~~|b^q1UjIq66)nVO');
define('NONCE_SALT',       'zE_0-gQ~_d1V -:~6,o[L@:hhA4-olVej`4=xWk4U-g+(A2Ak=r7bBGhp #G0CF7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hej84_';

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
define('WP_POST_REVISIONS', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
