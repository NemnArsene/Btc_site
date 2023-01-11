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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`&Xo(Y-WTL&(1p|$[6{rHlYl]2fYVV[VO3?d`_*wRAz*/d`@>;he3VLA~*$0dx1M' );
define( 'SECURE_AUTH_KEY',  '-6%~($,GJ|~ g/yp~=J7>kI|y3sx,%Px94qHX>?y#DKz%(ULN~hqQlW-9BQZxe&=' );
define( 'LOGGED_IN_KEY',    '}dv_E4gghkr?;c,M@B_O)$Z~z*kE[lIUH.hFl*6QcSd3w5ZSW@Q0{x{dsVBEVLgy' );
define( 'NONCE_KEY',        ')WY`Po{.QQxqrFW}wYX>^kQMh.s</f^+_!D<^I1)2h;XE#JQlrdx4nrx!-K<$}6u' );
define( 'AUTH_SALT',        'KK2K:+8-Vs%zZY!#,(!s3-$<ZQB]guT-H,:%E;Y{V.R3vN-9nz,sT~k4Dlc&DDJc' );
define( 'SECURE_AUTH_SALT', 'Sc6Fpq*8C$>#@w|-a73Rw?ETMz7& (_Bui4j?J~w})_!!>;0=o{~-q)fSKFmy8vI' );
define( 'LOGGED_IN_SALT',   '7[Ne9Y1c5A;xk^H+ EI)H@0CBxaaF|mVaie9%%5^X`w cCN7Hsbt[GR|WKPG`Qi+' );
define( 'NONCE_SALT',       'MAN5{B:%Z-tGbaZPD<8o?#0PWRjC9!Ucc[qRW}#X4n|&WS;jU{.t{.V*[eIU6u3}' );

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
