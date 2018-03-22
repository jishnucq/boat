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
define('DB_NAME', 'yacht');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j+u(=,RpDegKv-U,>pzQX]Gu$Q?YSbL-QSmm~SUkmYt</b[Vx|b5$;h ~tmdoPqp');
define('SECURE_AUTH_KEY',  'Yjv_?>EPoOM;/pNA(v0$WZmk6?bzVv%)h_]$JEVYmE8kX5|jebWt7Cg&G%*C#L0L');
define('LOGGED_IN_KEY',    'ikP|6F1p-_P~Exq_gnJwYP]JuZf7jMU(mPm?6aKepS(,3YHz|tqNRq`B+bTT?9Az');
define('NONCE_KEY',        'jb&^{3#uz}YaW8?rLxb|ZV6Q+tTDNKpNoy=`:T )41)BkX!-7W_[ +|wBjN-P4IZ');
define('AUTH_SALT',        'hUY>>F{]_8O[/QQ1e|LhlqF(DUJ/-da*2u7B<{]UYk%z,kH[VGJWYg0N^~hT]u0}');
define('SECURE_AUTH_SALT', 'B|~fzUnQ([ks_xzi=cL6[V9(Mr=.4Fvct6Y#qh3wBQe/yVuF)P|i2T7rU_VwGz>o');
define('LOGGED_IN_SALT',   '_|X~^-7PG%pp.{_[ZGUSI!9j%bPj.. n%Q9=0fSy]pb`)3][Wq~. >(<gs%MRWqN');
define('NONCE_SALT',       'dL^F%u.0#TI+mbT;QJ]!<X.}qr7V|Ps$;:WGYUtg*?(nb-V.|/1me,]gaWNH:ma:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'yh_';

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
