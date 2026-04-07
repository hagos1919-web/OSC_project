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
define( 'DB_NAME', 'osc_project' );

/** Database username */
define( 'DB_USER', 'student' );

/** Database password */
define( 'DB_PASSWORD', 'password123' );

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
define( 'AUTH_KEY',         '+b)G5*E! (99p-=0-xe(./E[m}J2vszi#:eCVPpqU A >$o>f8cK|y?5ROS.GgWk' );
define( 'SECURE_AUTH_KEY',  'mF(B6d^|533AJnjk2e*BWY7IU2hvSys<{7iK,s]Zg:o_^l[*a4[fX`G4I6OdIFN~' );
define( 'LOGGED_IN_KEY',    'Fs{G_a tKel)Ml(XP@;nrOjQ{M5(%KE7.k]e)~GVwF)bkIOKq(`)4/S?`gl2nrHR' );
define( 'NONCE_KEY',        'hROoShik]8.cRf%z1Nb0T^Ie=Pq/1X!tkwQsPHeP9E R*-A?Qe$xj`^I#^2qgMtx' );
define( 'AUTH_SALT',        'Pd%u78Ak2f5m[!a`Tw.96Aiq% w!7o0l.3_d iGfy&B:8L*J&UAaEBpU])~eUK/N' );
define( 'SECURE_AUTH_SALT', ' IBmH,u27*e#&eWGBid2w6g$Qf*)%|X,Mu*nj5St(ON?S|NYre]o+2>LYR{t:NEw' );
define( 'LOGGED_IN_SALT',   'EO_i[.+{B%joz.3V-/[G{/uObt9e.Y&Pq6Qf;;>kzOukB_|)lYq*[;-3-d0:Dg|t' );
define( 'NONCE_SALT',       'd(m6DAtjQ{N)`5I{k$yHtNtNm]7%c]mEX.J^ BB6}23m8wAr`nx&A.=A+>0_u# #' );

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
