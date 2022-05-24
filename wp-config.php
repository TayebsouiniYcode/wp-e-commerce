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
define( 'DB_NAME', 'wp_e_commerce_II' );

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
define( 'AUTH_KEY',         '}~WP~Oil$_ID8HT)H3@!LU,anZf|$9y[]HYem7=p5.ww|22*6 eBj:X`b<w(N@|C' );
define( 'SECURE_AUTH_KEY',  'xw`QC~]W=@HV~?C]+#!$g^fjJDzzDR$lOv,J?,bU3K%&xzCVXq@<{Clhh!Vg(Nk2' );
define( 'LOGGED_IN_KEY',    ',VoeF<mlySbW&?[~xyeo@mhNbr7^e,P>Jo(hYWJ3RFC}agdoJ^s8r*DgAa)wam(G' );
define( 'NONCE_KEY',        'Y2M5~kr^~HW9@wPP+(1 |1#qe]9h-Zf&)mY9]R(Q]0B2#,06i7|]f~vg}cmOE%I`' );
define( 'AUTH_SALT',        '1?(PonQJWb~+%OOhOTbV-f~&&)yjwsKsGvcYM3[%89/C_Gv^Mh7|7fpS.WZ?,!Wb' );
define( 'SECURE_AUTH_SALT', 'K^^(L>6JGxu%i1Bqtc:01=J]vv&,w3i-g:+-R?5.,N}m+p?MlAntufT!@*xDf/;v' );
define( 'LOGGED_IN_SALT',   'p/slB.u+n4~uI#}<nrn0VjhKKv7Xi6LjlQc5FU>_M/*3NJnH7&~(edZ~^;/@Wr5=' );
define( 'NONCE_SALT',       'X/9<gAPM=vhKv]Fx9{;J0Gg 5=`^pe[S`{t[&*5H&2U;/IUBxLfCwxSx#3_V%Wbd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_e_commerce_II';

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
