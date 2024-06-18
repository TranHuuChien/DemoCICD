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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'W&qsP#>5wSK0~0659ux]%#2ZV#^9T[%EJ?juiU~e)raN{C(kP`rYV2!Y&A:!VpSb' );
define( 'SECURE_AUTH_KEY',  'RD+<D4HLO6eX~,MzPL%;Tz466c8VAk(|oYE;*atQYOW*fS0I5BIrzUIw2(Xj?:A|' );
define( 'LOGGED_IN_KEY',    'fX eerG!%amc%Uofk=BZk /gnZ%vO5dZp<IJ.1Q~t<E#!MJ<>i4DHBaFd$/*7I:2' );
define( 'NONCE_KEY',        'BlyjmZvSC5zvw%<J7i_K]~a]i_QwjY#TJeFLqvuUoJ[p7#}J=;eXNx&tX9[Zx0fu' );
define( 'AUTH_SALT',        '=Zm-IRn~p%9 FJtu=:ik+b!&&ELd!mPl?~98P2W8zw<a3_soj.oTRo^1x4Mm(ijx' );
define( 'SECURE_AUTH_SALT', 'D(I&~.SE4{%)1VJaxv6f.3@G~[Dbm7V+6G`*rpV^Wnb:031)3MQl;lr!0yZ.4.8{' );
define( 'LOGGED_IN_SALT',   '7ou:&mn3EXmta<}vQRInz(-}PDQ3mA+=e+-qocl*ll(*SeJ+JnroS%5<+LDv9|La' );
define( 'NONCE_SALT',       '@26eTkC~^]/XO??U ,?_$(`j?L%wMo {8KzxVhAR7<O9^=a}Jx1YT7)mb)3q5hcK' );

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
