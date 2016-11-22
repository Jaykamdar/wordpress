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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         'X@hc~gHu[C]/]u2gR/&?DX!b4@`P5c<QY4zLet.EK+1.>4n+^Q(ct6_.$pO;c<M^');
define('SECURE_AUTH_KEY',  'njl$V~K3je_)]}a#<imus 9YE?X@38&B4lR4@-g0kD@Q?=%[zL6oktlr+gXTHZNb');
define('LOGGED_IN_KEY',    'zv.IBQd-B^gaq8j[+hkJL<GLoPVLvcpS$ 4pE$>.eci_f>F@Euy;*O_6hXHs()y6');
define('NONCE_KEY',        'D~^1x``&pyTA0Ib)?]id+1@rdJKXh+y6>tG+q`9DnX,k4fDg4yj_{(2!X3OI5^y2');
define('AUTH_SALT',        'f3jGYhwk2:JEbSPwXMD*VXPS$/>e)C-7R:W=l]x ,sCM|N06)Lo/,bJzKVi1kp[E');
define('SECURE_AUTH_SALT', '}G0wT:90Ph8BejD(M0aGWX(BpuX-4wR!>N]sWoH)~K`]^Vg8vnFdgPBllC6l_I?2');
define('LOGGED_IN_SALT',   'SXx]DZ5}^BP9UbEw[@c*eNP1h<VY>WAAvcNg6XAbox1aohT`|jP4s;nBpna1ssoB');
define('NONCE_SALT',       '7l|-pO#SuG@VT#TXcO1ldbc.`c;yi{1$p{}KFhAKG5d*cY+we]<Z c)e.1jpOlcI');

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
