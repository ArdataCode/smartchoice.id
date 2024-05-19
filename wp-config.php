<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landingu_wp510' );

/** Database username */
define( 'DB_USER', 'landingu_wp510' );

/** Database password */
define( 'DB_PASSWORD', '0p.8L[5Sxf' );

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
define( 'AUTH_KEY',         'rtveto23vlibb43irhk1ivh1vwh3ej5md2awrpcry3pjhzrbjdghd31obsftabaz' );
define( 'SECURE_AUTH_KEY',  'stsgs07iijcmtxugunjzn5p9lze6pcopbk4qpzimwjjj1mr0ckoqla2srpesroxs' );
define( 'LOGGED_IN_KEY',    'autym2awuskkx2tvkufsxcheunmytqpz5nqdfymifntudyfg852qc0pwpqqww0gp' );
define( 'NONCE_KEY',        'rwipfhehogxcqdvxhaayojlnrrsxckyqqrxzztlhe6piuthfx7uuezn8ixswcfug' );
define( 'AUTH_SALT',        'vkldegpkg1eumh614chxechjxfjzjgzoynriz2ozpvy62h9i2lt78w9xpqgjr2hu' );
define( 'SECURE_AUTH_SALT', 'ikcerrz26zi2kg6qqqzr6vqnqsvwk3uhpkvdnkj0fv4prjtpsihghi5luxwqjg3l' );
define( 'LOGGED_IN_SALT',   'ziifo6vzbirl8utvhheotx0zdqawdbrg7izxv9wza3wi1fkjnnufy4ahrioo3llh' );
define( 'NONCE_SALT',       '3dhnhmflthmfdb99bq8bkegxvdm0ytooqz7orr4jcw7e56xjs6mpczfm1w1wotkp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpiq_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
