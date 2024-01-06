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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'S.K+F/06Jv<&{1.^w#@7E `O.Dz(Xp_T!!))OKMB.`IcQaIddlO7A01B@u.6[c6C' );
define( 'SECURE_AUTH_KEY',   'F_)a$%4r8Gylt{GL7w/s/&W_W[asY3LoL?lWjtc%+.YAPD~[}:x`T33X4^BgsEq)' );
define( 'LOGGED_IN_KEY',     '0<KINj+`@EC~l6%{o<}&LecOyx}qRv p[l_h(y>k8Syw[tI4213Nf7alWS9cBKf$' );
define( 'NONCE_KEY',         'a-a$?%NvovsWq/]=%%;71@55EjUGyyap]P/n*<Y_uw;NeOcz;|*m(KTpTs,vy6R{' );
define( 'AUTH_SALT',         '5[~vz9 [L@,4adT9/4mu=^x]9$LW2@tc@z3R:^rl:6tP%ZVzq3Uv4h?gwA7d|=ql' );
define( 'SECURE_AUTH_SALT',  'E9_trb7ny_:rEC66Kj.(0.0uMf3AHEj@E~UW[3Q7.Q _mY*[<XwowyL0mF?9lUpc' );
define( 'LOGGED_IN_SALT',    'DA|RF*DK{XQNC-NP+0~quWJuh|(GU1y27n&j(wS|9? gI_E7[[e)aq}{(=;5^Va`' );
define( 'NONCE_SALT',        '_A0Qn}UQx{]Mn0l(}moR^ >c8/&/m4^Y/(H@Wc<vb pn8j0}^ %C)Ov]OPuzy{5w' );
define( 'WP_CACHE_KEY_SALT', '+9Go#VCkQ|tfs2Y] HVW+4P3xHMY;=hwJ/Gtz?0EV`S3g|$`%/FeO3nt3?}CZ=A}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
