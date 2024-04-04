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
define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 );

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
define( 'AUTH_KEY',         '{keum-,*V~TRVN2[=v+p_^?X)2exu~#8-#qPZ~#Q ^@BnHbleSjSuEFJwNPGBH)N' );
define( 'SECURE_AUTH_KEY',  '<#3i6;_/09{uH/%-l0zsUCHW&LKuy6EQGNio>ROA>**5q~!/1@tZN(K6A%2gl?9N' );
define( 'LOGGED_IN_KEY',    '>t sJ_r}&fy=&n^(sF 9:uq#7kd7a.%s1_&$G.(6tbdq4c{N=D8@IL&}Wk&0_S>3' );
define( 'NONCE_KEY',        '.m/a.TkN&-8xKJ<iN|*O%G6G3DhsEf?CdyaV])E32nLyB%||deX(f!?+/H1!J?6*' );
define( 'AUTH_SALT',        'a4i44qd)THZjNb?`ofQ0^&Z)F!nE}X-.NNI}9/kY`+uvkU>mY)<%ZlF7Gl.L7L5P' );
define( 'SECURE_AUTH_SALT', 'a[i/6?;82oh@*!G]IDXLq_>z`k!G4F ~}nie@8%]#Dk>7<qQ% +p+xlRe!,NJv`s' );
define( 'LOGGED_IN_SALT',   'lP8k;uyHYt!EJRiD=/IRPG)(g$2Lz!>_`SRUeVTQGfcb)9c2qtTtVjGz1ab&P:u<' );
define( 'NONCE_SALT',       '8]}h^@4<-4l5z@uvi?Ri|BSEX3x?2_)eQ=P*:N>+bdTmsbAn_vn>CV!bsEduhuIK' );

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
