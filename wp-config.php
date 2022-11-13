<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lessons_wp' );

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
define( 'AUTH_KEY',         'q2kVg0Wqq)Cd?ftqKRf42&rnK`^NoT4.[Zz2/::h*v4H|6e6F00`}K^P!T@oJrV%' );
define( 'SECURE_AUTH_KEY',  'F(k.-d.*VHqe/@AP=sx]Uz1Rq5/T08W%_wLm&U3r:[l?rn<L{s@bnqyFuzURHUOJ' );
define( 'LOGGED_IN_KEY',    'QXoCEarRI,}Le%NHk/!_g$9q&)EQR-X$+FP^r;(uD8I,c~2@GcU]c.FTJ}lXan8P' );
define( 'NONCE_KEY',        '4)-fSF$3jP2c/p<pVHWaXHTd{)#zrU#NQEY+vp._%fpL(A^O]cISdM_n[Y<c_3|n' );
define( 'AUTH_SALT',        '7=d8Id0U-f18Ab>.kYtq_!^L[)0v(1 3RqZ$^f*n6S[vyLJ*di-/BP-7m=CMnX67' );
define( 'SECURE_AUTH_SALT', 'P8Xu@DOe:<)k pe]r;O7<9NMf30;R K3H`yFR-|d=rkP!3#n<sb]79mf1!FE6r3!' );
define( 'LOGGED_IN_SALT',   '%Q;$o:H<qU%}[ZLGp|eQEwDl0c^~H2DHG^:ds:D3*;eykPA2qR*o|Z44aTO%]?Rq' );
define( 'NONCE_SALT',       'YD:jXarD}9Z*vjxaXLXIA%z=Mu{?w@Y}qS-ij^vHFNw9%^?Lr=@Pi_:aDg7GloT!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'prdk_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
