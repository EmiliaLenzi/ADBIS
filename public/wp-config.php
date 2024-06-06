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
define( 'AUTH_KEY',          'kdW}Jj)W/t1I2Sz%*`0r8q4ub5M6}_7P03Q%WjIyu/(w,/X~;O`ex0Y<BBa!SnLb' );
define( 'SECURE_AUTH_KEY',   'f3r+2gpTB5%]g|Vr8q/DI|DReM#xHUSk&egvRh#[W8yu9+zWjOLW<M#@@jomtzL2' );
define( 'LOGGED_IN_KEY',     'C1-G>f.X=G00[?&y}$t-LN+j|9O$<</WLCzLGR(?Sy]@=hi|29]8K{oREcuixsw&' );
define( 'NONCE_KEY',         'r1827SY2$EW7j~dK~Pw U>>qpYp^0pJ^OizN:.1CcdC!{C?e Pdi=Yr=yxp}.OgE' );
define( 'AUTH_SALT',         '5mn<O|<43IaouH8y~arFW$5ZyYsdB>:ZFG>Fp_2jC%K<IYEz}5w]p?M/4-Ct)}m=' );
define( 'SECURE_AUTH_SALT',  'Agpdd(BNeqUS5K{^HnOD.E{[IspOz4565RrS6jgb:nZ1!*?F9HkHA~9KbIltR*wk' );
define( 'LOGGED_IN_SALT',    ' wP3KKU`})D>9BDwpS XCN %QFD+FR.!-{0CZ=Gy=seO#ImR$MY>pcnbNQh.91?x' );
define( 'NONCE_SALT',        '5%#q=_knRaOD`.S6%VVy~}=&Cg[nt>DR+`R)kMi(xieB?{w2&.:=i@0b!-4elK,p' );
define( 'WP_CACHE_KEY_SALT', '!;oYOfnvFYe2W4ZR@B-A/m[7#=-02*,r?b7*]S$-8UZL%bNn@/)vtN-U8t7RH;YT' );


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
