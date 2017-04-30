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
define('DB_NAME', 'wpdemo');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',;2(Fjr?k9T?o`E>R#$h@4n8VT=TZjD#d}Dz&GSdU`!go1L(}ec/^Y;?Y2Nxnpx:');
define('SECURE_AUTH_KEY',  'pp5^Q56Dr3E_FU`AhR;#$9T*w|J}}Q9yND/O|kZ1u8WG1H.T$:i3hT<f$&leWQr<');
define('LOGGED_IN_KEY',    ':l(Z-LroU[EkvKFs)7q>O8WLOYrw@Yzv8Ih{:D(_b^z]q!M/qz8{0{Zwjz+u1WDj');
define('NONCE_KEY',        'xWvLS3FN+My<n8vs(]~svY^{g=U(^0AA~B>V_)PvwOg$tH)qZ!{m#92O0L/]iB7|');
define('AUTH_SALT',        'SXDyX0PdX{0J&j0lqu]Vh>Ka(]Ld6d(V2]N:An$ZMm@5wOfua}V=VcXMUBaGs) C');
define('SECURE_AUTH_SALT', 'xo|MlE,}A+UH]%*nDCHoS3#@GBl~S}%-LjbJv&C$}WL3y<m.L9bqUw[4#NiXJtbs');
define('LOGGED_IN_SALT',   'e$FYg12d <;lW?j^v;I9n*2!l4GDn%TU|__YlOUx#%kmhF$}BQ51)8YyPs)$3q;?');
define('NONCE_SALT',       'T|C;14(6#W<DTqQ`/P730XP5<N$9ByCt.&lrX}}mI;nX)#IdX~*sp*AP9/becjp0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
