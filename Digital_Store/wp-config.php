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
define( 'DB_NAME', 'digital_store' );

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
define( 'AUTH_KEY',         'U~;r6*WCUs#&LK7;i[2I>g^?dECXm$X<E;BTTB6R+S|W|?6>F<|2 M(M9E+:s!Ux' );
define( 'SECURE_AUTH_KEY',  '|mh9veN?~phAec/_#bWzpJ5[pu/<>2ju4.D>Iiz6 g;Rk2R}(`<^6sZ#OvWX@R8|' );
define( 'LOGGED_IN_KEY',    'YV;pdPRg-%/;`)S$p;U~{He[0lw=KF`LvZA.+k+3(b<F[%(jD6b}QXfFK %lm^6c' );
define( 'NONCE_KEY',        '[6]T 4b.EKpEb`LUC,XHd!,xT,@nd(aWT,*I*z*;BG>/.{/.!VX19[OXl<)`])k_' );
define( 'AUTH_SALT',        'ifsMV]#6Ysz,4r,;.die$)uWXa@?p$L+X(As]b2(I>5|$,/ym>~Lgw]]<}YR|%$?' );
define( 'SECURE_AUTH_SALT', 'z*8x!(p*UyCzpc&2$`w7e56vaeAH;P?tH3Mv/W2:Kgs[1`> 616%Zk*tm!mmTzpu' );
define( 'LOGGED_IN_SALT',   'q2iUeh5%.gdTVFxY=TIp&_Q&a6zT4&hh);R73$Ew:; } <Qha1Cb>&goD18)W%K6' );
define( 'NONCE_SALT',       's*Fc}qvMw+s{^)t3Ez;Cj&_ZbAEQ=F6AQz2Qkg#nY^^X=.Prp}{1F5BLw~dly)w`' );

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
