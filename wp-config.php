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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'food_drink' );

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
define( 'AUTH_KEY',         '_HmIec~~RS+2QTam}MEVZ4A4(1=-/g+=J^i>Z1rUW,m-UaWsj}QU29a/Gv<u:_>U' );
define( 'SECURE_AUTH_KEY',  'OPF>j/9%NBkhj)6O!L8!A2eD3jM3w2!aI0:w4[g%jo5|mlP;^jAo0G/s)`DIlEXl' );
define( 'LOGGED_IN_KEY',    'pe 5gacmKM22z6pR-i)Z2t]&@FeM<JOd9NQY:qIySS:}RchVxllLn$P;Hg}}vO)!' );
define( 'NONCE_KEY',        '`N3ic|>wgw EXwN7,;h5|XTa^YZli$FO`#;a:|qlirL1!Z;*~v+2rkLyv<*A`%.W' );
define( 'AUTH_SALT',        '*O+65AvE~G#o1; Q:%%E!TvUx6WWx7g>q^-|tJ@D4r7[V/Dm.Oa:?/|ousiKt)] ' );
define( 'SECURE_AUTH_SALT', '<^to|A{<68?VGFu>6/NWg(P1j/4{oZ^:O*W9K o$l|Zz e>@3t_;6$^6<t+&e>*a' );
define( 'LOGGED_IN_SALT',   '57$pr0>BFe$|w|7d*cf[)J`zQgyMCp68?{(o t+O*2C_JzY1lM!qGQ)^g{UFoCu.' );
define( 'NONCE_SALT',       'Iwec3(I?Q/3q$F2}?]$ey{t_U`RO1+|a-2ER+eBZKyU(%`(MKHLY4M2x:)t|lK$|' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
