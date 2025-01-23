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
define( 'AUTH_KEY',         ')cO<CeVne|X]<k4:L$|f;;I7o~-;6bP1i9s|OHhD&]OgD:p_9]7kMSX=R%532c[q' );
define( 'SECURE_AUTH_KEY',  'kwS7P}P&5BE0L({+ vTe?z6f){r<DS@3|]u}A`QHeW#5F//L)C/d-VZ;6X_DMj15' );
define( 'LOGGED_IN_KEY',    'D3@,z*^rlhp5Zad1/>[H#ye#X%&o!=xAa#(G3;jCv yDc@R:`fCX>pf&A8PV*%[Y' );
define( 'NONCE_KEY',        'H/YU`Y!jG6}wah61(8?y7E&wOe.}j~qWyw1Ozi+3`+wdI|w.yCuBdEj<3!y!#}kj' );
define( 'AUTH_SALT',        '6(;Cw[4cHE@9]>N1BA:<)`EK|,dAq/8(`:[Q d|}+$%amYA/=z>x#SSH!`)#.`CC' );
define( 'SECURE_AUTH_SALT', '$_X|a#,.kBr&50{r~6HmE6xXR PuJ/A0&HIL|q~j$H::T<a5w2<ib7U0>Na,bqli' );
define( 'LOGGED_IN_SALT',   'cyQ1*d|+5!13jl`.dbY[8dXHq*5Ds8rt[y&-Hb/+B5b4iZ+_]-u5U%JrnPuGc6Gt' );
define( 'NONCE_SALT',       '1);!+`agzY?L9hW*X&/S@>b|UJm+(:{Gl*0F_$C_i.XT!6poqlqHsn/$c$yV{|fq' );

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
