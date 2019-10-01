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
define( 'DB_NAME', 'floristeria' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'x@$P5-,h=5rL?#Zda{cmy|E#N8~V,+;r}H->$_#P5Lkkx6/ia]4L6Gk)^yW$P +=' );
define( 'SECURE_AUTH_KEY',  '`LISQ5#xuLy[mSEPzl,D$&(C_!=`haDGXAULa/VT5_w1nyk@.h2 ;dp%/&fzC6=I' );
define( 'LOGGED_IN_KEY',    '95c,,)ObOUVacq1MZLGS0+&(K6-!q4ot::yIxc5_4$USH/2]^!>}u#_T[7r*@2dt' );
define( 'NONCE_KEY',        'hVM+(nin9$Gem-MZX:r_:qF*<Q_)?=i9)Wdr8a~7U;mrK*1]d9`qWCQz&c4)`o~O' );
define( 'AUTH_SALT',        'd84H$}[y:}U{6`J_A1dzf;v 6GujO[xsB|~lGm>9,8>=zY@le!y+@F~&n>EaqG4{' );
define( 'SECURE_AUTH_SALT', 'l({{#h<J0o@DPWR{t[+R2r~*7nfyXZ#p$vN]f/d:xNEHQva}:^}vT4/]4V3sT2xq' );
define( 'LOGGED_IN_SALT',   'v^.LeV{0,[jVKGQ=JcD*$c059e>n~tlhrJD1n) kYXH`i1|M&H>o%[rSoNN1L0I-' );
define( 'NONCE_SALT',       'm<l=jE3@Jgk12%$Nwib2yBJM2D{<{&icS!Nm?nX[b-e%)@NL6L:Y>@zq`a5Ij:J6' );

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
