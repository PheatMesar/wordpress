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
define('DB_NAME', 'cosine');

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
define('AUTH_KEY',         'mPJQc+AhNl*yIsNS#1)xzG+D6^Pvwf<p/} (OnV._P@JN`B8n74PlJ^}`0-H?P,U');
define('SECURE_AUTH_KEY',  'LP87eKOwiMUJO6^[Q;+/E}oZoOi>n}2`o/@KdK}8]iu|ZCuWu(_<Lt(*$XB-]%eh');
define('LOGGED_IN_KEY',    '4>SSbX~(P3] Posq}bE]|(j&u wc%BeDk39zv0ghq2U&g-l%L*4[`pq.6vu1+xU4');
define('NONCE_KEY',        'ZYJA )mY9%{t))Q`ew[ZEm:,o<ta<9p3&V6+a,$GUr1pZJ1+aa%c{8FblZ8;?&,T');
define('AUTH_SALT',        'mwkDU#*$xNu*T #^E{rf+r!l*7VOdSeSf^Bcdo0J(igo:+.hG1@ozToeQF9(zpGm');
define('SECURE_AUTH_SALT', 'C1U0$67]D$[G7xJ],8)Kva<c%Fxu2qFF W)pqnA^iX)A~q||(8y#&Y:TUQZh:|kp');
define('LOGGED_IN_SALT',   'AQc~vJsG-aG4/SPfJN,;=7LoGCbqZe-vUn!w[`a+Yh. mHM+lb(nvxkC1 wk1% r');
define('NONCE_SALT',       'G%=6lyL-g0KY2[imq;y[zZrJ21>,83(b,TW)<M8FVVS-Ax[SD_fP[e&yNE@xio&9');

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
