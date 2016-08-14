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
define('DB_NAME', 'wordPressSupHomieDB');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'wG6=/_v/<Bx,)I>f}]@hhn#E;6`t(e``P56Vs: }QB`({rs}maFE.2a{D2cKLWh`');
define('SECURE_AUTH_KEY',  'Vq8HNAm6=lhpg5l)*T?k.]&/i)lvb/*;F7x3K0bn6E0=C}=lal##g!ttp8rLtV1w');
define('LOGGED_IN_KEY',    ')7MUV&{xBoe|NMFq^I/mu/l=rf8@~/G6G={F dKq>M<3/@)_:lM66ZUK3=5#2LiW');
define('NONCE_KEY',        'e1HhD<p$K7.SE&UF?~|dP:63#]tybLvt/a2G!Lm&n{gTE>ynHZ)4;0U?>{j^yf+a');
define('AUTH_SALT',        'fG>kw]ad#<RSZlCu2lB$%lr|b^MGc9n*8xzl_<0Iga608e]XZ*#S4.gIID,?)qZU');
define('SECURE_AUTH_SALT', '$HcCUv1]q+DaQ50s>KGvE.]<qT?sU$Lpw{B}1R<2n. I<J$<&;~a8A4l.Ccaif>=');
define('LOGGED_IN_SALT',   'UgCO{j:tOH_*_g,y$MBJ(m-}39mU&/ZP/Xv|-Y6N.m4V; U]b1ONx uQg(tE1EqS');
define('NONCE_SALT',       '8}fsFhou ~ /6= !,Pz@F_~@Iy+,9.%`if`qU2N=g]eGZi%fKe=]_wfrF4eYXk$)');

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
