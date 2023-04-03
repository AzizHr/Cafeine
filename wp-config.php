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
define( 'DB_NAME', 'cafeine' );

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
define( 'AUTH_KEY',         'DY[!Ak&rv/+^st !:4z0ALU7WTd&;X35+=}>hi>*S!&{awce;1uPlo65v#p:sX1&' );
define( 'SECURE_AUTH_KEY',  '!;%ZGG]H`M=gWyT*G?T9bk0?lRw6u__6vVAg.9j!$y`Nj|J%8jr8c,{A|4LYC[I5' );
define( 'LOGGED_IN_KEY',    'x-6gnzdlFs2(QUON}.Z{~`&6Cy?RRWlF2{^@V].R!-KE`x@RzQM v=:|g`08Igi&' );
define( 'NONCE_KEY',        'Bjp6hC><l+Mg5u {GnOut* 88q-819Z0fx$_i#cTT#%A:(FAHsDB@[F,164VY!Ss' );
define( 'AUTH_SALT',        '`By#(b.9^msJTcr6gtEj/yjf/L4rS;#zcSG5`a.H6=Fj L):!>e[sQ_g5,A fp18' );
define( 'SECURE_AUTH_SALT', '=H^1Ma}nr3IT:8Ul6/yA_]t{I7zB:oX-2~a2|ty--vCllW1t|Y6Cg B&@rpQw>%s' );
define( 'LOGGED_IN_SALT',   '{Gh8-91vHBEXehFw.E-e&51af/owcKva21}-@]kHbyVfd] N*cx-%8@$Zj<7//eG' );
define( 'NONCE_SALT',       '!m 4Rn;F{LH7^R0;2JEKdT7nw0rp$7(4n;=7=LA47^c9SQAhH^{$zl<!9MAj6d&o' );

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
