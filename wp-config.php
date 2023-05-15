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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lstudio_db' );

/** Database username */
define( 'DB_USER', 'lstudio_db_admin' );

/** Database password */
define( 'DB_PASSWORD', 'hZ3zT0qR7p' );

/** Database hostname */
define( 'DB_HOST', '62.109.29.97' );

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
define('AUTH_KEY',         'RPR::c,j>Q{S H#2n7FtE|6<b@ZFuL}?v9}|{EqW8&olsm+! ,J`C?Dp*qCg_eRD');
define('SECURE_AUTH_KEY',  'YsykJL *n,d(RKwAyv7A#[.T2|&-+V90*G52&!hxf,1;Ke)17C:@A3+[44;PA-!g');
define('LOGGED_IN_KEY',    '(MkQb(Z@2:w?!e|iJZgq&:_),NE<UcZED,@v/MCbDrOZ:-9ou);,!da?wvl q]5r');
define('NONCE_KEY',        'z|vL]k%V46V+g+[^AA4kGf-p|,s-i2-QZNq.m0nY/sgK;Rxj:$[ER}Fl|vyzM+)8');
define('AUTH_SALT',        '9-f6D)K4tjb|lRFuYlgm^+f]V!n(h;>,|$U +#:2q4Up5^*<+eH^fp?l=odMCr`A');
define('SECURE_AUTH_SALT', 'q; c0-s1M87sMl%x]]/_Sah9*Ytt|ySH:~,^n>fHBsR#wDfyHNkD<q-x!]=S`pY7');
define('LOGGED_IN_SALT',   ',0a58]63$ss l`+=JD?AaDU!G}m:@|8z 2VYa+R?ccM~+Q^e0M2dbu)e=*^1AYei');
define('NONCE_SALT',       '3]fHR,;#}$<3+&%}}6l/v=vl 2^t6BGJsB.:vh*!nao#t}L#tJjkJ%Pv1h$ha4Pb');

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
