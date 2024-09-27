<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wholesale' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(2r%H67#^<(@ij05JsI.,dNUAq5Uw&@_4u)N<jua-EgH$`cN^#3]z-NSpQ}GY24R' );
define( 'SECURE_AUTH_KEY',  'O&B7U7fM=Y;i/cfvj:[d1<DAEjI4MFIsJ.sS!V*=u7P4q}A_bnU)9,TL4!O<PGv|' );
define( 'LOGGED_IN_KEY',    '?{;t Y@)FoLpU.FLVX]KMXXY5#Ms0y!)2j)lnUuRi^VgyECN79UANXMa ,+./C_^' );
define( 'NONCE_KEY',        'P r}|XFRDrb4?yl7yIdAnL;r[U[]AdumD8zByx,[MV4,2IgA$ 7RT_SkPPGlLcO:' );
define( 'AUTH_SALT',        'gRK==#ZXivI@7WIbm)pU 6y*]7XYu>tu?>q~/{Q7cn}=}>d?UD88X>iH!K4?1q.V' );
define( 'SECURE_AUTH_SALT', 'XIQ!f<F{9>GfZsE)xz.S) Wu.4W}ymO%ym?L{9ew4$3P7ZbpddjnoHVB&FXY.X%q' );
define( 'LOGGED_IN_SALT',   '@0P<=a3w-wcMTei?DHzK43cL#RDDQ$%+~>?2%S1^D2+W!BlJP+59XubR5hD9sS~I' );
define( 'NONCE_SALT',       '!eIdvt2l9+mVMJKY:ywWeY%nta$6l-],B@G<Z^u)M06ti,!pPv2aCw:-!?Q;Y$d1' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
