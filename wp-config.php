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
define('DB_NAME', 'portafolio_wordpress');

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
define('AUTH_KEY',         '1$c#S*!>Kk>U.H]U@++s(c/9b<4P_DX`jD^03I322Z-JPCfN&2`+]6DW6gJ~*g/*');
define('SECURE_AUTH_KEY',  'yLKl.$WlYugL:arO4c[3@!W.YoVA](t$4J0.&F~->%XP]y 6`7zu=JV!2lIKFz[V');
define('LOGGED_IN_KEY',    'YPtnBI!I5~wdGJlO>F7c]z34n{6N*J!^o~xtQE$|vW0]Fed>OIzQ0e=L>,|I&Ve<');
define('NONCE_KEY',        ' YV$Vtu{2&9u&B!)<,dG!Rj[tH{f]OGq9=c5Gg ZxbxN^H(WGGKruOk!)_DdBvM`');
define('AUTH_SALT',        ',$7]Un)Y87GgE;A:zO-wXT4Nt!ESbsE71kIu28)g^#TWk=$x_zFbHdSP6<Xrh{Ju');
define('SECURE_AUTH_SALT', 'An?`p~;)ps,`fVTm*Rrp-=7`910dW7hI{=EZo&% Z5;EAXnD7`eL4yr#e3Wi>E8=');
define('LOGGED_IN_SALT',   'QUr_a~c]1M v<)_<.0Wm}v>Vy5d#Ks=Qysj:orQuw} o=$zuOu@|{Z0);I*/Tiie');
define('NONCE_SALT',       '$4kgL$$0>?YmqU3AY.g.eiWi2u`3!gWe_U6$mIf;%l7!_5 c$M*F7X/~S#9x!6P;');

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
