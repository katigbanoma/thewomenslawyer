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
define('DB_NAME', 'thewomenslawyer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kini419,247');

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
define('AUTH_KEY',         's3.uV {>}i3SmLv5>.pj0Gy5AO-$`F)K^d4.C+.HsTUDnX5uu~BE* )!d(tJ0t.$');
define('SECURE_AUTH_KEY',  '8 b[^T(7DH+uQsGEb={vigR+Cpe.1Tty?f`tCw}lBc_;KbKWfDrzbyROeN~=Zt+p');
define('LOGGED_IN_KEY',    'TSa74}{sI1<Ki!U Y6B//V$.<_I8<6KuyNj3.Yywf6YN]iF6y,LNi@pCP<zfUG^Q');
define('NONCE_KEY',        'cTb<Fg LH.40gBv2SLp%,!-4rd[++[F@pV5LrLfZPI!@Nx8A;UXofHW(kkh%9?Ru');
define('AUTH_SALT',        'G4E!Z&cxu9PVw)6!Qk,*lYeR.5ew~{6`Q<5*uR>sv(&|R&;X}%[,DqqaG84k*2X(');
define('SECURE_AUTH_SALT', 'l?ipK&_cf45t/L?]rPHTB?}$WRF|1J}<Q$+{3rp_8$SK]v;1zn6rYY$693$YD:1!');
define('LOGGED_IN_SALT',   'U;J MYW&M<Xw3tEWHq=>yC%Be5|(,Za0=*o8i<hz~3Ow9d4)gXYM~`tJ <Z(#Xof');
define('NONCE_SALT',       'B9=IR5%3J?UNR/_n9c<([+_J}7VE~|P7~@^;xZxCrHw|1ZPl^,{>Cb9#CF|&)Y3 ');

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

