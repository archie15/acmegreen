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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'acmegreen' );

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
define( 'AUTH_KEY',         '$gHNZT:{Fuz^mPJ$[GZ=Ag&?_XXM%<!+0oVU@%Hgt_w}q^=mUicI?qo$2;6?(uKk' );
define( 'SECURE_AUTH_KEY',  '|yX`Yw6Vi,Lys*RI>=4M?WSN?%y(QOC]|u:G}:~W;kmf|,~VhaYQc3%1a=;XEl:c' );
define( 'LOGGED_IN_KEY',    '>Vtit{YZ|u;}/6cG;$l,>B${qS)YnP(*>KTb_l@CEX(/dq3Bttnx1GoTujP](S|x' );
define( 'NONCE_KEY',        ';|G4?jaeO?*cqq}kvb=0dh!.5n(Sa<nr_%hd30HtPYFOAcyByTY|zU&?KwO[K)Su' );
define( 'AUTH_SALT',        'cPPt`ZHcqT(yenV(PF%8e`CQ4^}1VFk(-fmJKN#q]3_h~>m@Wj{oY$w,`P(cA8]_' );
define( 'SECURE_AUTH_SALT', 's5FMqtOA.v18*w]#*0+W8L-!isR{w=0lBVbyBQ;~`m_zBW^oGVRvj/v$ZQiYHV7k' );
define( 'LOGGED_IN_SALT',   '=~(+/uPl|JaQwpf0r%HCB9-_Di;<@T^I*S756-`!@{;@tcmZ ^h0(Ts(.NXsyl>m' );
define( 'NONCE_SALT',       '>9-jrM;j*Tc=Kc{zcGbnrhq2sEUaUk^6Imz=kc*tPv!Ijlu/ZS?CH`W=PkFjST.y' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
