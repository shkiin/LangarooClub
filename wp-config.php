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
define( 'DB_NAME', 'langaroo' );

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
define( 'AUTH_KEY',         '{Im[xMcfodH8~heSV<bWp[in3!Cueu3D3O#nLgW8L*3(^A:w-tmZB@wG+^0)8ia$' );
define( 'SECURE_AUTH_KEY',  'sps|^h%s-G:9un)o0?1o.15qyxP[b.Kax3XHwQF;RPFh>@xK|JO,U3JhwcYV3{/a' );
define( 'LOGGED_IN_KEY',    '-_!~nOd5|$:yS$^^s_E$H&j@6JCh*{sckDpZjA(_cOs7glW-;BU_YY;Y^:^g_iVa' );
define( 'NONCE_KEY',        't]As$V8K;f#QJ4U^wF;M-B,TQ.{x]0/`pd,~]U9~k&x/mDrEaH>tPw3mUOuQnd/F' );
define( 'AUTH_SALT',        'Mm|m%I7rOa0?X`i$,Wx$U5cUB<R!(;MucPPwvKOB&I{N--B-@@q]S.9M1O)2<%yO' );
define( 'SECURE_AUTH_SALT', 'j|99~@Ega9&C.)xNJEeFpqPc,gTLeh+Il3dP|k44QXhv/~&.1:Wc-T:ZB+a)K+&L' );
define( 'LOGGED_IN_SALT',   ']FSoV( RMUn|9d_4^U@?>xX ;_FteS-;I9~KJU;iA1u)5$3wJHnOrdN>D]B,VaUU' );
define( 'NONCE_SALT',       'EZ/kI4(KViM#XjjnQ2Li2.9gXaBc`z NaD|3;Z=|4$w3eS#_ISccc5v41L;Car.Z' );

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
