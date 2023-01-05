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
define( 'DB_NAME', 'wordpress_ecommerce' );

/** Database username */
define( 'DB_USER', 'trainee' );

/** Database password */
define( 'DB_PASSWORD', '4339ffee852b5eb2' );

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
define( 'AUTH_KEY',         'hi7#MDToImvt/E;b^+kF5JlMpk0@je%$K[Ghlt,q-]R?-~)r`z<p!bP:U >>+rn+' );
define( 'SECURE_AUTH_KEY',  'KHX2^v;^:n:$(4+3{qo}jz@BY-6fXK4V25uT$Owfj)n/H:Eh!iTMN:qB2^a+(qm(' );
define( 'LOGGED_IN_KEY',    '_S86){@#$ADM, }g/f,M94ekY{Y@M_{<gg5OFHz#8mJ~*;a.{98`G`_KY:jDCbAS' );
define( 'NONCE_KEY',        '87%_M<B=r YNW*)x`WdbEH7={W)q,Jyz},tC,^RTk3 g54Wg 46m&(u.<s~WjU(%' );
define( 'AUTH_SALT',        'CN[*<!&XZ?33c,5`UUZ$L+L}0jB37lgGh-.U0wbY!*Iz/$6z<pXyU_ln8qWB?dzY' );
define( 'SECURE_AUTH_SALT', 'Dl?DvV~/kt-dx?8%9dw-H&VGnN%.cC!(XRcjPO^i@2aNcSnIfi(lP~`LF*.ugri!' );
define( 'LOGGED_IN_SALT',   'A7g;9xDP9LA1;]ld:R$Wl3VFhB>7ep{.05iB;25o+5zEnWhJDmm Rr4rdF6>+izC' );
define( 'NONCE_SALT',       'EEknemq9Yp~*}dS7!ehB;[;+ =)k<X*. *H|xy//%R%|6ReYI`Mra?~s$8bT@z5,' );

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
