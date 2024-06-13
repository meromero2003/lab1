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
define( 'DB_NAME', 'lab1' );

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
define( 'AUTH_KEY',         'K]v7@05^bQ0$LpK=idQ9e0]Y)L6AN1=YTE^q,W,/v4oo!HHsS /P_sAaThO7k]/A' );
define( 'SECURE_AUTH_KEY',  '|u}:XZtP4>?R]d$MgQn[7QgvCF^kZ!89;CLmM=S#!2o%5FVm@biCgY>Xp?E~7?7F' );
define( 'LOGGED_IN_KEY',    '~voBD<Yjof$Z7Y;%_1o@*Z,8-j90naYl7^(83jg{?R ofDUg:^uj[no6JD^}Bt)<' );
define( 'NONCE_KEY',        'hHmX>0`Cy2821X[u@.l=}t84ml]8JZ*0*1@C7>]P<7YWt{|/:J4Il`9X}VR}nwvl' );
define( 'AUTH_SALT',        'Or]RkOKbk$H%?k|:$D|1M/F|:~QK( IcSK!KdUAFfgqHtW]ZF,N7TLc7h>SLy 3 ' );
define( 'SECURE_AUTH_SALT', 'K`k /)h7E%]yS I[;9c>H+p.I6ht*G_O<F,dFsk- u$PA+$({LEyd.S0sIf*J.j]' );
define( 'LOGGED_IN_SALT',   '7%n=[2NK!VgAUX8cbO3dUKs+?f|;jVxD^)^mu]27t}<w<fYk!9y_Erm9As4`V8ek' );
define( 'NONCE_SALT',       'N4=GB[OL$EFJYMFrzvI6@a.r]<STW2S`qB,zs{y9zc?O+8fHoz!/[?D>IVl/`R2^' );

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
