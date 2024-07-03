<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'kidzuniverse' );

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
define( 'AUTH_KEY',         'Bjo]JtP_ZR;LJO+ZgwF9aFSek^>-M7FS[<)~sjTTgp,F<>4baU&0OQg~N:&Z1<;6' );
define( 'SECURE_AUTH_KEY',  '<!Hb-oT/|)Ru[1CEV?c%vP03MXG;iU-]^xSV_JN,%RwfJ#dKvvg2K4:1YzY{C/MU' );
define( 'LOGGED_IN_KEY',    '.#NwC>*w2igTaH6+5dui-z_i1fXN8RTZF Y[GJk=icX2T{-u-.>khcft26o(O}%I' );
define( 'NONCE_KEY',        'tM0yg]|+Wc(QbNVO{U$d[F%1,~3{8W^A-q@s+h(]x]G1fEJO<JR2]IA]I^s9NOan' );
define( 'AUTH_SALT',        '^q8S!TZASi]QO:hQeZc_~2SHxcJ//-!r5I}|P=!Xd8pCqqNQ*ToY^GIMV1w`%.dw' );
define( 'SECURE_AUTH_SALT', '%O3Zv91]eq7Y@^|V]RtcPGb?au]#Uc)+F$X9 6;~0&;9w=@(c,1]OiKV9beW~%eZ' );
define( 'LOGGED_IN_SALT',   'lP*9Q:BefNT|qRTW@.E)9j_A,Z7wRsoG|1o}z_&M<P;UO!F<L~,{6/Y<?q`4ydS`' );
define( 'NONCE_SALT',       '>XFL#m>B5a;[h**qvCw[~ev[dK>fASvrC/k%/3Xtqk1=`eK% jc+dF^lw)*TDabc' );

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
