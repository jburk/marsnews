<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/jburk/marsnews.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'marsnews_wp');

/** MySQL database username */
define('DB_USER', 'rpl_www');

/** MySQL database password */
define('DB_PASSWORD', '9matr.x');

/** MySQL hostname */
define('DB_HOST', 'mysql.redplanetlabs.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Z{Fp]S<y7>sM5`^Hf^YP~NQ7Gru]7y<5FB.6=y24Z{T+!VE+NM6.K!5(+LwP(WV-');
define('SECURE_AUTH_KEY',  'Y<IeI{7XKmkC<mn(rVsaZL/Ca>XBT!^-[To;oZ#d7FbZg|;-dxFOFT2}-`m~Uds6');
define('LOGGED_IN_KEY',    'JVMx>s/3j<BnLMKrYu,r|l(qWR6_*3+a|I6pk(]ipL%t(`+w+q/1KC-y(YE!jzus');
define('NONCE_KEY',        'KF?9HN=W|[3._^bM,I.#yys$P2_J^hy*>TtDI(fy[BM.^9=>62wyYY-*+%,=Gr}I');
define('AUTH_SALT',        ':.Wm#+Uf9h@Yc(ro2QZsXoCZiM2zuFYXuHQF&5BwhZSb4k`7:e&-U4t5.Y<5Qkf~');
define('SECURE_AUTH_SALT', '4JdI~XH{3j#.[vTqe@qd9]6t3N3$NN@zP09*$!<x|-o+c @ceMs3vu>IGT>3-t:m');
define('LOGGED_IN_SALT',   '5phYt:8w*5r6|y+<a&2mcA{B<bK}lk?a%hB.(xMdk0fe@;{[[mnhW1=v.8 pxqVi');
define('NONCE_SALT',       'x%,u.FJ+6|ME;dE;)8u@$~+r}9#},o|ftEd,%Wxct9+wJ^pFck,xl|KJBDEp 3Qa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
