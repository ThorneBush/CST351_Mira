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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#/T!Vk!X%ye:2x/<Q4>p;g{<d-#D[M_!)p^[Xiqw|Gg_O2_8d:ltZ]<Pc{c$L]Tr' );
define( 'SECURE_AUTH_KEY',  '929)F{BS.h9f{#`!4VsC~7i>sEJBX4|s%j{&g?|o)UZC5_X;eW9~P:$I DNRi6fq' );
define( 'LOGGED_IN_KEY',    'eK;%(kx~x.x5Zr e?Y3=; sO&0>4WEByJ6MZ)0Tx>6}}q~c5KhZ&XB>hH;T17=z=' );
define( 'NONCE_KEY',        'XGlhs+q<E`Ew?mYkpzL%B_=j&]S1iU#7Ero2^Vf9*g<Y]l%3G9gHxw 2^{<y/S~6' );
define( 'AUTH_SALT',        '>Oe74F:6Gu$&iR$,?]( IyLmAXy5wjYA-{0:#H#O+LftWy7G]rgmDeLP+qaT|_pT' );
define( 'SECURE_AUTH_SALT', 'ftQe?k^0nOBvGp79<pqIdCGw/*n@}@}LTq%{V%P+|2hs:)=BAb@?tK?Mz@9f!CS1' );
define( 'LOGGED_IN_SALT',   '?lz5ce,X+G`Jfc@^_>K@A_r4!%AK; R7L-#u5y3Y$LhDH-X5h8(Rtp;fDlr2x$qz' );
define( 'NONCE_SALT',       '<1C u=Z$wj=;1BD)qQ1x8<#Y<Jvl[!YQ2<5(,FbDO +(B}2D#-<+;kK6JUkDmena' );

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
