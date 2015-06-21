<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ':N9nw4J$^44%CZy- uj+y7z8<[q8D:&X.b1r[,-{^});I9gMvN{]2%-LlJ>pk2XK');
define('SECURE_AUTH_KEY',  'G{<(ynn-|5u2c$7T?Ntu0Sm)L n4@(*/vdy=Cb{QU#BLSqY.[39|/<we-@(BH)ZF');
define('LOGGED_IN_KEY',    'q$ef[#@2]:Rb|F[=At,!{/t0BS{!/4~}jn/1e69a|;GzCNeHDT?2bK*`Kg/37ABq');
define('NONCE_KEY',        '|7+.sZ4,lIZg4-Fg#L|YG:+0 Ptr(?h%M]ZPk#Gs!D*BdIlD%{hYs$$^fJ{@b6I ');
define('AUTH_SALT',        '`?[h6|!zRR)28P)$>83T5gM>*KQ=zX/woBRilx3vN}X3<UAyi#X#q_WlUG+HvNOs');
define('SECURE_AUTH_SALT', '8I-52P.pd(f:Uh.}p?ksC Gp&vIsAI5Tl/<);Ke8ZR7[j *E>RIf9T2m*2.U,o%F');
define('LOGGED_IN_SALT',   'BN@{l72A*Z0Q@k63@_yD[yisy/4h>s0b`5]!.uB.Y%g9P.SOo{DfAvf?[t,eBK;f');
define('NONCE_SALT',       'Yg{&+t$Hi$kW=mY:/UJavL uIvBS&/C.yew)u0m-bg/JdTh;,jGYm+H eWnIcW`2');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
