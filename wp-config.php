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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zdrojowa' );

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
define( 'AUTH_KEY',         '+|O/oBd{%_AA<S iA=RZ@,9G>5c@3grK]R*6BcecCwA;>abtTFSlJAR|J:-Ft1ZV' );
define( 'SECURE_AUTH_KEY',  '_fHgN$.X7Xi@wKt#]M (99j5fM m2~qCDQ`Zv7z3>K/OU+<Q]YyBD_-9Di`ctM(|' );
define( 'LOGGED_IN_KEY',    '2z5kvBV7(B44YX93u^#,X2CcicG^nd$VdP7YB*^`PWv~^zAJ?lc8qU8V*%X$qTl,' );
define( 'NONCE_KEY',        '-#ZNu`5#Qt~c@EF#JPl7`V35Tm/Z;mmX{QuU/Io5s+]]9epNiRmH5::Y:,J|Ib?Y' );
define( 'AUTH_SALT',        '!~<Oy^g>xF2/E2MCEvGpG-:?lh,*y2.b`3a3I$K<if}V*Sj_rhBs{|8-/xHYcO$3' );
define( 'SECURE_AUTH_SALT', 'cxO*wS5yi,9uSZ)!6veIcI*z[/d$&NP3lP8>B<sLM_{9iSb.pp]A=b?I:u!~G/&m' );
define( 'LOGGED_IN_SALT',   '|-a01T/OJ-j^W[pX+NF:sF?46r( ZDEJYEQIlTu.h*5lbYE-ym 8?rv_60~L*)KX' );
define( 'NONCE_SALT',       'P8& #o:W2`V.-DS*[U>4h.9@Zt8NrTJl&&Fbd(QLmU}~6n~}N~To-==)~RHxI@,]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zdrj_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
