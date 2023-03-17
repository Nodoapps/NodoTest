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
define( 'DB_NAME', 'testnodo_db' );

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
define( 'AUTH_KEY',         'd!8zJ$|E(TIZ.SP]6lb)r[M{R0H5)fcJod m=XMQcT]m|08Vl-?Zu}0wGJySLr<D' );
define( 'SECURE_AUTH_KEY',  'J0y<h)*6zcYyChoJ@76 i?jvxn wfakU>PIr7CVOuJUHevv*u8>[513Bta0PH~T+' );
define( 'LOGGED_IN_KEY',    '?-]0j/M!1 yRt hX{iPNI!a0AfXn0x2oLx ;?SI%*}0tzkW2h?|9O[=No^g5vB/X' );
define( 'NONCE_KEY',        'EhEv$%gK#Gdh:^L=!7!&w8u2-t[JF8k/> f%Ui+#%u,K@_]2thegq,h@:wIFx8wN' );
define( 'AUTH_SALT',        '6,3%Fq&=-,[,!yoUe;LlgKbvBJAIxvq<RY|N*s0MWU=<On;p<YgBG_G~l,dv6):9' );
define( 'SECURE_AUTH_SALT', 'Y;52aL#^/JD;<rH9#<:Oga{!o@z/V+NZz+0ky8B]=+6t|:o>;.m|iK?G*f/opC(~' );
define( 'LOGGED_IN_SALT',   '7{PZyBN>J:hKTr2=ma?(/z3~Vvz1%7=:h_ImYiu*J(@IujVxOqd-JZ_wV]&pE*.*' );
define( 'NONCE_SALT',       'l8-ev~^iCCypPi[%;lcyk%kyIj<Li#]+WlS{j?Z|T+};m&m1I/%9@`^>ra) d5e+' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
