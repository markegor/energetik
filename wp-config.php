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
define( 'DB_NAME', 'energetik' );

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
define( 'AUTH_KEY',         '|5I[xQxCoxgDwJ9x[fmWi?~qoAR5)~I,SawN$-BL?:MMwpcTI yA:}WAI;=M##He' );
define( 'SECURE_AUTH_KEY',  ':E1ZAmpNN>*eeuzRWFOif7WjO=wp}bg#k}Gx$O@*kp_<FFn@8hHzlW)gJ]BC2OrC' );
define( 'LOGGED_IN_KEY',    'm/r;_f/C~Lv%O4W3R/Kl5Hct>goN:Y7;Q/}-LX_hy 3~SSR,F?N}#_YP@;+7lP/3' );
define( 'NONCE_KEY',        '.Z^{gz*^v@E*BsBM^`f|z[~!^y<EkL:Gnck,RO?G<Lbnb23^,~ez=x~r!ig`Nq+@' );
define( 'AUTH_SALT',        '@we$Vy}6]S~zir~jewG<%`APPxcrqJe#W%fB~[]HVUTcYP@ZO6>F}@uPx{{iDJ)h' );
define( 'SECURE_AUTH_SALT', '(xtO1TJOLmQ^]r-^nwY`Is/8=c37bABc)~6nYIxM,;??`b7`HxeLrX6.~=,ablv#' );
define( 'LOGGED_IN_SALT',   'K7N^+zt #F.W-o5aY1x=VB6ijN=E!(yZnL~`6~Bs$n`@2yz l>tj-V?VyD>r@YI`' );
define( 'NONCE_SALT',       '9Aq$gk0p4 M*fbPq{g/[PPtq#X&l9N+-Ya`gArG-%C|v~G_giVm:js-(7&14V~(5' );

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
