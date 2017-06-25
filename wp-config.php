<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'kamerondesigns');

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
define('AUTH_KEY',         'D>d#6tUVpZS*u|2#/|9azog^6X|,&rlN^P/n%tWMIk({+l4RUP(vGFAVhRZ}jE_ ');
define('SECURE_AUTH_KEY',  'bHkc+)/%mj.!?<uzbG*tAmKO]r3/O>;m?(kIAcBn}!|}DFFx-?6iAb{Nl}P7_u8&');
define('LOGGED_IN_KEY',    '{.P@%$Eq+[c}Es*y48UE:+0O06c$%T{er<x,+H%MjkuJcm.fv-xqi~Sv!*d4SqJ|');
define('NONCE_KEY',        '8&FE$B#8KVF0ow6&&VI,}[T~+djw[dJd550{{ha4|,gX~|P@?UM6n$A<u4a.Mon!');
define('AUTH_SALT',        'r=FF+P|4[>tge}^$l &>..#~~nDK%`]-x+fSnINHwhT& AVrEtHNO3KQ-.e5+Ee=');
define('SECURE_AUTH_SALT', 'yz(1:K^-oSM|)&0;j)(QbH>Bg+C?MOTsu}.t,zc!QC<2r=G5;h6eg6+S&-&>s@<)');
define('LOGGED_IN_SALT',   'UN3<|hYE-]+{ZroTw~?qcyLPDz|`1NwMsTW#cSr_R9nhOs+*37w~sa)2J8#e-M5}');
define('NONCE_SALT',       'FXVp2p!#[Q&17x7ce_1o%,ODj2RtZK I:U-x_|Cq5O^e<;][9[j. !3%4=GOuiwd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'A20zyXf12k_';

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
