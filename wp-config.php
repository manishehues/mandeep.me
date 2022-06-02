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
define( 'DB_NAME', 'mandeepme' );

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
define( 'AUTH_KEY',         '=|M8wuj+.?(=S^nTZ^7`}V7+euq?ihp&eBdIu=Cykcl*f0}iT.-oz}K}JV+$!^@D' );
define( 'SECURE_AUTH_KEY',  '}FeyN7hYfWhXl{DM2cPleuSKLoBIII|vZ=~G[EAn`Zn@YU^<TT53TET^SGE&)GgY' );
define( 'LOGGED_IN_KEY',    '>5q2?zL:o>YEh:$jj,i/H_1Vb[[=&VZ{_Vn MU!Cd(&X)@9`]]Z_vgSDKk$__*?w' );
define( 'NONCE_KEY',        'w*Iy@q/9NAdOSyVNTcEi&sId,bp,;5PSIv}|uWYWE<eeNLGS32;4ff>9 5? ^2`u' );
define( 'AUTH_SALT',        'o:w{;EC@]wx4B-nij/KaV6Ay-#c>/hiwQC>}<NJ*TPmX@K{pRk@Zw,#goXL$*D&J' );
define( 'SECURE_AUTH_SALT', ';UE@6a9=>&,X(C~vAyLtR3(5x<v(2=67VY]Y;kb!x<(kSwjFSFVnkxTC20,E7WZk' );
define( 'LOGGED_IN_SALT',   ' $x)@*2j{(!y.8dfJ/gDv*F],nQ?5M.))yeduM8=hd|}3sn;I,Fp?zQ^K;U GA1/' );
define( 'NONCE_SALT',       'r3>o)a7h$}Y+6;*2An}zB_ovY?p{oF.<gA:&~j^@3<d+(xd+JpaDGWD({A#@+]:d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '641ms_';

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
define('ALLOW_UNFILTERED_UPLOADS', true);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
