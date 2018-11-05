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
define('DB_NAME', 'armanjn201_vaandre');

/** MySQL database username */
define('DB_USER', 'armanjn201_vaandre');

/** MySQL database password */
define('DB_PASSWORD', '	ziyola58r1');

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
define('AUTH_KEY',         '<s+twWyRB/A6VW9t[PXLV9yb;V.$q4kR<-$@/BiS+=88q8rkxXa;oVX@SFs<iRGX');
define('SECURE_AUTH_KEY',  'A%:6c9t?d#;;h5N7vA(}_&7UqGAV|phs*CPVk Ll6Iq ,F|@97YIjDOO9rGVpv+?');
define('LOGGED_IN_KEY',    'SDL:F(C<jOLlpK|4&$s^l}xV*^%Gb?h$gk G|1LO2/XE8n{I8zD08Ufs)YB5Mr~9');
define('NONCE_KEY',        '$550`3cjNk!>>wV^<k1kam}o*[VlyU<?+`JmJ(;gef;<Y(3PB6GRp%;M+q{zF[ue');
define('AUTH_SALT',        '&)l3keo*iuC2*&HB:gqt5dE&_h$f9IWf^yj`k@r VvoSm!7!rJ>Xa$|%m+ `/!7.');
define('SECURE_AUTH_SALT', 'c0r=kh-lk]26]xbP6Bz0p-r<bS.hV1k,xPdY4wLKVEE]kzV,4o5HmslNPU[kZ[Bt');
define('LOGGED_IN_SALT',   '[dY:)_w TgjPT6,nSt6q<?n[goT8@Glgz$u|q{eXP?itu#r6 AfMQ{.94KE[rZlY');
define('NONCE_SALT',       'm j3%&va5M!M*5!Twg$(-=wRg=U@0HFew8|z!*n!#t5bj{wjWl1.s8aX7xb`)3hi');

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
