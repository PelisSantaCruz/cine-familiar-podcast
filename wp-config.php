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
define( 'AUTH_KEY',         '~^}h!HI.9B%Z`KyzR(9^sHM7tMxF2rJD*u<t:_j$lo@0Fm$Y(7YjVrV#x9=5TKVZ' );
define( 'SECURE_AUTH_KEY',  '@ E7x1AR3N]|EN_fPrc?Nl6TM0*^A]>NvX?K# W);n iDK|gRwRobAkP(;cH,#B>' );
define( 'LOGGED_IN_KEY',    'ek2K&h.y-HSF~ctit2XAXSO:e l&.M]%.p_,2-t#n_)|{hbATNR3>G_1J4ibGm%}' );
define( 'NONCE_KEY',        'em14RfKdzaT4DB3C^ywS:VDIi(*p9H,(ND<r-D3T]]^_R^r*6`ur5,,D@>>^#>g^' );
define( 'AUTH_SALT',        '?|^19-(v#]CJYyE|~flo=*t{7Dg77tiB]0R9)MI?FETK0aBUVqRZDZbJT3T|tt}T' );
define( 'SECURE_AUTH_SALT', 'S7ZTGuGSHAy`a?HK nYtfa&##N9W<dT=bPjX21Obb{j|Mv#Au(Gyq+7(]SBbGj<b' );
define( 'LOGGED_IN_SALT',   'pnlP9pR&qFm0EDbm F17ZL0s6l(%Uz`hcoS!;Zbdhp)+f2esZiY<]?gkFV..4.vz' );
define( 'NONCE_SALT',       'n$IqCjh%J>qd<GxGIx*7l4g}Q uma<WoHOy|n5WK _$%C@;[e^/$Gi^S^m4Krjaf' );

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
