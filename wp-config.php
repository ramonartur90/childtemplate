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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'vr1ql64f7daqw2xv3ifucgh74ckpzq8d1jlio7gnthgm89tlmcyshftbrbfynas3');
define('SECURE_AUTH_KEY',  't19woxpopa50x2cegd5fqrkxlz1khflto2eem7tnj1jw5xzpkhgxwp9yunvop6ut');
define('LOGGED_IN_KEY',    '8klbywxoi7palamz5hqwsuvwkpzieae0wcptkdmis1fl2khn78hbgliidaphsvaf');
define('NONCE_KEY',        'fwgmk5uppvkolszazjveypep3gmbwiccant3vgtpti7fwspurrrrvp812bdo2dhs');
define('AUTH_SALT',        'bj3o8vcvnw55z7ozrmvr3u4hs9g3to9ssx7pkder7xkonw40kybsvmxtxokrg4q4');
define('SECURE_AUTH_SALT', '8uvz17npg2elonwhilbsbtttf9ibaxqki00odtibdcjjxejggscclgf2ygab4zod');
define('LOGGED_IN_SALT',   '31592g4m9jl1db0o2patwvxzcohkbcjvgcqrzwq9wc0f91njzcytqlu1moluetzb');
define('NONCE_SALT',       'ihxhi9bld4vvgdzsnvvs6fhqnrnddsfzxqxkpgjive3t54wgpcuxiymrmwue571d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpal_';

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
