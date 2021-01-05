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
define('DB_NAME', 'LWHTD');

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
define('AUTH_KEY',         '??d;Y>jjWa8ZhdKKYG55eA[e&zu{@Wor <pp35K2NeA7N 1H!g&j#I}2cKM*{[Yl');
define('SECURE_AUTH_KEY',  'YsyaZtoq|r7er`Zwkz({q;~g5dRC(AvtBe}[HcEpF-ut<y%1BC[0-xwh5ot<kG??');
define('LOGGED_IN_KEY',    '^r5@VZ+O=qSOn-<j!Y_bhMFR3+Xkg5Wq[llhRP>LoyfH.Op*aJDP4;>&QdPF#RNl');
define('NONCE_KEY',        'GGj{)K-=L!HX4hB90]6B(>g.?-OQ>#;9n(/LUJ_>{s1[2wa8VbIRdH)W$OL2H^6J');
define('AUTH_SALT',        './Y/x8.S9m1FN3YntQiQ-G|#n2WI%Gzl28fK#Zv_S5rj>HFD-Be%?RaoG80K37>L');
define('SECURE_AUTH_SALT', '/~^>a:5]8=g%#?h9OiN^#8RqF;RC(@jtsA#IgAkeb$00]e2|NV=CN| 7V>/%ny0]');
define('LOGGED_IN_SALT',   'EJLRNH/hJ9> x9EzP!rNxMhG5W!*E]gW9NMAf[/D3ZrLllNm}Kagn?`Z5MG(!T#%');
define('NONCE_SALT',       '):V=rFLgs6A1fh6>Wx^ND4|ymgJim?ce[ZN^lzKv0*-@C<]bYND1W UAg24sKJao');

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
