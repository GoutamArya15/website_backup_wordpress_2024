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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website-backup' );

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
define( 'AUTH_KEY',         'IYV:yY53E7*.%S(W=mh8?2&<JH}W@:dB (JyiX72:Q13?-afaw_SS*kYO9GwdAL(' );
define( 'SECURE_AUTH_KEY',  'eX+!Tcg*2+<iu3,b,hs~zc+_Zs$Q6G|dP%wftewr%!C+_Q%*)(qgWO? oQi8(!;}' );
define( 'LOGGED_IN_KEY',    'Y6j{v?)0(te1<Y[9=KOW.(3-)D:(R~ .g5*UA{y)?^K$Odcr)V(3B^I;%ABt]rd7' );
define( 'NONCE_KEY',        ':Memz3?s<XuYQFmT6]jn_J.ee$RiNVynGnzd_>kObu(yi^,JU>lSvh,&}Cz{R#XG' );
define( 'AUTH_SALT',        '1i}|CI3tZi~uf,xwmv E5(8FD4<hiU{fZ]vNX<R=%=KgMm3DdaqAS=2,f1C8vx-3' );
define( 'SECURE_AUTH_SALT', '[ohnN@g:xS_d`.pnfX48s8!ZF H[u`C|#zKl2We+kT_E6+2tCq<`.=qJB ,N}0y+' );
define( 'LOGGED_IN_SALT',   'WP1Z 0VbBWeo/4J(D9GM+:[s5ReY|yz6*f+6`OvuSr61qp0hbU0@SoJ4=H;Um+kt' );
define( 'NONCE_SALT',       '6d0bu|aP/Rbvq$fw;]IC6/)lj)zO5D@WcrN=I9;o)(^-L_udaM4Zc%UIu]k)WBrr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
