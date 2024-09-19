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
define( 'DB_NAME', getenv('MYSQL_DB') );

/** Database username */
define( 'DB_USER', getenv('MYSQL_USR') );

/** Database password */
define( 'DB_PASSWORD', getenv('MYSQL_PWD') );

/** Database hostname */
define( 'DB_HOST', getenv('MYSQL_HOSTNAME') );

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
define( 'AUTH_KEY',         'bS0]0ziRTB*RESaF#J4wpc$Qo1i8Lyg@$ q02)pQs|qM02K9)pPW*Y&3xEQ3Ca33' );
define( 'SECURE_AUTH_KEY',  '9k]1*jxS%~Mn:76n(6FA7uaovw##b)6&k-K5]>Xd(qD@xw1yp~cw5ItYM_&K6g84' );
define( 'LOGGED_IN_KEY',    '0Izv&e1.4x~=k TORK^Rt .pMr1MUsuhK8H[t6C{`e7)]jitI#r&`+xLJwl~L65%' );
define( 'NONCE_KEY',        'cv]|UG8r:C2;~=1*7Hi($[gF|lUcAUc|fm]h^ka%yT)&W$+jIY{`7*DNgeQ+~nx@' );
define( 'AUTH_SALT',        'DO@;#qr73H+*LLfvAs4`f#%h1A0NKL9mTpw`Ol}1ayMn(^FZHwG^YVx.o}y,PL_[' );
define( 'SECURE_AUTH_SALT', 'Y=p,xJzD6Th>f0nyvi`f*<y!Zz&sFy/JYQGO+F&&ZG7a!oG:EF(OOjs3jE/q:^qE' );
define( 'LOGGED_IN_SALT',   'E 0Fk:$[si7Q[}I.avIe@-K;/i!cPu+!;KQY?&ND+EDJ/My5zMOT85Wl+Kc{EseX' );
define( 'NONCE_SALT',       '*k7@(`vm&4m^P43asUi@i_NDKXZ~Cs%y&M:`aev,<sZ|I+3?v-Q${eP$Ai=OaKK%' );

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

