<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_p3dyes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'njbbMr(pMf(!b($yN$e/vi;nbD(:iH/r9#Fn#d1_A|3>BPwN(j_BDY?0aUx6M7ZD' );
define( 'SECURE_AUTH_KEY',  'us*IJgsyLv`LloO@2Qv@zOyq(8$YrYHozm4K^kZ# [_juvKoFO?.D;r)3Y$)t`f]' );
define( 'LOGGED_IN_KEY',    '8qkYy5u(/%&([Q{d0^ez/mqbQt<(122cHfc+{4_otPkVmY[Ry=|2&&0Z5h@u^8X*' );
define( 'NONCE_KEY',        'Gg$V7ElN5=l%]=3c.s$Uzb~_KO#^iGS$(X/q/14fH<TS)D~R{Ng&qS6BV4_Oh6kf' );
define( 'AUTH_SALT',        'djTA?Hmx&;1{f|?R3 |QD`yf.u=!9@1b*8?(6*Q}CT$co;`bK*76KCVvT#i,31R^' );
define( 'SECURE_AUTH_SALT', '5>V$Yebaw!8j.&X ^LC-XGOuctglUBd@J&tyV*XoWjN+OU2=`n`h$XH9UPQsHbd8' );
define( 'LOGGED_IN_SALT',   'WBo}NP{1GxpTrU~mE=K;dE[j)mSgMzbat}Y].v@z+X NUzFT.C+w~E}4dWqgXY%@' );
define( 'NONCE_SALT',       '|$rXXmG4=TmrE& gCQJgaM^qO.P4Bwiy}fCjE&X.G@]laCRg^ 3-HX7#Wk2!rbWD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



// Extra
define('FS_METHOD', 'direct');



define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

error_reporting(E_ALL);
ini_set('display_errors', 1);



