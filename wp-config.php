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
define( 'DB_NAME', 'Digital_Education_wp' );

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
define( 'AUTH_KEY',         'oJefM1olA{<Qq$1vgM&/_XG1E5w.cq|+{$8c*s:sYM_<Jg<4Wk9/~D]eMrU/vvb?' );
define( 'SECURE_AUTH_KEY',  'h)a5.~e]](LoFf${S}`r^7BRUT}I^Ho-HI@/HoFR_Q91ID`^Ih6AZifO^)h=a>KW' );
define( 'LOGGED_IN_KEY',    'q]L_om}!^#6yfA szU=26C(V]~:v36tqbfvGHcHoc_<|wBxmUQ-_K}}@dFA6zTYu' );
define( 'NONCE_KEY',        ',8wa;^X$ep=YMV`5G~-Z$L:.gZNaiYmO0Q_;{[$Y>D*vpCEo`p>p8<@(%izV93bJ' );
define( 'AUTH_SALT',        'Fk$*)3}u!hw0rH1Luf1Q 3}k&o3 :*Si/7l,Yi}upIDnf#9(U6V3%lbeLx6@AtlU' );
define( 'SECURE_AUTH_SALT', '5lhQwc/y`(PYhEmF167 Oq_z>Vv+rY@CaP[2T` xI4{JS`J@=Gy4kpXxj8HY0.WR' );
define( 'LOGGED_IN_SALT',   'zEBQrCB4P%N-8.u%W!7YFx|bhz|s3GP yY/Kfnba0_Cy0,#Z#0v7GZ1Q&5HTBt0!' );
define( 'NONCE_SALT',       '|@<hMw=zBhfgzS@-lD/xHO(33XH2J|7U(4(OSb<esD@&u2ivFO8Z3#{s[,6X/r0!' );

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
