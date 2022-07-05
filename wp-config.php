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
define( 'DB_NAME', 'connectech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U9=9bH}J4jr4f9N2&}sF;3.DZZvu>mVt#UklnY;l{tVc&6PN!JBJd<Q|=;xca8/y' );
define( 'SECURE_AUTH_KEY',  'Llv Y*-5@HTK|1;w-O@Lr2G^cij({&MLg/sf+OOgGAb0$LM&EQgi/5_[Gd{6rY$h' );
define( 'LOGGED_IN_KEY',    'l3p7}~SrZ;CAlEz!xY&yI#UMg2*^`R%}D{[tmIULw&iH7ntAE}7PK7B7`YB`+b<e' );
define( 'NONCE_KEY',        '+q{a@R,<d0C@(%M3EXR9Ujm<xKReUOR-5!oDm;Fa-ARuXUx& 9)nj#NaHKkId/vT' );
define( 'AUTH_SALT',        '$4wa|[%|}6.i`/j/PGLsR+DhE$j`.1D+50vv:{0F~hsbw,{HP;P&5xx)`&.af_1K' );
define( 'SECURE_AUTH_SALT', ',jl$(2|s3z?U>v:cmBJ^a.9-Mb4*hOg,wPcO{k7IMph2=iNAm3eLQB:isW^cUwPk' );
define( 'LOGGED_IN_SALT',   'n~<Z/~w=32wD5@uzbmHV082X?TQA702% R[LBconD8DO}OXec6S>=bzKq(Li3zLW' );
define( 'NONCE_SALT',       ';7u|C-kqfL?%uio89~am<D|mvm:?4$?G0J@cQuO`|kpt!3Aq59|8iK(Vg3hwC&x1' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
