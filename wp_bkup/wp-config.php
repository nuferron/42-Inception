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
define( 'DB_NAME', 'inceptionDB' );

/** Database username */
define( 'DB_USER', 'nuferron' );

/** Database password */
define( 'DB_PASSWORD', '42BarcelonaDB' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          '0|@P<K;]aGsZdO!9gwRZeib4/P K!LPLyLY*Jix$D~mm-E1^XnRT<zlBThGZi$oo' );
define( 'SECURE_AUTH_KEY',   'n:%p}m2{-%P5SK|yH7l{Kjuj`_/BHMNe~Nv%;-g1!ya,lo,9W :g[^7t&G?e`m)8' );
define( 'LOGGED_IN_KEY',     'cC1G!=]e KKA-h)=24WBXEg3z30>|?j:NfYwU2$LU>70w7$MA#jJJa4QE23K_;RX' );
define( 'NONCE_KEY',         'wd7zXy%SuWn7#=ve(,l<& s]$|QBi ><kk!XTvs}8]3Pm;QC)AQ0J]#=1D^xdlD%' );
define( 'AUTH_SALT',         'rIv/9]7fco]Y^)8EG8.Q[(?}KJ-uQJdZy;xzCqJ+aCEx)<m?`3lT]9y_qbqvKm69' );
define( 'SECURE_AUTH_SALT',  'ip(I_@h*VD*dIQ?!:zcqky#=L}fWaaNjV-aHtj8.1n9%7Kklyw:r!#whZs+C{E]B' );
define( 'LOGGED_IN_SALT',    ':%?gSf?u_}v@^ZnL&_3@.l}H6TKY*A}#` MLZ{nqhxXBrP+!6iezVNy9XM,WtE<S' );
define( 'NONCE_SALT',        'EQ/yH=T-U=ej,#!5WT+_yx*|wzOgOaS+:WCcrw<Y_,.I}Q5{{O6:>Fftc;9N0wG`' );
define( 'WP_CACHE_KEY_SALT', 'V5Ci$(wQ`*P_/dy0Fc;`zcgtC)YOPhMf>Tql8Kou4qgtmyTij%a^oWwk{nap4Ai7' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
