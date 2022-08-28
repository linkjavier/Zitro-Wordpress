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
define( 'DB_NAME', 'new_db' );

/** Database username */
define( 'DB_USER', 'new_user' );

/** Database password */
define( 'DB_PASSWORD', 'zitro123' );

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
define( 'AUTH_KEY',         '*-)8L?NvN^ 6,Is]:^7E0-,dSF@F~!~KG@8 ?mKI5t$E_,P;2-dE<t`tnw8e]2;*' );
define( 'SECURE_AUTH_KEY',  '^iE2k<]IP^H6EhZUM{gI-tJ>WYhu)&o[,O0$Mh_SZ(@n;(<qp?wrP+(Bp8ocg.)#' );
define( 'LOGGED_IN_KEY',    '^wWA<]/*X+{Q=nxK GOV`V6UFz%*-||X$,sr~~+FtR}.LB+#hS9BremQ.^JdO;qS' );
define( 'NONCE_KEY',        ',r%{&dN`TcVSE[<fUE426.KqOT`}TdhD<R,<H`{tu+#I{H;X9!d)/xb3ql6uEB+E' );
define( 'AUTH_SALT',        '%SrZpVam~wQ~FEzG#_HjB&E{m57y>Cj~2ti:g,^]ivk][?*bJH*Cq/lEAr456s93' );
define( 'SECURE_AUTH_SALT', '%[eE_):HoXf0T -1jyuhnt}g8m~[K$z9g*GU=NCEm)+o~ Tp;t6nI2<s{@//]A]X' );
define( 'LOGGED_IN_SALT',   '*4-W(Ui&=(9Bg#~)^$9Tpcv3uvudelV8$+]-AnEojiuM/=|JO4?}qMxON|dk)K$L' );
define( 'NONCE_SALT',       'R-?L-u,cEaODVf&g:K$ T1FTUYU^{;N1kqPY{ikp]Zl7X{!te6.q<s$Xom]tM}m-' );

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
