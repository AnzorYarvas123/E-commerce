<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'E-commerce' );

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
define( 'AUTH_KEY',         'W>^klA7]8267O${OAx~=??HbSDlX<!2UTdVt&Bj:+7OPnC4f]fyU})[@1}W-OCyz' );
define( 'SECURE_AUTH_KEY',  'M/<(SxE83zd:[{9-{bc+49MRzuH@vS=(G}F=[qs$M~6Pr)LOEWZ:Jl.n)(F/qz.0' );
define( 'LOGGED_IN_KEY',    'gOmiIo*9@%[zJ2Ih_,Otr_ l}Y^D98cH|H53%/KCV7>Y7lA[wT+:kflfbp965eYC' );
define( 'NONCE_KEY',        '*-nh5vXd4f)R*r5SX~<RQ6)fB?@D #(I<A~oTX]rfU9o.=,6}8.,hcurOxf{azQm' );
define( 'AUTH_SALT',        'Q/hA%l@9XuK[,}ttNjt$NX(KiyguMr(+!v}JDkpXEst3<igOc[F[yJ45?J0ZO3U=' );
define( 'SECURE_AUTH_SALT', 'QUMEY2JP(=,)UUpZi4rtCY2|FvOT-PSem8[C-c:3neqlKtZzekk|G(b68`qBX0lj' );
define( 'LOGGED_IN_SALT',   'x_de_ka^KO9_AhV1Q%;2=r_SneCSAtT#!+*[0zt:E%[J;>~DWfv?@(a3/Rs^NyFj' );
define( 'NONCE_SALT',       '}n-S1Nj~uk>ZtT7nB~_Ih@gq4#d*?+S2Hjz<Q[]x)9b)L?_z)A{81bimlY.7:m9H' );

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
