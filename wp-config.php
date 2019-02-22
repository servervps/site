<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

require_once dirname(__FILE__) . '/../etc/php/lib/CloudezSettings.php';

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', CEZ_DBNAME);

/** MySQL database username */
define('DB_USER', CEZ_DBUSER);

/** MySQL database password */
define('DB_PASSWORD', CEZ_DBPASS);

/** MySQL hostname */
define('DB_HOST', CEZ_DBHOST);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', CEZ_DBCHARSET);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', ini_get('memory_limit'));


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[r mKK(sN]]WzV(J:KmXD*]pf|/;RhaReT9!aQ<.[X`SEWe$0z1*!:ypA[SV');
define('SECURE_AUTH_KEY',  'YbppdA>PbxV*>N:Y/+/TaJc1aGGw+;+VkwDa>L%EwhG}u+bFLG/N#^<[J7.j');
define('LOGGED_IN_KEY',    ';+8Gfpx@TvC$v%#:nMbqmL_FmWc/qTde<:P|7B+Q*Nrg+yE,w,dx@pzRjv u');
define('NONCE_KEY',        'd(448m<[(n/ zH;;QZry>bjp%>tPTq38,vPc1XuZntax*abPDKe:Z(v0Rbtc');
define('AUTH_SALT',        'tcJ_FUrXYj_[$j<;1t#nhu<LQ{P>80*MKKZDa1WWY]#fKh<W0)ap})_GsfP/');
define('SECURE_AUTH_SALT', ':+BMsA^D2,PYLLRXN}m5T*Ue;A0#T5e}N9rzkt]rf4cE)Kvjc@eKQwN_a4`K');
define('LOGGED_IN_SALT',   'S2Bue;D3GAdR%$rE+mD/%5ja2Q,u{+Hb<L_+w5ECfKN#|SY@X8pYkgn7pxH2');
define('NONCE_SALT',       '[[E+Z$wF_saGRXJ/SAZge8}c8}K03x0,h!@%%_bQ<BV)@g0e{>vv/J*g,UPL');

define('WP_SITEURL', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://app360.327419e9.configr.cloud');
define('WP_HOME', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://app360.327419e9.configr.cloud');

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

/**
 * security
 */
define('DISALLOW_FILE_EDIT', true);
define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
