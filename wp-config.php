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
define( 'DB_NAME', 'mhdflix_db' );

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
define( 'AUTH_KEY',         ',`D(c t?_q~,93+)>FU~Y0|$4(INF-%^(8^}#J#vf?WE`P{`ZXpB~PSICd>ZFAmt' );
define( 'SECURE_AUTH_KEY',  ',MKaznj19 OR$7(LLmR0`+SK%IS+q!O@Sp|:c>f2x9#U1j=[W%c>UJ|A;=jw~C;g' );
define( 'LOGGED_IN_KEY',    '<&odN>TBl[,HykX7jeMv/2E]XM<j5/<3OEeig6t#)PGe_4> n}g<T%ep4AHXm]Rg' );
define( 'NONCE_KEY',        'A>B5^Ypv[gj_Zv{)p(*a9>Uk`h@|t.KFPqDeYhPx~|Up%q6M_sh)2n4@,_HQu=A[' );
define( 'AUTH_SALT',        'y^&YH;;]vOD.(/S.J76lE.@m[9C6K@gl6&PCk>xV_yJ*<#@&&0lb=a-!_e3#nV_y' );
define( 'SECURE_AUTH_SALT', 'U7E}3E;nyr- Ae[G=n %zM:{-|-8k4z`_1#giMVTPgE3jDdT7>F4Do3PgkHGT)oV' );
define( 'LOGGED_IN_SALT',   'Ot@J@}Tlk>,8`oJ>{i1(L^{l0eUC1k)xt=R/P/~v6qENJ/#w^yTG/VP1CAU-gqGz' );
define( 'NONCE_SALT',       '+)~wdMkn1Jee&drxg~,s$Nao:6q]r>5ffZDn)6j1 Jy?gph PS2HmMNDFWz~TYf|' );

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
