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
define( 'DB_NAME', 'devstudio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']<L@y;|L%ZFLkUi}F~m?$lo!U+x%S==Ii|[=*K]&[j[&vHX2(p<yd(wma<vmA7WH' );
define( 'SECURE_AUTH_KEY',  'A;pptk,CZK;FV=zFia*83u%}D3Iry*/S$LMlCj!PA_;]/_e tBN;G`{J#)R]D@AY' );
define( 'LOGGED_IN_KEY',    'J>_7%UizpCBcC+@Dk*$xiW!MA~IWm7<4JgykaTZvU->,9I`L6`@e=CaPjVzxw*rJ' );
define( 'NONCE_KEY',        '<nA)Vc=0eJm]0wcXISBF4wzL~u8?|?1lF~X3&!#OWiS{z.4KwKW`.Lg=gr*N$E6i' );
define( 'AUTH_SALT',        'j{D(xXKEnzU[U,XAK{W^0[NpmLlIM~W^f]@>t_OJ)|`zoR? MGm m%E]/mM1@w12' );
define( 'SECURE_AUTH_SALT', '#AC%c)x(]]Zw?XxW.7,V`IPb{4joW ~z-^,+3GPm?,Q)iuMabYt2#;zU0}9&/wH+' );
define( 'LOGGED_IN_SALT',   ',)O:B{|A+Ee.lKtzKWja]6<D^W$-}mzM:]3NCHwJ84&&>}Ko!cqCIh0_On}4SE#g' );
define( 'NONCE_SALT',       '_|ulaB8w37DKu70!9U5[NJDF!&CRgC{+[]9$l.SZ<D:07fH1]M)cFu{>fR_D2w>w' );

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
