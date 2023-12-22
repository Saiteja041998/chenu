<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project_3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qS[+lK/Hz#a!&>Wi#pqf}La`]Yw}b5;<s7WDB~WE6B8HQmH8}mRMg4aTGt8B3O7N' );
define( 'SECURE_AUTH_KEY',  'c`ki}n8UHH47w#`A7!k{^yF]+fs4dH-8GR&a9#h%7i)qN ppyx}Es_^:!ky;RNli' );
define( 'LOGGED_IN_KEY',    'F*~LLkSG6@+<6X>!-ilriZ_J`[+qCB=S@fpH7kA|bY`h(*_w+3P` [|V-{L432->' );
define( 'NONCE_KEY',        'BhZa(8DYaZQ$V&StrWUrm-3$V^LWyvXqN+}c/sMVa847lol^X^[w8(_6]o`4HC&-' );
define( 'AUTH_SALT',        'GH8 }J6j}eAT7q;e4%gr=DiI>~5;m(zU#^oxKX&BmAEFDlg_Q_oy !*O,_ZGpARL' );
define( 'SECURE_AUTH_SALT', 'f#A=]K%E&d@N7.HIu#(=hC5h0-#xGeUuu^0c{1eX5V/YAvQj($Q<jS8B>2CnAIB`' );
define( 'LOGGED_IN_SALT',   '=RTxBTTkjffzSnH 3F?y22@&kgWnd]8ODn+4Ge|IJM0]meWC7uL[+nkqDiXuT#Uh' );
define( 'NONCE_SALT',       '/cB}o,fw+ Y7qdh4=k<l#$O2VF7?5.p/^;2N{+q=+p;wn.1Sklt?=L:R^YU.-Qbh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
