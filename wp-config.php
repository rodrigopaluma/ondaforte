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
define('DB_NAME', 'lcnassoc_site');


/** MySQL database username */
define('DB_USER', '');


/** MySQL database password */
define('DB_PASSWORD', '');


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
define('AUTH_KEY',         '[/+!6kz<GLn&b;r(;BkoLrl)i(ZGZK0k{:I:nqNiIOj8v`X)XRMpd=_0%sd@u+i$');

define('SECURE_AUTH_KEY',  'W(ww2:m!OFj0rc!A(D^-3k;gK<^<Lvi})n:*J4ln9b8Hec^LQvaj}`G+b}UI^CLt');

define('LOGGED_IN_KEY',    'GJ35e|Vs~Xb#]^@N-I-%7XbhkK99{|B^@abSN;mv%er3LTE[ys^/4/!JW~F5JC7y');

define('NONCE_KEY',        'MI/HQS6d#uLphhaEqgUkKX}>Zv +<s|q5gX.T)lW~<a|%mkv|JWht:/wdOi{Uh8@');

define('AUTH_SALT',        'yDIj[F*reTe@)o;<)V@!??f~jH(|{M}W&HTl&/*Q>f9;P{]zL:Ju{l{=RGjO7@iL');

define('SECURE_AUTH_SALT', 'Fl=wW!Ckt6C+D*`a0gx)/?z{.M9rcQx~^OM=pL8i_f+=p8!1Wk^RZ;RtYc*;wI=(');

define('LOGGED_IN_SALT',   ';sA_Z.dX H5,`izFx5}Kt>&4:9n@R@*(x{lQPYY!u1,*Z.wY+xXb _zZ[Lu:K5O,');

define('NONCE_SALT',       '_b9)=Q<$qX8=01r2XwM=u:%L=<Re_9:WFyM01a!~0[l@19E;AuQ+=~s=&e+fVjo2');


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
define( 'WP_DEBUG_LOG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
