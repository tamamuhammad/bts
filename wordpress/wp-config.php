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
define( 'DB_NAME', 'order_wp' );

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
define( 'AUTH_KEY',         'kY0N-E^nlFS[}wB:m.F0p*uwtMg 4XEKUx+~?Qr/Z~MP%R)X7p5~!mVBi=?.Lf!P' );
define( 'SECURE_AUTH_KEY',  '=oq1<)#d?:J|DqEq3ne$k(Y^jbU{tJev2rvej9:/UC`s7^qW}U4+Rr{IbT:Y&Q5-' );
define( 'LOGGED_IN_KEY',    'e)uISKJ)!~30fLJq.Wr$wY6Q}FLqL}Du]QMurG,?UvE@:Fgt|OAqm#7kJ4oovZ}+' );
define( 'NONCE_KEY',        'FZI%P!Cvg>8=bCsQYqMp@V[Vg06a@fBPsC[k4*h{=I.vdN1OewL0C0] *r*J]ul,' );
define( 'AUTH_SALT',        'BaV&lT(!z{EO^QQA=W0jNTzVmQSe?(=|n0Ure+Hm.X)j0PV=^<,d~x^~Mwt[3*2T' );
define( 'SECURE_AUTH_SALT', '(3{2I8PJS&,ZI}9RK/!EffZ%a<_c5!eZuyUYW,[=X4zlfmI41MaGYu~@F5(D3/qp' );
define( 'LOGGED_IN_SALT',   'eg)^sQb9&#4of{MoyE3S(+Dy=vxmo7r],{k7{4)k|ArZa}/qjMsQNeKm`ASE?-^+' );
define( 'NONCE_SALT',       'pKtNP };M?b3>{W9N7WLo7|0yVR1C(svrI]JjO8eG},%AeB7B{r*E?4z@c4}RM/2' );

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
