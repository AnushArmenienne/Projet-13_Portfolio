<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'yiuhn6vo[0n-kT{0j7Zd%6B^Jyc{wcVJx:c~oA7k^~ns7m;`?4%^bPHT_Ij?c.43' );
define( 'SECURE_AUTH_KEY',   'NA`+ ?@z87G-y%/I^% *<d#i27P.@-Zm^mvSn4XS28kuPHuST`I!#;xnRk>@.SWG' );
define( 'LOGGED_IN_KEY',     '}RnfW=*Z`t{SfJ~$X8<N?~Z5QOsxauCMoqOXgYH *BuSy.1O3D-/ ecj^Zvsl[,H' );
define( 'NONCE_KEY',         '[D9.VHScC[In3uV!-0fL0fH]wEhlQ^V$cFLQ~w-c7[?PVhcmG{-i+hNm3CI;WiM(' );
define( 'AUTH_SALT',         'OiX97cj)FY2m0_hyn`>Z[7..=#lmE8(]vP}hWC&u@LD^twB|IpIFttC<G),8RhMZ' );
define( 'SECURE_AUTH_SALT',  ')z%VnUOBijpOX>M,9MEPRfIPv8>gnU$3s,pzR dCk6hxBQtP]K]HDOSpy:7,K^z#' );
define( 'LOGGED_IN_SALT',    ']1[4GD$Ov^&IOnbX9S-7~+B}] [*:^Q@jUtDVl?k^B/HoMX^GSu~!6tPB#8@RQh4' );
define( 'NONCE_SALT',        '-; R,}EsN#<XTHpUgkU!=p|k))gHlMmD_XF(jOM.,Y<z#` $%.TyM$}!w!SNVwPG' );
define( 'WP_CACHE_KEY_SALT', 'Hg|ucZv;E_a-HamE9Xk1x?p1XmBSzIMXOzcCj|r 8=&QYr`7)SJJ>VJ%P7`2a253' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
