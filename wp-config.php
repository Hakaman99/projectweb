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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'm{@,`u!NOFB3KNa*:ar*]#%dsi#Q5Sox[6x=3YPMrd-op?{]Ps<EdH 9pvBq/^0}');
define('SECURE_AUTH_KEY',  '8>jtpsbr!:7P[wusm6Xm?o ?HR:ekhv1l*tV^2DqwBdb(w nQb$U@9CPI<$Lg1s;');
define('LOGGED_IN_KEY',    'w:6Z3_l!DvUkKbG~9H[vrcj:xZqNVsN]RND8J`FM`7U0v2-3|{6xrM[ d|1Fl}Xh');
define('NONCE_KEY',        'uiWXD &r5NKSPaFIu.-O?Q+=fFO|Av?[.K*e_>XZ4uQ$}do}2vGuv049k]a^iw(G');
define('AUTH_SALT',        'B1O|Zu+Wi~$?-m A}u3>7|]o,zG1?X>x7@:cm!eDE%.5.{d;q*D;0 Yy?+FPK4e6');
define('SECURE_AUTH_SALT', '@rwu/hNkmA=)O/02e<g#B)yKz^u|:i6tVB$}2vq+WRp]<)`u*jz];Z=;3&[wMt.m');
define('LOGGED_IN_SALT',   'lB9fu=Vf}Fq}i&eIh7AID@9TY]HElFm`|dt<@o -U| Y>=lU);)Kr<0sC_Xycd/q');
define('NONCE_SALT',       '~0PkM 8PmIPZ|>*yg,<}3&D~[F}mD;CJ.d16d;C6P71IlHn[*gwDk>z.t_t>4?AF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

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
