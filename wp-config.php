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
define( 'DB_NAME', 'vets' );

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
define( 'AUTH_KEY',         '(% h^}Dm1`9365!~hk0~_^}>8)=LA- -7ugR>Pe|e6  N`%k*5,4*{UC$eK(mr;g' );
define( 'SECURE_AUTH_KEY',  'QRCIxDAp|8JeTMjLgjuj()5Kei =qs&&]AwC Ei[~tn!8u8*^RPo@3 38}lWsAeG' );
define( 'LOGGED_IN_KEY',    '^Bn#_/jGn25Ti`O3zAlq_m)Qnd2P-0doc58k65nX4UXY:MAHHe.&Quc*pS~CE;X5' );
define( 'NONCE_KEY',        'xG67:|HK2L11GpmQi^c5Rd(P>>%Z71tUGu@98cA+rJnM_pcXfW0$psZ5`y3IBAf.' );
define( 'AUTH_SALT',        'kD3Kue%G|K<&+l>Na*VKwpY=l& Qb]a`n++,iYcYP@Pi+&+y+Z[n=^8uT@L-/6%E' );
define( 'SECURE_AUTH_SALT', 'z%jc-*GW-2t%=Tltv7aeYdY$9+5v>R;R~c|kC>`NLKz!]=%w@Yl6VP8q$sN}@5%d' );
define( 'LOGGED_IN_SALT',   '8y]dXAN|JJWx6x7JMak-Q<875!Hsu&*nCv^OXk[/ZBLg#=~q_wE4P]cpR)JY+=d:' );
define( 'NONCE_SALT',       'J246K*Qze5t%-T[GJ:|ib=g?dI~)ED{oc`6BFx}JA1]$vjK](]TMQNW*dQ~fp:X%' );

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

/** FTP permissions? */
define('FS_METHOD', 'direct');
