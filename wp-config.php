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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'example_wp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'a+ih_2kjg!VF#BX:#h$>})HW2~xjst&qG!zER=SrsW#RMLoz8N%2G`2o4WbcewI;' );
define( 'SECURE_AUTH_KEY',  'n)D,UWAJeQI_vKmbq:H_bnI=`7%}|-e6/n(-ssgZ1;;>r)os,GA.>d[UYCr|Vs@<' );
define( 'LOGGED_IN_KEY',    'j8u2]XP20Ncb~<)k{DnU}Ku:+beXu))sUI|U|5O`#6uV[uE<EFQNxQqv/P%0s9q|' );
define( 'NONCE_KEY',        'Q(for{ml=VCR^DJE80xQsKiX|cv@XP)ZnXzx@(U_Lw2y81;=#my.@lnVqFuD=p`U' );
define( 'AUTH_SALT',        'at;;DEOEY^Yp9PhXnNgaJ0O}:{tG5$h0Gp7>{o%CqR3.#s;}#pI|^L1b39=[-J&5' );
define( 'SECURE_AUTH_SALT', '9o:vn,87Q<<ajj-CC}rbyd~$|c/NuSgWlar7H $|=sfs.Lq|xR}O<S]m!YvzL4sb' );
define( 'LOGGED_IN_SALT',   'TsIAVFw66R^4tP:w9&c^Rx<cOm8CvQ+z;<?DZI`SZt*s(=1bs@ntfjpB(B<Og<^,' );
define( 'NONCE_SALT',       ']hE99i||S`n+-ahR7~n9}abb%<[,mq40:^Dn*}GIH*tN+aK,@$?EWVa|pHq]vFBo' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
