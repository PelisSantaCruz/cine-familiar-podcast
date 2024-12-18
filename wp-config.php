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
define( 'AUTH_KEY',         '&xo!I|(p~%{_XgD>bH29g3pm0Tjznk?088eaBt@f]1*kCwo+8(+yy$7{g9)-HUwS' );
define( 'SECURE_AUTH_KEY',  '8w8acItpe|Lza :*8,9H5>6;@4s[54G3{54XwZjV&KjseeuRPCkn+:u9Y},d:@IE' );
define( 'LOGGED_IN_KEY',    '{Hij5+4w.jRzX:&TPbJY}Gl@_PMyRm?r<*hWe,&1Y=|}DUh_ndr3xsCi7i%d9aH}' );
define( 'NONCE_KEY',        'W|q)}44]7M}s).Op/9{G<4=}7<8MkM3j_|#NzRb)cqLqARYAKh-j rE~G8:`V7fQ' );
define( 'AUTH_SALT',        'Cy,Y#*5S,si:Q2MF>_+o!T#@&D[:QwX(6<,qW9^%3{~,p:fqFeoEn$TB?YNe;<ME' );
define( 'SECURE_AUTH_SALT', '!<bo$//H16>D> J<ZQ$ |-1]4HF_Z1LO5@qBH%^$+;@}W(E>I>w4gI.|W`{Zv={{' );
define( 'LOGGED_IN_SALT',   ',A:}:lVN1^JnVZnthIV4ASpq0Z@Q%K,]WD/Yddjyv%9U3h:HSUwRB7}R9V.X==Y5' );
define( 'NONCE_SALT',       '}5d?9:pPhEcq6S%sX5yP6YBUXIJTVjJv6~y_W9s:=A2K6Xy:85-G pNey$pEvJ22' );

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
