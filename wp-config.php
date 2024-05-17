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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'market1' );

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
define( 'AUTH_KEY',         '::SS/kE&skC{bQNWDUC=Ok>s9]IRpm`|qCgFO:mKJE)V`&-oZ8w|}SyEBV`t !{/' );
define( 'SECURE_AUTH_KEY',  '6^|HR,4>]D%W-40$7(:<(Pud9x{LK!7(N *GENItyl=EzXXj1R&9hZ|b_9G}G[h:' );
define( 'LOGGED_IN_KEY',    '#7y^^gsA|HVU(-FYR|whJ1hGz~-Ful80uFlo%9)1WT.!V6#>#<}7@PhI&_#:H;2w' );
define( 'NONCE_KEY',        'IB|8-$<b(l`ug,#PpXZW$e]ngu>*)R@nD7mWG2Ci:^ot~[ac<)BMRJ81o>-`Ut[T' );
define( 'AUTH_SALT',        '0717b{oD r>)U<Y|pao+G`^X=|T>i{4nJ*p-CH*vQ*k)>h/+&Mmo`2+HoCsa5gTQ' );
define( 'SECURE_AUTH_SALT', '[!8<^*C#O[`<xfCGldDRQgvA3,bD+6oS6)JV_qA-|?oA(&30_g=Tw60S$RVn~TiM' );
define( 'LOGGED_IN_SALT',   '::i{(3Q=-b@(V=]v`|cB^K7Y9)Q2pX~r`_8Ok1&)uWxxobvvHb_bN%emRRy^0Ho!' );
define( 'NONCE_SALT',       '3o=G-6 999(`W |,kS8OU<+e&dWRzh$$a&c5y?UR|us6:0siB&&e=I>>FL@3[^+]' );

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
