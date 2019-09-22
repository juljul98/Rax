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
define('DB_NAME', 'rax');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yfoUcy_lj%WC9P[%@-qJXY: X:QYT^!iGyA(GF*V#q03r71hD!gmDO[IN4)o |`1');
define('SECURE_AUTH_KEY',  'goKYQ1jp3Gbo!tZJ4Fz|G}W=p>3R)?:HE~RF^eCTcn;<WtuO10p0C4g43NM5gDgG');
define('LOGGED_IN_KEY',    '^mQD(rz8wtW?O=1H/I=e{dlxVXN+%e^nGo:E+zNj_6$ScDdbCtE,l!CxE=<Ij:E^');
define('NONCE_KEY',        'ldd^zd}l$p,o<,l|v%Oryj><1dF|H8p2jm6f%SNv2NKZ.N7PZ=/Y0p&&%xqL]+w&');
define('AUTH_SALT',        '=ay?Hvsqf6,VK)jtKaHU)N,[<.VRG]45MzBlgd$gnHcagP&$Zz3F;]7>k15R6(us');
define('SECURE_AUTH_SALT', 'I><JMQ#<):gG7-LG-Ld@Z;5yI&}$Chsu<GZ{b0|gHrx5s?ad_NW D#jyR H2f:m9');
define('LOGGED_IN_SALT',   '8!#M^zL}G*;s!)Ew&v1nmJk.qQ@JL]vvUOeAvC;lhd^A3w96joq4V-;^WOUKp5y`');
define('NONCE_SALT',       'h[;;m9bRynu8jx,x[[HqY*2:}+.ce+74Q2-&qA5d]-yREy+l$xC^?V]S9(i8H-t:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
