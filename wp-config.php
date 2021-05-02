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
define( 'DB_NAME', 'sumiyashajuti_db' );

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
define( 'AUTH_KEY',         '5>jNmvg:KJZ]/G,Dn8q=[4a)%BxY-QY>a{OZC`beZ>;z_Kh[q-~v|r|7G:Pr}M@3' );
define( 'SECURE_AUTH_KEY',  'dyuNwh/3W@NsdP?HQ.w*3>grWp~PESi=pZxwo0]f8jq=NA^EJ~f;$pfAv2#:FIwf' );
define( 'LOGGED_IN_KEY',    'mhU6G0pM@3y$X$Nk#wyh8.Kcphhvez2vU@Mlh0}8z_6MW,j|@&Rv yZElW}0iXcN' );
define( 'NONCE_KEY',        'Ia0){NR3:SyN7tJC(b!a(Kt&*<{nd<I,<f>apoz<Rzt>pZ71$8f7`0-oY) nH6Jp' );
define( 'AUTH_SALT',        'f,s.xJz)_jKVgpsKm>{fy5[/Pg(_B/3#Mm4u]$#<g#MIqm;Zl7{a~U9bvxb3W/wN' );
define( 'SECURE_AUTH_SALT', '|=86%F52MQUYd$0^}-@kwoP3C3Qn9N^XP*io+vw{]lpNgDV6+t.Al~36{K3Qu,;4' );
define( 'LOGGED_IN_SALT',   '8Fp~/<L})z)-t0Bp&kQAIxGqIim+Z1t@=c}D7AGYsLGZo+(E:JN,EhXxlUk0R-/,' );
define( 'NONCE_SALT',       'B2H[?.dJh^k^irpD^wehd#8{V4D!DaeDtIj3f$f_Ea_N;mT~,aALEH/p[YU-SCi(' );

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
