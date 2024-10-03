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
define( 'DB_NAME', 'crsimpex_wpdb' );

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
define( 'AUTH_KEY',         'MC$l^Nm{uu=4|-E:G6~M_B%Qxbk/:V?HO9xFYNEWQ9L6`V0 ?(u*6%q2).2&6~vQ' );
define( 'SECURE_AUTH_KEY',  '1W97tFUKI4|W*nAHWI9RT19A5%3:HE{6G!c1{c6[??FwqLhb.QsjLhpUyZW!.C(,' );
define( 'LOGGED_IN_KEY',    'QwSm&ErG_{]wp$T_GdOe)[N;s6j.hi7PPbkh}-.gr_S]0a#%ucCn,{HHY r;dIgx' );
define( 'NONCE_KEY',        '[%G^[1g6E|4nJ{9+f|Qjy,[DFvpFpktSvMR+))#8$eK0,SM7 :q~%FoV!z`|!;}[' );
define( 'AUTH_SALT',        '9*q?CEP,zaT<hT<V?b@l9Y7y5N.8.b;]-|qW^Q#|1b&w9B=Qk-j0;YU0hBd UTNy' );
define( 'SECURE_AUTH_SALT', '=[cBM3=w!E;+eF{~:~x9ll_FT2v]-J>T]Do(h}j5-d8rU,?[Hs,;oN}>}~M.AECU' );
define( 'LOGGED_IN_SALT',   'IznfO.!3B/OyH =_V~*@6.)Kk/T*h~3)G*Af;Zr [%qcnRLRP<@5LQKI%G_%O.!?' );
define( 'NONCE_SALT',       '[tNv=EB!hKX7E@7umNGRV;z~Be]$!m!BGq?F~epjz@Z:~PSca6lj3RExp(4-rvnE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_crsimpex_';

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
