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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BaswaraNusantara' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'eyS `I:Z6|?gk(tK=YU8W2v(0BPAt8L3Ij]w8EyfEz#`Bg(Lg*riuP!c$}qJ_3~k' );
define( 'SECURE_AUTH_KEY',  '`mysC.k(O,|eBLV9Z+R jGP2JUaR>:VVj+!rH2v$Q:NmYvWIeR%c Jk/`$Dmd,Ki' );
define( 'LOGGED_IN_KEY',    'i@hwa@n>xvAbUV9L;[CT(Cg]Dox5!k,UQAo!KuL6x5[(On2M>SYlS6EB9x4t$ dW' );
define( 'NONCE_KEY',        '3+)%q[R_8}a-UzB|{|JAs4ReO%yewd(rVd9tO7f~E.)z!I,-!4G3#[!wnm<B^Xm/' );
define( 'AUTH_SALT',        'XJDwD$@v9x@N?zrAMw1xzC=@i.f%PD|II+G=m)x-_:mM,F!lC[Z8N +oXg8~JIqH' );
define( 'SECURE_AUTH_SALT', 'gs2__@F{JtQY0nLDX1Nwsd`(@m{;He.>=2U6fl.:#Ocl4KJRR(Tsn-Sh0z{FM$KX' );
define( 'LOGGED_IN_SALT',   'DJYr?-#/0k57rnU`eK-HrW#:O?N]hpnu|+;Wg3L@k7{B WOApG% AX?lu{?Iufl2' );
define( 'NONCE_SALT',       'oGvx%U[3G02v#=?0{4Nw<8o1FI^,j;g.O[ETr1;5@(*|SbSk>[UHtPQn{1_.LovH' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
