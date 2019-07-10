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
define( 'DB_NAME', 'arya-garage-ag' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'NDWoQ70[vVflK,dgTe<c8ug~#n))yqbK6${l~PpMMai$CE;|WCRag^c%m9_P?JZ4' );
define( 'SECURE_AUTH_KEY',  '&HO=}.^RJMxG s@(q|JK}O.Ixp!LWW89_71&Sy>xoKN1/G]0Im<KgU_v?wZ<WQ>p' );
define( 'LOGGED_IN_KEY',    '=GIFQ.%/u@)JyJMt%+y>=_LYR{%^adl|~^K^cA0uqM7Z#R,j1gBtxL:)@kix;Y6J' );
define( 'NONCE_KEY',        'T)rL%p+:z.`5Zcy~>Atb<aIbZwDSw.Itz4)G7bk(ZuI` .{R=;y2EbRO)(P5*Rc!' );
define( 'AUTH_SALT',        'tCJv9};XmR9;S`3:{:k?+=g@rXE=2_Ba(8`8U3]v~+2#mg/=~p nzRZ2j($w]^@f' );
define( 'SECURE_AUTH_SALT', 'X^MK<1[[o&*JR*y*/m$198^tb5)hr)OTQ)eRMLXaVB0^obec7}8Ug-98VV<J!=8f' );
define( 'LOGGED_IN_SALT',   '|dI=^:$Ba7fA]DL%bN=>KE^^kPJE1q5$Q)cykSo~RM5j|S##Y/VM8T%*el}D7,6d' );
define( 'NONCE_SALT',       'm~*Yjbv9x-%|0::oq;brpRF%2VLg8M ;Hbrhg^t`OQD6~4gM?OLVK<P Bx[N}Ogo' );

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
