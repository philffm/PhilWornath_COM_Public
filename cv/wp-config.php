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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/www/htdocs/w014f065/philwornath.de/cv/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'd02913ee');

/** MySQL database username */
define('DB_USER', 'd02913ee');

/** MySQL database password */
define('DB_PASSWORD', 'BDAmZq4TzL5EgWZTuJQm');

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
define('AUTH_KEY',         '!ss]<F|!QQUc_Pww/g*lii@BW?I_:AA:76tQZsR.F*o(Wh|eP(S;nrZH3&*JFHb[');
define('SECURE_AUTH_KEY',  ']X/9M_Drg6w@{v(N{XglLD6^I=*mdjJBEWXq9{e}4_@1VF^S|GAKiU+5q3#V{LwB');
define('LOGGED_IN_KEY',    '&R5>Pw>bW[q0#Pb!u%LaXUsKfu$cDy(HM:e{4$_j^Qx`$[aw`/Y:cNcJFf0ha630');
define('NONCE_KEY',        'Nu.`wkLW>F:A$y:b*rykC_8gFEP*Yb8*XCgR06-LYEk]@(@Hw<5<yJ$BnSII7_Pn');
define('AUTH_SALT',        '$:B2MM]*pJd3O&XH@kb<8d[(:(NNe}>g:_wf.Vm|!S1OWhuvUY5k@opWtA([ACEX');
define('SECURE_AUTH_SALT', '#>A0r0/rb=D<&;5ZsGG589j/Xohw5/R7KqD@#P5clV}qp4MeXrwo.c|dTg^gt2|A');
define('LOGGED_IN_SALT',   '$B_&qrg`JfR<x!#RsxD!^Be5+Ez|Tx@W=}[1qEn=.BW(CXX8Sz84?{GGBCFu>dNX');
define('NONCE_SALT',       'd-gVOVr[wKb<&<RX9hkVf5|*UD|r+MLlW6E*k9cecF#haSCw>1P%CN-wp,kyV:h0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dc87y_';
define( 'WP_POST_REVISIONS', 10 );

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


define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'philwornath.de');
define('PATH_CURRENT_SITE', '/cv/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );