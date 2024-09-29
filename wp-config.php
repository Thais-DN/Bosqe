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
define( 'DB_NAME', 'wp_bosqe' );

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
define( 'AUTH_KEY',         ':C*Ha}:R(A$98Lxb<}tn%gx3DeX6l$Ei$;vc+1N[c]^p*Pbpy00:@*@~d*nA=;QD' );
define( 'SECURE_AUTH_KEY',  'f9wIzSk*D60656/3HQv|Z9T~Sef[h3Sz,H839~x,N 1Razbd;moxM<Z,t0D<,VH^' );
define( 'LOGGED_IN_KEY',    '  ofexjHQWA^ziD#]hMg#_Cqc2{wl`5iMaC{mRG~`_NkJdb^2~r6Ce2$L(b$&z;g' );
define( 'NONCE_KEY',        'B)S!LGM618{aC$rn_%{K+|x|Zpv;lrqM,5b`x40lcf^dPpJL`):r.J<%]t8gtId4' );
define( 'AUTH_SALT',        'xVer#4NNondnj1F0-$n+A*hEO iym.XRU[Sr$QS91I YBU(2&TL<QNMcp#Mpk*Zs' );
define( 'SECURE_AUTH_SALT', '6{kn{PWf(o=0`,)=fhiL*P#jp__*B^fW~)kq3q[vCZl=@[3?KrV~@i*B~fv!kaq^' );
define( 'LOGGED_IN_SALT',   'QYS3g!eBk2qQ!L~$yj:7;]%=Bt6tyBHg0LR!X4@1iAF-.Lh!&b%~v]]0NoJ&q|QL' );
define( 'NONCE_SALT',       'zH+A1V(1#`tc)NeaqAe[L9<b^m(j3zN6eXm*45#Q,T[F1/OK$g3A(bpt$.Kbwm6o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bosqe_db_';

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
