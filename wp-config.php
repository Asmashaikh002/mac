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
define( 'DB_NAME', 'mac' );

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
define( 'AUTH_KEY',         'j}NG-kA(Ibt`a1 xt6w3I*|r{>QM0aN^r:3S:v|u9YBHTTlYSyNV#0x+N_z,loda' );
define( 'SECURE_AUTH_KEY',  '?&L}wI7va=:t3vGR#gt^7#MxZ$EphWR9x&W3z^-`OsnDl<Kk`e#)-h(M.qp7HH=m' );
define( 'LOGGED_IN_KEY',    '<1e$Mz1qLh<1n356nm?n8JH,,TnH^2jTVQC8nqbSChNR[<_2-sjf`=GKz/rYFmpA' );
define( 'NONCE_KEY',        'e!ipAP91;RI8BLPi,(6l@Fpa+HHyB9z4TFZp(wVSLl4<8j?@HkL-!YCR~D1*Ud/u' );
define( 'AUTH_SALT',        'W,W2-8D{q-WSB=F} vBpxM.~1+L!N5C,T^Y$ipuR8H(rk80yBwA3a(EJzIZ%_X(-' );
define( 'SECURE_AUTH_SALT', 'VY3ZrDM$7MjWT{?jHLZH$Hi1/FdE6Rno)m+V.+/@vj,z~*FP%mdbyWK4lZEbw2Lm' );
define( 'LOGGED_IN_SALT',   'ZF2~L:2z3Iq1cHx7gxB_ci{KX>W2MCk]lxC#,H|DRFiJ<UN N:t1x=@}-d*xF#7-' );
define( 'NONCE_SALT',       '[[3A]ib{8v}T)kYj=Eu==p?v+{{@4s=[f.s@DH`O>ka*ym{x}~?-_mfQ$^QwJN/R' );

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
