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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'madatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!eRBp4Bn~vXHUH_iPSOTXh$~X2vOiA1 Wul[;S,:(+#9UKg {1_$EEtr0$n,Y9XY' );
define( 'SECURE_AUTH_KEY',  'KkvK/uDCzEgahQ2l#LlMdJZ?^B|$vxp*vkUf$%eF}IrhTxPN@nDjAN9uF^m!jm/q' );
define( 'LOGGED_IN_KEY',    '8[h)Qpd4nqeEkmw;:w %XMI.G*%+ETJ;mj<MA_8R]!;rAv_}n&it`jyi~ZhOX=Ho' );
define( 'NONCE_KEY',        '!uw&q(4|OOeea{0npjDD?_~eb/D=-)W=H./O&;Q%@O_Y?1_vSk%wu<1`lInKqpQx' );
define( 'AUTH_SALT',        '`bzYij.@b/<6l9z0f]=*F&AV<Higig^7j#0A^Ws.s:qZ*Sj+ks$4+T*PFeef{*Y/' );
define( 'SECURE_AUTH_SALT', '(60G%aq(cz6y-AgE72IMoM<ZR(#}#d[l`jZl3Ki5#Iivgm!<R/0-c;]eLzsXuLej' );
define( 'LOGGED_IN_SALT',   ',F@+p3YN Pn<j~>QnP3/Q}6sO9*ysZo=&,_d$.^F!d2R` @zPgh[N]k~lT%5Y}7!' );
define( 'NONCE_SALT',       'L&A^;}0rhb0e@Sybg7>hm;pbZ*2A0Xl%9t[qkl|>sfDcb}({&`?<pZ/APsum?Td%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
