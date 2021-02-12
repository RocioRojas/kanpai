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
define( 'DB_NAME', 'Kanpai' );

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
define( 'AUTH_KEY',         'w[l!*o*C5PjB 6,8@e$h%>,[e{.f*:uR3h<,o p3vL%]bwp4)=W{5*M#%ML*,/:V' );
define( 'SECURE_AUTH_KEY',  'q,j26r;[,:~NE_;Aaxm,1t[[-DDM{5I>Y!yvj{@.HDR:;?.$jX|Bgxy**IP_}0}{' );
define( 'LOGGED_IN_KEY',    'Z?I6H*XpKdX04z)wC%b5.4pk_P6yhbQ4uVze>c&Y~ G>s+;,)e}W/6i10.2t v#I' );
define( 'NONCE_KEY',        '?;&}Ns5>*QqCO<GxcZwU# 9!<gV1f0{VDdym6H/^^SZel~4@xx]XWj?=)[ud& }m' );
define( 'AUTH_SALT',        '|moSzm@ r80_$?6(IEGZxNf+fRju_?@(t:e0(~<~[m0/#;z+cIPm(#H]O})jA`*x' );
define( 'SECURE_AUTH_SALT', 'c)6;;j{.ok#7UnEwO*CNDHN:v.^TGqybBy6+iP3)7](H_Qc<i5S/!Y87;{A})laj' );
define( 'LOGGED_IN_SALT',   'i1_z$`7?EMDt6!Lly|/Hd}yJ^%)d1;UhY[UUx5kP<,?q*~1!u(rtqEd}k>v.(e>2' );
define( 'NONCE_SALT',       '%m~ugt43mV-+{9rBn$YkujS3(qN=ZM5 Hs?b+EMmS?@);poWiV5l%8*kZ|CpD~@R' );

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
