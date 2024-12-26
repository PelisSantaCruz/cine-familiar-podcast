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
define( 'DB_NAME', 'podcast_cine' );

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
define( 'AUTH_KEY',         '6FS>k^)m7Btru8Cmp*6Fz?*h?lET2PA?-&,Cs/%lG|rEZ}7dmJt(y+.#v/~cEDA+' );
define( 'SECURE_AUTH_KEY',  'UOHcHGC>cWx)=ykwBf6gR^,abx+7{B!$lC)m P]#vp=hYv5_U3-]g<rJJGG*.w#n' );
define( 'LOGGED_IN_KEY',    'b@h/<`C G^1BxF|jMu5-t*`!G_8 SrKm_87!%2*HL1U=uH1o`P6iM~R(W0%=r=`3' );
define( 'NONCE_KEY',        'h{<jljn_t+57 L^&Gdi_I8)0~@>_lvi|~7+Kc)KP!~z52cm[8*Y4#4nCuPGB1g1D' );
define( 'AUTH_SALT',        '~NnqCzYO2%PMH463)c;]d|_Y_/_T;JVA}T>fu;giVu;K@j}f!ilqMf= |AUG19P9' );
define( 'SECURE_AUTH_SALT', '[_9|k{yMbaC$?W405K1_W$ax_4W68,:a$!+g${jVd<h_NG3=) uH[Y-d-Z)h?LVn' );
define( 'LOGGED_IN_SALT',   'HmWRGo(ZiC*VO7Wg<U_1ltDRH RcP.vD7kqepxYaT(Fgn8NK,/k`Yjd=^XFfTJdy' );
define( 'NONCE_SALT',       '>YN{P@lZYb_0XaYL428mh} Vj8xP}@*MQx?%gowQ(L+?#MuZ-/5^QK9.fw$^HHAp' );

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
