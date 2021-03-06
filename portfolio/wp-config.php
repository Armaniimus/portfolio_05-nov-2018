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
define('DB_NAME', 'armanjn201_portfolio');

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
define('AUTH_KEY',         ']R:=paLCPYf+)R`% a++|/*0#WL:LL==K|36V%0ZDQ^2WYJ_XBv2ZsA~~sqT<kE1');
define('SECURE_AUTH_KEY',  '~ozxDXdxai9o:%~,Wm}>wqcduNAj/m>N|7.Ku#b<^>6vu&V O^X&+u^~S&pTgN9C');
define('LOGGED_IN_KEY',    'iCvH[62.v1Y>=n9T3zaS,4I)E#KTY:@{V^ *CZ0.]V+<1qan+o1b&.o?:z2 zRJO');
define('NONCE_KEY',        ':r1SK=;(iSK9?YUwhe~;{!#@(9 +WD~%?^nVEXLab}n2yPilozdrw5/?_[3jrWUZ');
define('AUTH_SALT',        ';}!QQ7(3jT2+sY}_f9P`hU}r$JZ7kBs:(YnjocU+>T&+0{Hdyw.GB-=:Pvp(V_b{');
define('SECURE_AUTH_SALT', '%)>?Qh}9d.4$z>yjiQM-nc}Poy,%6J#lQ)bOmSK!a_F* }VS&RTyJ*;(7~Ve+uiJ');
define('LOGGED_IN_SALT',   'EJ<]o<^xPBoEpTQ]{f@iU=RigD>7C<gY9KlN)w(Yw<gsVL4L`p.2FQu8{vCbOfL1');
define('NONCE_SALT',       'Z5B>lo,>>;]So=aTu:~kvirrCAdN{uq.M5A:IbFkCk:P|]ia!H}Vvg&=!h8{1EcH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'portf_';

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
