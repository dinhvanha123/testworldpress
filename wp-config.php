<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nuockhoaqua' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '93Tf9h3LuXB%{nJM5d}KJ}^7V__ 4i{jz8EGP|}P]z:?Zby=ppB!xB)9=3eEudPN' );
define( 'SECURE_AUTH_KEY',  'uR3mQ(1WQQVIAzKx1*ww39PmM3(tO7U4Vvyv+gW]tWtrP%PM3@VKy#G{8O|J4FvU' );
define( 'LOGGED_IN_KEY',    '@ps Vrj,*zCZXvgV:8trbz_9AHd@~n{PXq#-TWzgiYi<3BaP<eMCK]$<O%BGHcj ' );
define( 'NONCE_KEY',        '*wAwVWx;hCG3Ejw%g%xt+5Z,za.zue3k-:5!Vi*0_KHuJ|Z4]wQRMW(1^f~l.Tku' );
define( 'AUTH_SALT',        'g{yx6:?8j2 J%86 OZAVr+:XV+L}FsY[T6S5.0*t,k*Z/K}Q29fS;?z!Lc6OVhh^' );
define( 'SECURE_AUTH_SALT', 'fCg7KQyKjs-l7;hgsC*JN$wd3MLPsQ=Tp6_HO9seHyWi1!N5zWgN#^sxg4CM7|9{' );
define( 'LOGGED_IN_SALT',   'x6jIjg5yaRG5zf~C<JVZ6-WTUhn*d5<djRj,ec+B(DL]B+S/Ao! ^[d9@JA,I{kt' );
define( 'NONCE_SALT',       'OKe|.1)KNqRhkduF#G%Aj@RZue2g]Z/OfBkp:0O[~e<AA)%cd63^f3tm(A10=%ut' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
