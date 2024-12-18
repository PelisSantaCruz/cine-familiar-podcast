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
define( 'AUTH_KEY',         'HwQYKSRY4bF?z>+`^:8uq!krD<DzCB7QW2yDc0gbpp{Dj)n, &kaB6MXoG %[1S!' );
define( 'SECURE_AUTH_KEY',  'mgVTh5ss:IQR=l-ZkyCFPVMN4dn2t^BGBj!`%Ulk?[`2&}!|K:OXrX1T6>Syh:<}' );
define( 'LOGGED_IN_KEY',    'g,^C|KMYcD+n~gxO[#7zS+95^4mP=6H{n@&(*VnC>o`58c= gj+UX;g:qL-G3h`r' );
define( 'NONCE_KEY',        '?h!W4Q.TZR~g%&GT3PS&=8,AWi{srlb4(yeb$O-NC/`1bt_},>5V2BD-g$o~ENJ,' );
define( 'AUTH_SALT',        'rns-j5ky+V_h<8AmkyO/b[Tv/+#3lU&l7#vCgEzwAU@-b?7K*Y6Hr Wr[PepVH!3' );
define( 'SECURE_AUTH_SALT', '6yN?dVydky<Sr|zv;JbAs;6bCpT)e=-_~2pk xW G@)m$PJX8 2!+s;kRM>mX=+y' );
define( 'LOGGED_IN_SALT',   'RXx#2/pciZ=::Dq.5Pdj8|Rf#X*+>vY/Y);p5O<](7$-up-V~6z%VI+I<1~K-9Dl' );
define( 'NONCE_SALT',       'DX/}O5{)mO=@.265Y$8*spY19s-e*g5ix7y7whP U}}j3?!M{C#FgZ$j3BmHQwzb' );

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
