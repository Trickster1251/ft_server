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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'toor' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '15v-jwLPQ],[}G|[xKIBpM^+R~Yc7{Sg.f0uzAs6pRg.I#XwD-mjP28@wLTGNt|c');
define('SECURE_AUTH_KEY',  '|E;ggzvrS8.  eZJL^},f08D}l)&lthd}Ai|/6aD1 [_KkuJ:S$VaML~_L&$/;OW');
define('LOGGED_IN_KEY',    '1{tk_=LwzsEl]Q/4:l$cgI?i)BJxY*2jM0^]-S, 9|<| qa/M//r~qm%h<#=$*oK');
define('NONCE_KEY',        'o&Px=-}ms8bEPSS;^6Xm$<6^r:;)@W,<s/h/PqMhlz8C&~3$lz=pp,[/pf5lKv&_');
define('AUTH_SALT',        'nU@R|lekpsWrtb`mp;+7G(fZ9n7^R!d|d6WtOl:2Nq>oGw)Oe+>[rQHPLNM/EN|@');
define('SECURE_AUTH_SALT', 'y)36VtN6.g|pmrdc^)=N_h+DJ/,,TM{Pc{]pu>9L%b~:zW33c|`C.fuHE0B|T[)@');
define('LOGGED_IN_SALT',   'Psm1aZQmg$.}3FKpA`KA<|6;.>0gVbT(D.fd@U4sIyC)/1JMZ[{/{|b}joGs06&n');
define('NONCE_SALT',       'n= } oV3FD]HGz9jw,+]|]R@C^?@qMv*IC[bd9BZ!I+}YWDa}yJ?1kX,.Hlr@f+U');	

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
