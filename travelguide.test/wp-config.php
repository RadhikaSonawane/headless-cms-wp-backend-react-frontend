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
define( 'DB_NAME', 'travel_guied' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         ']G^x=&VqW*[pw_++{qaB(7np8Vga*1j/ ZX}Sj8P0`g($SYX2ll5bh|(*]V]J.]{' );
define( 'SECURE_AUTH_KEY',  '6D9cIw`*HH)98:Tu^+|87?psFDfq2A^l$vbHnby<^rymx)gg_s|nH@x/mU~}_Zhl' );
define( 'LOGGED_IN_KEY',    ';UA74FEv6FgXn+Noa9sL9xA*8ZW/zn -IemawFgq{C&)c~6VW6Ne[Oo8egO^ysm=' );
define( 'NONCE_KEY',        'F4POlavmoC4p7<>vXql`@M-sPMt`Pek_|x)lP!F~@F#+$u-CuQevLCNaW$Em)v#*' );
define( 'AUTH_SALT',        'pFuaF$DjJ~i?<~Iu(;MjV9/d)?1j7:ni1u+b^#A6:/b>M=o^I%#-I9]0u.xEU7~&' );
define( 'SECURE_AUTH_SALT', '3_bPbVTCTU-m{.Y:2d0.!I>$?_|`P]MHdxH.W<w@a#UDJ;AP^~x&`?q r%/CyxYq' );
define( 'LOGGED_IN_SALT',   'B]q{^?BVl1.=!a~5S^<@2{Q>U5~&`EB|w7$tw 9:%MjH/B1[7#!!G2$*LIB)O;bw' );
define( 'NONCE_SALT',       'S*y.w4SUX7DN,rKDY~G2:c<Xg%bh}YHAbT`w`C=hEj!CmWJ5YhWBRG:eR}$xyyYI' );

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
