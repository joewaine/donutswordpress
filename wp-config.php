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
define('DB_NAME', 'donuts');

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
define('AUTH_KEY',         'vONu?&De56BtUc/)>Kj1jC-g~3eF}t=x-YN^ wFn_vxEUm|)k;Y}I^@+g~XbfdMz');
define('SECURE_AUTH_KEY',  'yBY/Ub-y&DT|c?r-*-/10=esq]?IRC!WtJu=M{uEe%@s{9sVLlzuLqm(4~ZTWc}:');
define('LOGGED_IN_KEY',    ',<aHM3_c[MNa9|WZe-5ix|#-LQXa=NTV,>*MK?hhP}to?lfHLMS6.+{zdr4TV#|%');
define('NONCE_KEY',        'So-F{90Xz[e6v.g!8XSe]<zcvv%SY:i5_-q~}<hfp~z,k:}^3ykS&/9)5KwEp.iC');
define('AUTH_SALT',        'bB3KMIrs.Hj_/8[DoHOy_&(4h~EzZ94w=CqV#/(s[|QRK>fD<>27_WW4.E^UGK@4');
define('SECURE_AUTH_SALT', '<R5]PkL)wUXF!bj!VF_Bq_!)!J!p=$8<]3VM6ig}?I{%ampR7}lO(6=;m?K*4K*L');
define('LOGGED_IN_SALT',   'UN?&):L9<p3R:pJiDD[MZql`ffy<$(^j[euJNo3,RD88HiCICXz*fFo3foZ.bS88');
define('NONCE_SALT',       '6%)uUg1m|z 7OQzi7M|%%71JOUN{Fn~ `so3Ii*u/qD0bed8[<slNQP4#VO*kb|_');

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
