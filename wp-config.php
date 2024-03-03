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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xy1J(H%y,;cdUW:.nwBfxm*]J<Bk.MnA#3&GqDXxo5l>ULs6z_+y@VEM}|)1-5=D' );
define( 'SECURE_AUTH_KEY',  '*~#tTa&[v%@53[l0jd/-tsONbAsh36b<UrwTn^a>_=P|=V|$fNZ[GrAYZ~C6<{Y%' );
define( 'LOGGED_IN_KEY',    'lC|*_Xl6Z*w~6vQvI#:i*M}o}5ZE.<y.8w+HwNW,>8j$n0|<QOuBC7#i)@1X=`zZ' );
define( 'NONCE_KEY',        '*3wGJb}l63(nPwyI1vG[Ed@X27FIYx,(&mbUpS#?[lF3R#6svydl0kJtV:,!U8@Z' );
define( 'AUTH_SALT',        'kZvd.LH[z4_>b6.`ibsU>P4456Hj/T^0pRSMS;qhflkiER<pi9Y]H39 ZNfsxVhn' );
define( 'SECURE_AUTH_SALT', 'GeH377PKDwg$jv;,.Kud7win)N?@-EbX[/]v0$y:s[{pI0[VheRG|/Zj/48%;At9' );
define( 'LOGGED_IN_SALT',   'Tln)&T7=K?Y(_%BjP9dfW>Fi72jlW-F:I?D@OD$MKU4SV,|he<VhCMK*EB6E$kmp' );
define( 'NONCE_SALT',       '0D6J1 6O~gvK_}s?/7q4mwcN0>nE;~FZ8j+T/&HGJnE$r][. 5NO^TQb}D(O=CRG' );

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
