<?php
define('WP_HOME', 'http://localhost/OSC_project/wordpress');
define('WP_SITEURL', 'http://localhost/OSC_project/wordpress');
/**
 * The base configuration for WordPress
 */

// ** Database settings - Optimized for Windows/XAMPP ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password - XAMPP default is empty */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
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

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

/* --- START OF EDITS FOR YOUR FRIEND --- */

/** * These lines force the site to load correctly on his Windows machine 
 * even if he names the folder 'OSC_project' instead of 'wordpress'
 */


/* --- END OF EDITS --- */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';