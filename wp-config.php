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
define( 'DB_NAME', 'personal' );

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
define( 'AUTH_KEY',         '5IAV`H4idFHJkrgJ&)jRYuY$ie{,d^*C*0jH+@h/.#zTF(5j/5[.q:etA7`4&:7-' );
define( 'SECURE_AUTH_KEY',  '|>rfZpO6c!hsuqI]Ns|>nCS1|!_]rIShzAX*&7E&v{t:A)bLkt0Bx>6]1`W2-eM?' );
define( 'LOGGED_IN_KEY',    'c-8XkzTNwhps2g49k+~ FmK$U:kTs5<2C+?cJ#uxgR2ll~,cW7k*2zyd6,fY~RoA' );
define( 'NONCE_KEY',        'RAhUc7n|}} 0?~T}O5.[AP1i0hY}bbu{1<.0+LegrxPSr>%khQ+TE|Yao@rH&q_{' );
define( 'AUTH_SALT',        'Sc?%qKl;6.F[!r>.Q_^vN`J)E^ 4|D.o9?Ma)6/i++hC0ub;%{^yH[Md/>3P!=-J' );
define( 'SECURE_AUTH_SALT', '<?W<UvSoVHHUp%Qb,ne^[ZZ=Uq{RSgEX+em.<sGz^W<WRyIpWUWJ2t!D@>j*jM2D' );
define( 'LOGGED_IN_SALT',   'BHcv  6{*Y$XgD5;`7]{?>sfnSxOD]za4k09J[$lbuBb-gs7U=?sKpOEU#5ULfD(' );
define( 'NONCE_SALT',       'RO!K<&_}~~S$KhY?($P<K2ZtE]s[XO+0s.z&/$0$0A0yfRv$+e-@$Q@8n+ )(VoC' );

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
