<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'kingkonggym' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$5I:V(;ASc{jAJXaU;OCrYLg6h29Kn8n.J,f(mr1Jt[7`s|:/^A>FjGPxPOCUo8g' );
define( 'SECURE_AUTH_KEY',  'xZB<1m&bS}CYi!I*nT$;w@Ju9[yOJ8.V3ocKfmJ8~EiQO.$%jS5An91.w7[S00t1' );
define( 'LOGGED_IN_KEY',    '},2[n1bY+X1$+NGYM$Wns:jN|J60ES3)~UgiRYZ`1G9yl+rHq{u`Px@Om5vH0exk' );
define( 'NONCE_KEY',        '!:@K):1n0-p:5p<|CeMLRJ,K0Ze!ftNFHRVEGu2Cop])BxqRNk[ h6v>5#/kk5$l' );
define( 'AUTH_SALT',        '7g-5QS;wpdoraPI%e_}g{G[tuWq[fqdL*O&1=NctPOhGcKunLr|4Ij#}N&9o/QSB' );
define( 'SECURE_AUTH_SALT', 'qvObSnm0`HjJ2]S;4=>M4oHpiY7BR]vS/:Se9{K{SRx~.z (=S^u)g?l9a}A3M?x' );
define( 'LOGGED_IN_SALT',   'Ey_`fL($&F9S?JIkCqk d/j3DFI`B~i}&,BA69s4zm&}}~Y$1a7t/p)9PTF}i?A6' );
define( 'NONCE_SALT',       ':oaQ{X)cmz%z)Bont`fNjG5<9B]UP9b#dOtW`&= 4:Y@`C {;O2>yWv 1Chl%2!y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
