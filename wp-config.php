<?php
define( 'WP_CACHE', true ); // Boost Cache Plugin
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
define( 'DB_NAME', 'shop99' );

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
define( 'AUTH_KEY',         '^Ij/k87E;dd-=WqjC+=o~+.&s!Ci&UX`y^*^~GWpk0uJOsv8G@AK8% 7;M]f&[Q{' );
define( 'SECURE_AUTH_KEY',  '}Nr/`Ha%T{ZVNg.aV>q>_]wP@[cv$-zpUNqg/YcfAtTA8[<n{kVv,,Wi*sK7%%=4' );
define( 'LOGGED_IN_KEY',    'I;H}896:{Y2!t3mSFED1ycmq^U(!T)OiK7AIK.eOSTl0P8psx<Nq7It(RC7z%a ]' );
define( 'NONCE_KEY',        'Y<|)R_@gjS@*sBL;8[u6e;dus.aw2lY.rXaz/2Mc(FX_Q%XGImId)Dp>_Lkdw91o' );
define( 'AUTH_SALT',        '2*pIRkG-R]WS1+Lde_t_.>mwEu9FwA@P+&wt:M6;@/v)D:qM9wRWd/{MkH[{fdbG' );
define( 'SECURE_AUTH_SALT', 'hoDE{bFRXEBf5}|T*F6&*U@YF`95pWTGg>`q@)If8VbOE5g#9M^u ^U`Ze/!Rb[:' );
define( 'LOGGED_IN_SALT',   ')wmI/e(NhO}XZ_fO{nME@K7rcsyR).Pls!Cj9e*rJM>a^0}rG:+%^O|M_)xZF^6d' );
define( 'NONCE_SALT',       'd/ RG;)Q`p%TSof$Kys#iIG=W,IGB.<<Y|?3?w%K!N9eFe-P|pv3Gs)yOS9a{v8.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
