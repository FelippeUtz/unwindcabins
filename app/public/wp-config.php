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
define( 'AUTH_KEY',          '@_=a<5lD0bjnF%f5eG M nY%=@}HqO1}iCh I!WLh=`}dEKHM_y<7d.hL#[kam8G' );
define( 'SECURE_AUTH_KEY',   '!g0i4Wv R)*P<,doK>L(_;Dkl_yrWQz-P{:;Q5brca*eK5ZcF:b-Xw+ Y#0gZt+a' );
define( 'LOGGED_IN_KEY',     'd@O[eV`<>hg^Ml~qsSAd/l(_Te0&&XZM2Rw/qMi(E>6}PlvDMz+2j5$C/:$C>VMn' );
define( 'NONCE_KEY',         '>)D%JC%f/Ea.nwEelJ}xgeF-LI?,}|^d3vhX`VZLP2N9.N!1]#$M, wx@2#q,.C#' );
define( 'AUTH_SALT',         'ZCgVL|f|D)E$PIuP!IncJ8R8ew4Ktwg KODF~L&^k}21/6f4P+&6~6sc5LEDy(Fn' );
define( 'SECURE_AUTH_SALT',  'Ez!/VY{8Y5k7,h/.$Vp=OPbUyHt8)Fz/H_/$C0w`rAJlqVbA{S-RNhBqx;}KB658' );
define( 'LOGGED_IN_SALT',    'EXf!8JpHE],xu0]UsXi1gRx?zd9u#OU_b|xVDGv|8,Bs_:?vweupyvl|#z.x!Bqv' );
define( 'NONCE_SALT',        'PCGNX..Wo,q-{Xk>B$g+Q$y^xe;At4p.Z<A=GxJwhe|wLDg0Pa21m}QJ`rM${B{V' );
define( 'WP_CACHE_KEY_SALT', '`*8(O%BogVQF@fpZ.QT@L.ysyXW.+T[Lea.7l6>~Vb9`X_zA[lW|e%6x<T5y.<7N' );


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
