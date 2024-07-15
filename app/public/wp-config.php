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
define( 'AUTH_KEY',          ':Sg.s`H*JwZ_@&196Y$,!Y3aW6+j0C,i%=iC[{UP^#;>rneW]{=HqHB{zMV o<HL' );
define( 'SECURE_AUTH_KEY',   '1yS$vctw;_9b#s.eQzdG6h{Y[In899`C6UAj:|Vass8wcHBs/iH :RzJau~?fN]F' );
define( 'LOGGED_IN_KEY',     'WMmSS(B%!v_%P.?+m9/JTV8<#2,s#B5=euQtXA_H$jSM?G-.8PE}n)-_W3T$+1?C' );
define( 'NONCE_KEY',         '4B^,X1Ro ,|$O6Ywb1.Jy](s<5_lj+p*+N1l-}Qk]gFK4j=O!_<dsyY)w_ lE {X' );
define( 'AUTH_SALT',         ',0jU897~>g,)h!rqv/:Z2zZUvC{e:>&g`]AW!C+wrq$ri7/B3r:g5)q?PV+ MB]j' );
define( 'SECURE_AUTH_SALT',  'y5sT,Z6|C?qAJOq=cD/](iK8!lal[[Ic1RN=FiP1P9doK{H>9]LM-90S*Yy0THXG' );
define( 'LOGGED_IN_SALT',    'P %!01nYDsh~]kc%j.-&F7;,2Rukigh- C8^k(/V@F&6LNqC^<,F=g?aggwslJQi' );
define( 'NONCE_SALT',        'vO-7oQnBdp3%+jAMYhcKn{{&W-u0-iyoIkh83ky)_mg2|)Bvw[6r|C/^cH$r.-&.' );
define( 'WP_CACHE_KEY_SALT', 'w0jD&zzHJSV_gb:4|Ep*{Yv:x=rh-B) J~UN>mrWA7<@X445ygV%4*,m#LL-@2U0' );


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
