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
define('DB_NAME', 'onlinebus_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Markchris01');

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
define('AUTH_KEY',         'wc~(~k!u86LbG |mQQQZ=8AVTX.! -B3{i@oq4lXDLx&#r.5*s#zy!TTx{tmkm-J');
define('SECURE_AUTH_KEY',  'm_u/d4Lw{w=]#FC$f.q/aP6?uDiuT_1tLgfPINHWFlQ3Z5P!qG.+ILMQU(EC|e<@');
define('LOGGED_IN_KEY',    'Z ;cz-6dVb0KQIB)P9D64u>h7tA@*ku|a2G!Q|fE[}.Jz]T9XKVLXC>-T+,4M:8[');
define('NONCE_KEY',        'Amo 3JU3jvO.Qh!j&)q<-MD1gO&{j~c&8?2 !8b0&>=zoKYGX`~EI@MH-Q;m$y#j');
define('AUTH_SALT',        '.jb`?MH!Og$SfjQD?rvt/y&8@0kc)D$&rUqdH{WOf.%38kt%@-A?3i,y!^HV:&w3');
define('SECURE_AUTH_SALT', '}B6x.Cc&qVm}P,/L|%3v%rvV37,v!T!zZ|qbW3jkv%Y4&.0);,!;5x{Vh+^q4L/2');
define('LOGGED_IN_SALT',   '8,$~LEX,r+Sb;%WBo/aJ9ZBxD4ArL*Hv`LNk@RkaiIN|O-3q2;Ym(*0R.Nq,q^y0');
define('NONCE_SALT',       'hLnYmYH0E3aQn[YAiwJ&&w5[Z:S!S-::}pvM-[+J9J;<W;)PvVo)<a[xO!wi`pj@');

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
