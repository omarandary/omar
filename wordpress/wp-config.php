<?php
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
define( 'DB_NAME', 'omar1' );

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
define( 'AUTH_KEY',         'CJ|ukJ*``qYb-+{dYk`3]B _}m6fz;t5z>wEli`>^Zb*Fix7r[Is-|&tU>OO|:8^' );
define( 'SECURE_AUTH_KEY',  '{D7~V5nNL]cFA,?nY6#8EstzSCdg0zY6~@t&Pj20|ycki  ~m;OBx%}32Z_eU[;)' );
define( 'LOGGED_IN_KEY',    'M/{CuHx44KpTU*FW_(pe&YGjrYE%$DVaw>*.{c$9Q ]BvBc3pmC2~G-o~kcJB-5t' );
define( 'NONCE_KEY',        '0R)W&S s#e<g7;7huKdq?tLshU-qf2Ur.[B>]lGzu$3jc=;$T6E[{rF6~Ibw{reL' );
define( 'AUTH_SALT',        '#]e/&#(?n61{`ze$a^AC~OQ5yt)*,VT+6;5MJKk5v)qJr%]pbe?xMCID:qZzsC.r' );
define( 'SECURE_AUTH_SALT', 'Ti!FhMAoNO:1%qA;Mu3cc-@N5`@/ez)6i+XD6GO@e2mpU|lFpCNl<qTN@H-oT69D' );
define( 'LOGGED_IN_SALT',   'G~g;c?gWm?=WNTPuoc).{x|.Os|3.kpNy#8,t48IiL]e~eoUL{A0K:k3F~;WB6T<' );
define( 'NONCE_SALT',       't<8|p>_D*<DBXk,| t4{.-Uusl@[zDA$B>yr8~W3sez~3e/PlbCn=)m^3l2ZT4#3' );

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
