<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nguyenly' );

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
define( 'AUTH_KEY',         'q<=#E l-2g~[/J (o1{z(c?CGZ<[()D5M#Xr}r5U^aO?9`B~zX0^29QTU*-X:Xzk' );
define( 'SECURE_AUTH_KEY',  'hiS*TF;/W^dTM,2@ekIUUbE;E)BXmmuDvJfX7*el{@|=R%>f~rHQ5g<=~ej5qyr~' );
define( 'LOGGED_IN_KEY',    '>Y:[~L(Le56EELw#ff/!T7?2/UGZM)7ej?f!X%U`7_hs^F]EbE~I#kW/Lyvq|EeP' );
define( 'NONCE_KEY',        'yBjP}MG24-rp>s@b^o=S6)}Eu .mEZ%4^A,9;qf.N+A*}8`w:i:g_GU(16>S[4HC' );
define( 'AUTH_SALT',        '`Gg7.X*fQ,*~6][F/+8=+quLC<:P}uH.#a{D^2VVy~R6d+[>:A5YFAkJ>!>fO3w~' );
define( 'SECURE_AUTH_SALT', 'J8YHDMqR6{#92XOg|hWjRD)M#^;Qkq6AH7ke`G:(5Vp)uaN,0M0j!sNa?.MY A7h' );
define( 'LOGGED_IN_SALT',   'JD`_kln%~STX)`j^!2wP4NJIZ+08S^T3ZV[Zs$+h<zEP?:DU9^J%%,8^wIZPCT}n' );
define( 'NONCE_SALT',       '9RvX.;3pNzu9aP72BvzT~C]m4!iZtXI^;*,M|e+M=((uox6%}=!*(LRo{5-eb:lU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
