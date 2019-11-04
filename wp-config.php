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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elevate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'KEMkcr;;m+#AT>8(}D5Qspf r.;^{HqcyYSSf5rG*Y!my$P`vcRo:/~VWQ6&CR1H' );
define( 'SECURE_AUTH_KEY',  '+Lb%>% >ah[X3xg%V_Wmj.177b::a*%P20?ZdhL;K?fL5d9_JMZP9Wly`@C:CFk|' );
define( 'LOGGED_IN_KEY',    '(/M11$K+.nhV%%zmiZLF^CpI/gk[YJJee]f,PCZh:Q(B.3^5,/2=8{s_m?e3eU.P' );
define( 'NONCE_KEY',        '6#x*(gz?XDflN~cUw}7tqrg(/LGAcck[*C[m~iQ-Ror:>(9J`(msBKjv$zZZ%oAy' );
define( 'AUTH_SALT',        'C`89(bC8mR]}uH[$;s)E*+(Jve8?nc1&Cdt 5N1Xew`izj6NYo#[Iy8Bo@a?h4(u' );
define( 'SECURE_AUTH_SALT', '7|*GNv!jnb>+@~iKFupJrz)QAz{cuHF{aqW!`[ErK)#)J!WX>wc[E{P-Ks$K2=)0' );
define( 'LOGGED_IN_SALT',   'UcSf/f~1s+hC].<d*vYE_)DJlnI0kty0CyB>KI_7I,S9kZn+<1E1~#nB797h1;O}' );
define( 'NONCE_SALT',       'Fb~%y.#Wf.A:d$Bv_E6#C/u<}(4l6ZmOhs@HkCU2tonTxYn5`F%G*_>#];I=dlk,' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
