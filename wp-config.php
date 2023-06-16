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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '5qv{O<#,G)ZlbUSFkm{4(tvgNXU9(AI%&qe=pq4-x,LPN0M<l+n]G@MBw/Jz?LML' );
define( 'SECURE_AUTH_KEY',  '~y-o+/|/$&LpzCsS~^/[prnB=oQd]qed&Qhu7P3]s5F![%3t,ftl ;2%L@%Xl}0x' );
define( 'LOGGED_IN_KEY',    '5Dp^l:_Bd[H)tW>w*?p/zt{iQnA-uhC_X=](1-WAX{n;{QQC<r*ZPkwn =v[nE}?' );
define( 'NONCE_KEY',        'E%zKA:^+0:Kut4$8h:E,*fM:6mo^|JR2)I!5%l7)=M,mf,s}TL&J|<~3iT{6@k5_' );
define( 'AUTH_SALT',        '3nROpc//@q*7AhRt{h#BqG+I5X~yuvzb3On&>Gab]LB*iyv=^; 6_9}>M=t$yDLY' );
define( 'SECURE_AUTH_SALT', 'DH{S~].<MD0CFRhu21gy5&}x6t*KGOI[ktg2CuUz%_V*GM86L~Drhl!#@?M=H4m1' );
define( 'LOGGED_IN_SALT',   '5$N[AH&<kd:h0a,|qw{yIP8q:a]|vY/r|+iZ.`[<A0;>Q.@axd+N: 4&]A`{/w]$' );
define( 'NONCE_SALT',       'uG@}RrGv[tg$>0Oci>q<%gq})Z/xS:*x&hrJ6M>WK1u=9SG!V%Pu2]eau,djL4<_' );

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
