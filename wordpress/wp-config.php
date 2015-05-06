<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'basketball');


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
define('AUTH_KEY',         'yu:|#!gGxK}|!Dv|4Ju>+J0K!N)?zqt3^y4  BLjgQ@HqO.OAb~4;d,E)FsB[34L');

define('SECURE_AUTH_KEY',  'ViKX[sY3Vh@(N=.GK!,j jr,RRslNaKQ>3;?pZoe~m~|~sNG,{0|*sbWCnPq3BPt');

define('LOGGED_IN_KEY',    'AYl3}N/>U9-{D-VN36z|97E~l=yF:3J P*u[SN]vbN2kjHtV9.}siSYDT2_&XWtg');

define('NONCE_KEY',        '9<Q4!$#tfPV+mL0=867alYjHuVHz_@JFuv_GLLE5Y{!]d#Kz{EzF&-[ph5||a|L{');

define('AUTH_SALT',        'P)3WEGKC9(Hw1/?I%Y1`=2+f-G6x7iUqOxW~rZ68E6MV)QE2#VjAH5yADms[9=[@');

define('SECURE_AUTH_SALT', '3SbObq2hQE>+by,]-`q6]fBg Z+b-RV*<sfLCQfrdA+D[)g_c<qY PFiH&nCMysR');

define('LOGGED_IN_SALT',   ')I,B&I|;_gwDGJVMb=pg;1P/+XEF?!663&)YW#&=u>|GLSynK_MOHv.?,{<:#tg4');

define('NONCE_SALT',       'rKBQ~0:a5,/+04kSG?j O^[LQX I_{lIbL4 j@K<SFYiTIJZnP!{eN>o E>#fhL3');


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
