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
define('DB_NAME', 'shield');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'DQ5oq*iX)~~fT[>i^<d=57E~r<~ +W2bSVB`#:VAPO,)g1u_=lS4@6;BiwQb?8p-');
define('SECURE_AUTH_KEY',  'T~S{QuNYj{.$}o5J(F$@o*61E;SeMFhE^oJ!#XEgPM*Z2mZTq}@GjcuTw2rZAWwu');
define('LOGGED_IN_KEY',    '2(32V?M7Kc(/-=XnElV+/ @5v;d]fg[jgYeT>BrH@Vp5aTm^88|]hab2G#J)z.0#');
define('NONCE_KEY',        '1xqGx+PB5Y;Sv)0#l|+U;+)G3$KE8}]_4*-FEh^b&>^Kjq^]L|^4S)/L)<1m}c-o');
define('AUTH_SALT',        ';kAl4BuCONgg%2]VL4`Ng}/K)Ef=}5Au:+dfE#gXJwaz#TjD_)7t;mgs]q1E9d<M');
define('SECURE_AUTH_SALT', 'D}F7t{t)i%dmZGhT@2yZf|PjNZzBm5AZ([oOAG]x6Ye9 zCBA6w**Zt6(E?UX?kp');
define('LOGGED_IN_SALT',   '*c_n$FQm~!4ib@ylp}- *+&n/v#[ZP=0r6ER5$4_r}DhJWtFvY!14y:PdqN[7Lab');
define('NONCE_SALT',       'FHt(SN)}>~CX5GR<lseok pjp7YUB*c1aj%#cW=!~HC@*OQEB9<QP.#:F4Z<RdXN');

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
