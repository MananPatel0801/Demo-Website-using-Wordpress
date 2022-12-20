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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'XVpYAg9(LSK6&dz&r`#Ug*b*2@v5;R=wZ/v!3.H)q]`]{Tx]d9$f|{HqGwT#Hn/>' );
define( 'SECURE_AUTH_KEY',  '}N-G%_k%T2kya_5=ZF7]-9<l0ec$^pc1&wK=QTy^cl`L^`iC2yUR3Nio5R%a7AWb' );
define( 'LOGGED_IN_KEY',    'V2(uNSTG;qlmE}:1^FzR_,0DNs*rQ*Kq[fOXy>!YB>9%jddd;-Qip6zEZ2M95 Rx' );
define( 'NONCE_KEY',        '*+^xMfE,&lHPr87*=@pQ;PYr|_+8YL=;rG<^d:MDj#)==q-#k7ARND#R(W1KJ.=o' );
define( 'AUTH_SALT',        'WPMVcJ?O|{O3pqa#i>kzUi<^`Q6n!F Iq-S*VTlP;9r85Nf|Blxk5Cz+X>+5+7/T' );
define( 'SECURE_AUTH_SALT', 'fJE.Ty<Bd%4NLK}L,h)I|NxK:M{{>Yde43bZ2RL9.PhI9]^<NfJv]{EU>l97WZaQ' );
define( 'LOGGED_IN_SALT',   'BRp[<UXgQgqy,Hy)}G6Nwp0[K_^~Pfz,W>`4n+7as(R3)G5c&P,7)8LgPZF9Bo[4' );
define( 'NONCE_SALT',       'Q7Wl_u4Of^!~QDt%>S,DCG43`Piy0Xp>2wCv7zx<{eVP|qs307PeoJPavz+ri,!|' );

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
