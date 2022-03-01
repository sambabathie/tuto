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
define( 'DB_NAME', 'tuto' );

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
define( 'AUTH_KEY',         '?81~;}?3z%7x2R3nc.1EfHUaaw,lWi`|O?QgUWm`)1wmAO[l7]{_2&C;Y,bDyD02' );
define( 'SECURE_AUTH_KEY',  '`s$=YgMmg7,xZOl@YDnk8jh%qN9h_WqWd6QR<?P?xksF(q{D2]wL,6Vv*I/(1=<#' );
define( 'LOGGED_IN_KEY',    'Q9%%_e<.yx4f+_O#+SAxk%ZBQ*6Nbw9C@d2Kp;1em1V:I6Clt*^SdGo{TEdv<2Hs' );
define( 'NONCE_KEY',        '_FFhh{#kRF%CPu~^lDznyA{MAA+tG%x8q#v/=j-i1Jy8hq4EkO%!p1a#`JS9t/cp' );
define( 'AUTH_SALT',        'NS-=em:R eA.oDHI+[}p`nXMXtT;uWQO/<2zF%cWJr}JXEUJ6e|oKI:UW:)pc1)&' );
define( 'SECURE_AUTH_SALT', '}lJo@=H&<jvr&}~`C0k94z#?z}.DPE!o04]-A2}Kz{4KwzLx26Bf^1*!DH%Y*sv<' );
define( 'LOGGED_IN_SALT',   'Yc]h}YC%QW@cJg*k3wHSa)Ug2|.D;YxFj>py@~kU`p4Fpg<pm[4FwVF~7NZyCQMV' );
define( 'NONCE_SALT',       '<d97{kW-~lt!K^O0;[R<m#0CPMxAe^(t(T63U86Di:W`2Z3 pdcEJJ$[#8oRD(!P' );

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
