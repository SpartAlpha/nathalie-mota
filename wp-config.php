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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'mA.:co@Q`P(J$IjVt(MW>?uw<bXv@6<6VxaB3Cg. 1s;gd~;11ztpvja;1zD3S^E' );
define( 'SECURE_AUTH_KEY',   'x hB$B?;0yUjWQC}R8{s)`C]#v`ky~Uvu!OS3b8Z7K*uceXUqdz*WBf6nE7U.*kM' );
define( 'LOGGED_IN_KEY',     '4+MT#U_kp6$brSsT~EV//KYEQn$i@X8&FJ}]QT6{gXkLkVFz}n*~;m, lO>]4Bo:' );
define( 'NONCE_KEY',         '=pbStE<;ntp],[ilheIhfO%0T4c`OyLdZ+%-c{pU*io$d;4Ny*aq9MbYdGICk,eJ' );
define( 'AUTH_SALT',         '~ub#lIxt$/.a$.L8BsX|d>i;.Y>{;FERIr_O8w7xitt,{,XD]}@-2*QR3A$1o)wB' );
define( 'SECURE_AUTH_SALT',  'jm`Mj4: (g9Z0qM>{bTOrNa31sJ9p}Oir.Ik[lhRF-H6m{)wHf[o>!qAfpxmgB) ' );
define( 'LOGGED_IN_SALT',    ' jskET|8=uhIV>L;OB@3Ex,bp29r9WAk(o@;kpq&ATA-6X)Ykna$[-K+DZXz>w!T' );
define( 'NONCE_SALT',        'DRx]7plg467iIBZ^cP!+XyAvNNw8`F1%IULaH?rdX!=y/{L=WFQ8*u[0UO+?(xL=' );
define( 'WP_CACHE_KEY_SALT', 'EG@|.dXmEpU@=5NxuE#zShuRm DSn~=QEi<RyMy;~Z{<4+`<WfDw!WM};-Hj9h}O' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
