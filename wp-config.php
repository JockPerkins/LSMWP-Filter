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
define('DB_NAME', 'jockwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'MyNewPass');

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
define('AUTH_KEY',         ';(PY&^Ae=*!?l&%Al([tDQWd9t@_ ;{Cq[.e;oDrk&4*mBjat6A[[:G`?k>gU`zL');
define('SECURE_AUTH_KEY',  'Q-RrsC}o6KyeWw-jwXguDA*q>Zx~<9dB@fOMNEWX#Pp*|0/3HzZ4_c3MmlT`<F_u');
define('LOGGED_IN_KEY',    ' N7d(*YW&xk~Q$/f,4or,aoXi!SV~5%;Vtj9}v3?@@C5Xrf>VP=ZgxXi?tx-}8sf');
define('NONCE_KEY',        'rGLee81(4UhHcuOG8!:-{<76Ne ,wz%M3gFGm9t<F@f/uida.&H<jUj[.%nL~nky');
define('AUTH_SALT',        '5)Dvvhm1h`]-`rn7F%Rx.-zeDyGf%y;eF|o$LXtthFo?h<!V?R5z2_4%B<Z;&`/T');
define('SECURE_AUTH_SALT', 'AgyQ>l8Zr~=x%iub^$,g#$%#3ZB!1*xx,>RbRmQ&F0 v,c3ZIGB@=52cFZscLF>n');
define('LOGGED_IN_SALT',   '?_2#PA/R}/(ffADi2&4z>d3!R>H{WENUVk1Zh&Q&}}z,!uF&0u2;3y?LH7=!7jsp');
define('NONCE_SALT',       'veZ{%VWNWf6Mm4P`O`ybGvfrpp1< != -=*U*z.;MV?&=yzp@aR}dq+yAdaS$.!;');

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
