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
define('AUTH_KEY',         'liQs5e}=hQuYAOfbyT]:N=SbA.-9,I:9|;JL,o~gN),}Iua}$4gmWdgj{yG8tsl ');
define('SECURE_AUTH_KEY',  'M_ivVJR(-bGV%?&t!li;;j@KbF%a&E_ym+VF.kvkcOOcL.`8k@$Ee#cg|eZ<}Wg>');
define('LOGGED_IN_KEY',    'NzZ1DL~jo{6V3Y&+4VIb;AZG2m6}xY46(gsV0zAg7D2sN>.Cqz5H zL<<VE#Fqni');
define('NONCE_KEY',        'y*QG%aSJAufp~[ .$v1^fpF8#;e!kH&r<zU,pl|H=:Sb?@[u!^~rRIWXe#gE<HGr');
define('AUTH_SALT',        '`l]wkNJm<R_0DZGj<z@w5fRQC;Y=lFZHV~Cou/fy:7!RYVppsnx~:S,RXR `B+)f');
define('SECURE_AUTH_SALT', 'm)B5[1Q9]k?AAPv#n`Zj4OvY<z)99TN~sd&]XgZyc,>2ni:O9/Fz0}#|;_YtxnwP');
define('LOGGED_IN_SALT',   '6x1p3ot`UV}sW_#1Ax!9G#!P5a0oz4G/tR(PSw0tMwukVUIaxP%F]&{x!azO<eCq');
define('NONCE_SALT',       'Nm@Krw*jEqYii=+cL($Z@+f1Sf-gwvgC}b(oFh`8&9:g=1>~Nbl/&3ZfaK?lVc|i');

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
