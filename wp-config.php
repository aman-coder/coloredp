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
define( 'DB_NAME', 'colored' );

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
define( 'AUTH_KEY',         'vzx-LWR>a1{TEG$:l}BdcY]YbF()H`%(]43ZM8l7{J!}aB=fdT-^2>Yv&k+7nL74' );
define( 'SECURE_AUTH_KEY',  '$Cv>-&U`Byt_A@jHN|tT$k~j7vV<_|3|Ly5gTBbPsu~lQpIP>Q4^_UN.Yo%lk*Av' );
define( 'LOGGED_IN_KEY',    '(nx&|5U~|,Adi<#h8nNns4{&FfJ,dW.FEDITQfFxAhJJ<|W:QFi6nzIc*$4Za)$W' );
define( 'NONCE_KEY',        '3lpCi!&-(m7N28]<XDY3xD=gZR!er@>yT^c37JL*CN0pbob./4+&}e40nxNjHtuJ' );
define( 'AUTH_SALT',        ';4ys3c&sr%+?WK{8SUO_<qVS8,+sN4SRAdh*km]Uo[S$|2pb;0zV0+2S#Wn`[B.I' );
define( 'SECURE_AUTH_SALT', 'yr{JBjqbcv~O,=xFET@*.sq&*8:_&/6IM2)Kip]q!mWK|u`&4PO/&DiUB;J!sJSA' );
define( 'LOGGED_IN_SALT',   'F:rLrN4.Y.$JyK{xC$yXH#Xr1)i.a9H,<x+4f!g}l&,UIoSJ[L=[9 tD~PJ-EI[~' );
define( 'NONCE_SALT',       'kD_HTyqb@2lOm>ye,xH0-*q /x1|&f2x|bb$*)~vQ5Y={97}9Z<7oWfL5S-dNj@#' );

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
