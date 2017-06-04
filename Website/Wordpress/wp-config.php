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
define('DB_NAME', 'wordpress_studant_v2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '*!G.lmsIe>9pHdv0]#~:g17gh$BI%ALShdY)iuD!&WTm#o$r/cI5>r3.H^hu?N?M');
define('SECURE_AUTH_KEY',  'GxRx-=CYtBK1G]>Yr-F^aW#J,=6|b_ZKXN+<uUi%QC0|n!@0+ml;kkOe{2R=V=q}');
define('LOGGED_IN_KEY',    'tY_pKWi]kp%*u,;H|Rpqu`u#2/ZbE~}z_mGm1$;i)?$E]LUqMVY`Rm ~kp5*a8xV');
define('NONCE_KEY',        '{Z1s:Y2X?.I-@O VoPee**afDmF(wG>a(9VM|6/|-u!v0tY./!8JeFfk<#CCL)NB');
define('AUTH_SALT',        'Gf_cFQi7~yrjmFEhM.S[?j>nP^[$l:GAu?6K_H%TvbTnaG*V$y0#*tPytXq)o?7U');
define('SECURE_AUTH_SALT', '=)=0e?/>=#u9Tply`A*v? hDraxHkbG,(Tu.}L4gAZ;Y5oWJCg}pIpt1[<PYg2I7');
define('LOGGED_IN_SALT',   ' clkXku*lJxZ27o?F<fgs0X8Ov@g<r}9Y OAN.bHRinQr$c|!0.9M&<i-^u9=0R{');
define('NONCE_SALT',       'Bsd.kQQJya9XkpQ*,3gBZ|=/BD,( tx)oVuf:VqddZ()EHL6oo=PM7^+g}uf^I/L');

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
