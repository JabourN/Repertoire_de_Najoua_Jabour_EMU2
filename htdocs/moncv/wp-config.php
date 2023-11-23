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
define( 'DB_NAME', 'moncv' );

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
define( 'AUTH_KEY',         'GEbuMgOVV-LTo& TZ=ueN+F`[Q9xIK.W:ctL7bmAP:Ii7 #tcmux!c Fr=cs<m98' );
define( 'SECURE_AUTH_KEY',  '&%YVCIq/>%K6J,X4Ve+]k5B|$mg2^GoTzFcpR$2K}VlE;ztLM09ZxPK4EJ k`?s:' );
define( 'LOGGED_IN_KEY',    ':--m0GP}x G>+rJJOI8iOT,2gZ0e-aTnB]xNsJ5+o&H&>mGbhU$Q@4t]FH$Lzbw@' );
define( 'NONCE_KEY',        '.SQ];|f*HeaXAc+IbdSI1RwFe3p`TLav@yGsk)H@GZ%p.gcA4VHCtdtmq9G;{#g`' );
define( 'AUTH_SALT',        '%#Vx~j--QrsR}2eCXra59T0c*SUoYvnP2Qh8#<kh5ux;{h-GB=a(_>GW@D]4:7KI' );
define( 'SECURE_AUTH_SALT', 'Usudf?#>Rb9B}w blm|oJ(ckN-0AmD?![IAzG]F9!%qbAMx&*e/zq6Fvp#hr`A`$' );
define( 'LOGGED_IN_SALT',   'T1=SLtGyV%K2?Rq^4c]]hTu6iG)t=#}oxAb?^f1=7ck5_ W#NazZ_:AS:I0H1x!7' );
define( 'NONCE_SALT',       'q[H~FduPm9aIb<UoBow<c:4xQBzega5~ >,vTbYUr;%*iYV*Mm[rSKH;#NC_YS:L' );

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
