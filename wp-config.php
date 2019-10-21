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
define( 'DB_NAME', 'web-dev0-ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'web-dev0' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ecommerce' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3r(#<&R*8cZJneO,H[^OsN>1%vL&Q3p}hyjec]5Cx:GMFOCZEJR(q4KHYP6<m8}5' );
define( 'SECURE_AUTH_KEY',  '2Sv&h:nPcbSt)l.yp&0SGM.w>*kPsD41cQ^e0#bJfDV?4W5PJI!4.Utd&(3r|HHa' );
define( 'LOGGED_IN_KEY',    '6yfVXkyJTBTgNL(_:~n1HsMMsOepYd4yS=!X!`#K$2yi]6/zCyupPSFj4eJY`V1@' );
define( 'NONCE_KEY',        'R(I10Pxh2^JV!@MN#wz6^z3o[vUWMl2I72HnHWZT91/ffo9sLJ60*Y*6T}Q@(f%M' );
define( 'AUTH_SALT',        '+43F.`*%$M//b):b#cm ?<9mA{!a#(8prCa*rA4BZ]u?3J*%68]U+e0@UxJ>5~f]' );
define( 'SECURE_AUTH_SALT', 'g9%RRBoGFGFT<t~/+fz+!+|3}:bM?5$/i~<<sM%M6?X&O*ux#@+]7e<OmM}&@`;J' );
define( 'LOGGED_IN_SALT',   'S~Q3yC=|DNvH,F,n8>XB6DhAQBXM=_z/,a3lE%JRrINdv,<^Ib.W&{i1@|bQ<Nhv' );
define( 'NONCE_SALT',       '4:_O=-vg7roxD8Zq0-pV5o?k5wU2=%S2wLvpZ]N1uU%&V%@ba/Hfj>W{3d[AJ~}A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ecommerce_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
