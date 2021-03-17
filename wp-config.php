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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'belajr_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',WkNHz4u79P<Ok[&;mbkyMRl[;[Kbd:=>.cs&A0v?I%*NC)!P`v0o,Y$<;`vLYmZ' );
define( 'SECURE_AUTH_KEY',  '.`U,Yc-68=T{YAdvxX9A&}:YnsZ(v$9h@DkfHGhk<ekb$?SG HZ`ki+~E2o[Rz}f' );
define( 'LOGGED_IN_KEY',    'Skqx;+O 6mZeAee+Xv?eI3fJa<@/ptrt[6L[|obRtcSvGC#A>+ZS}d~j7cxEq4n~' );
define( 'NONCE_KEY',        'rx&H|20aSo7_GtWE_NLRop9~j;8dJ.`gkfs#bg*dFNt 7r=t/9)w8:,:(#|_j^K5' );
define( 'AUTH_SALT',        '0P4bA_pW@+4ljhIKmrA5n,MzP(lx/M0``FoJ^@ia#;jA_|Qy%:@umHydpOcM:zBx' );
define( 'SECURE_AUTH_SALT', 'P&CuIy-1OLbBH$u-F!&D`RnKsl8z~,NHgC*qd8oYO3,a|&2*B,P9CNg=|Ytt!6[S' );
define( 'LOGGED_IN_SALT',   'qrU6;&!u>z0vJ8,^>Z=#np,8jr[ X>tA|8J8CSf@k_j`#<Qt.Tk*>-.u !hsaGPF' );
define( 'NONCE_SALT',       '%)11Pt#H(p:qlk @rcOVKj*J%5N7w&-U4hR&eXxc~~H.T_SN!YTr#+6%`fTp/?VD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
