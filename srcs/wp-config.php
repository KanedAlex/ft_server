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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mdp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '2b2Atv<6h@=l4<a#F{wtohc^lPAKmAu-Rx)rA%QV|jM+*VeUR|zt[|T|fQl&GEt6');
define('SECURE_AUTH_KEY',  'AGr)y[E}M9nEwU=D-+=qovrK}VIB1x0#a=~thc-#wGwzsPuZ6@y]j&<0!qHe).{s');
define('LOGGED_IN_KEY',    'q>2MIHwf3L19NyC~K y0o!:ve8-C-HF@!Z/-x3r+6rIh2@0</lQ|-xUgZ;-Lxx16');
define('NONCE_KEY',        ',vGQ8l^c7K%[rSNxQ4R+g*zTmt5IkQn$s?^R(g.bV?W|9hSG6:Eb|33N:M@1:k<4');
define('AUTH_SALT',        'qk^p{c5[z*>vw?v0lGu9>Ghkqvv[OGh^8D> WN%KR NM.MJmj8VlF7v+/Sby:;9}');
define('SECURE_AUTH_SALT', 'C:ekpD0vd1[I=$I&S7cpDw&;<t<:(.zdn|NH:/{40qBOW>EOZ+vr~&zcqTZHpanz');
define('LOGGED_IN_SALT',   '}CIxO<^OzeU<wIo|~(R &DVY4-ac[-( G-Nc)LhsvCWhb#Dy%zPm(]lnm`-Q^<VA');
define('NONCE_SALT',       'e@qbG9d3`;rx3e.]V@7+oZ41`a=^o1cIUYF$[^j4Xkxpkv,r@_gVllz?B_U.V 3T');

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
