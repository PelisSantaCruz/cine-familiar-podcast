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
define( 'DB_NAME', 'peliculas_videos_copauyuni' );

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
define( 'AUTH_KEY',         'i>M~o^#)%Bj0@fofHF~;0s sUeiGo@`s/QnY_=CeTteZ,Ei!j6 };XC9~:&7_y*K' );
define( 'SECURE_AUTH_KEY',  '[xsS!tApF2UU3^DD&1=Jhd%!V~a8 r/=c;pBTqb.J!MV=5j;>a,{9+6u%Q)C Ldz' );
define( 'LOGGED_IN_KEY',    '^H<;cU!teCE9TN{TvW8~G?wxR&D{r]QA[KpF{u5N=&?C}jAf!bMPNPw_@oz0GbI9' );
define( 'NONCE_KEY',        '#Ax%&|JCbToMG.TR|8B|77B;.jdUJnCSrB&U2!d6E.{YaV*jt~&$wx?&*sF0F,t4' );
define( 'AUTH_SALT',        '4>39ypo]IXG-FdmNS]CU*(`3= {ql`bbd9SM&kx6Fez6IwbiCh51c[Xd!]nM`LAF' );
define( 'SECURE_AUTH_SALT', '&.l$Lv3Pi)jhs,!7|j*=*!{=<6[[`VoT=~m(nr5ssDH5@!:3xDFh;-u9m~e,ks$x' );
define( 'LOGGED_IN_SALT',   '|ufHroOx7S7[/dwr0]vFT{.B1NC3,~<L^DvQ_<}+fa|B/Bhoq(`sEOd#B}}bYVTz' );
define( 'NONCE_SALT',       'Of5.a)sE6N.3p?hdV^JjR82HNmytRZPF4)b%=mqT5&(,rfAGsV` 86y9eb7l!M$}' );

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
