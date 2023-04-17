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
define( 'DB_NAME', 'asperio_web' );

/** Database username */
define( 'DB_USER', 'asperio_admin1' );

/** Database password */
define( 'DB_PASSWORD', 'AsperioAdmin1@asperio-web.digibay.id' );

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
define( 'AUTH_KEY',         'v!kR5|1S!)O&M}_]cSsS~9!n;1FEzCkA9@MY!]N,Sc$CBng]uYJj~k,p<a~4XT2h' );
define( 'SECURE_AUTH_KEY',  'ZGHR(4|uH*bL`qtTS?lri_t]15|A6HH7UI)6suku0p]34A?rWn,DY1: b5dku{zw' );
define( 'LOGGED_IN_KEY',    'y&0tTPhSATLN[kL|_u3O]Go$`s( m,UprAJSf0-MA04Zfq1x5XD*N/i:Q{B,x%;m' );
define( 'NONCE_KEY',        'T,=l~8+rHE^Q&U{1i|+aDl*{d(d!QZws^jo1llX@B>UTgz4npQ/B2GhID$?WZ+<L' );
define( 'AUTH_SALT',        'An{uEar}T^*~<ss+H|Gw}lx`1F,7zU.E1!!m?~c;MPltt0Uer#v!onSd~QQ6D[z[' );
define( 'SECURE_AUTH_SALT', '5lL%gdM[ONeQRB>fgecAJ:uMmP4b#3H@5hiZ #IkeiY^uzXmR9H2MK3Vx6iabR5j' );
define( 'LOGGED_IN_SALT',   'Hcr;;(MWm:5#SKSS:2@*,N Hf{{|g]$vxo 9bJTy,*@KXQ]_bn/=6f+z[*usLrF,' );
define( 'NONCE_SALT',       'wAGC #7dk,Yl%)<xWl&ArniQ=0}ro%z;L&f&iVhILHp`q0O=~t` TyuRLaisTDZj' );

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
//define( 'WP_DEBUG', false );
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');
define('WP_MEMORY_LIMIT', '64M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** Sets error logs*/
@ini_set('log_errors','On');  
@ini_set('error_log','/var/www/html/asperio/asperio_web/error.log');
@ini_set('display_errors','Off');
