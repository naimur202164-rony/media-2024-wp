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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-(qDuAW[FK~oE;A$YW|=+TpDBzfcEej-Llx*LmLwCbfH(@Sux;Q5ukU<pE!6]0,{' );
define( 'SECURE_AUTH_KEY',   'S50KxLtm^`Oe=pMNoV4{oO)7-+J g:e/a+/e85STI=iK #aY/cI45K}&XZpd-LV{' );
define( 'LOGGED_IN_KEY',     'aZ%|dW8#iKE-]`JABf7Fd@#-@dXLA&f*1t^/9/xfswNN1#.Fv$OQ7/~$B}{$E10X' );
define( 'NONCE_KEY',         'H@Q~8Ju@?(8ER_t7hA|G~4_:w:W)]j=/)TuY2PA y}{RODVfS+xzDstMDfz7$pWk' );
define( 'AUTH_SALT',         'J>rS@[ECfQ5lcU7QCp~GAZ-&3@|Y} 8vZexLI9q(nhx@4h[?0SuNFz:R3Au}KGB<' );
define( 'SECURE_AUTH_SALT',  '[@YDkhm^JTD)[klfZV>w<d,{s,^V@(N_sf2=7_LG,mjvkS~NhEJRQUgk 2M#J/=r' );
define( 'LOGGED_IN_SALT',    '&7X.Sbnv&!038HXvQ>`LStqn(Jg,v!tG[GhB^UX6b/_4]:)Xh$I5jm,Yh!2?Kc-t' );
define( 'NONCE_SALT',        'p`x!v:7~Mx10mN3+|/9<FGnLVIE60c;y+j5qSrp3cUvG{[UO205uVYyP^=le;P9$' );
define( 'WP_CACHE_KEY_SALT', 'mF7w^Ib>O}i2r=8J1j.42-W5_ljtD/1*Xy@8H!g:t(DF_!BVplLH9B:&)>Ht1:8`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
