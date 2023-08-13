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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'magicthings' );

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
define( 'AUTH_KEY',         'S|LiP@.M}MSFdSG-&I^Vulhzbacz^:Lr06@]d#B]+~ta+tO$-{ `*A.%}4ZOKZ}j' );
define( 'SECURE_AUTH_KEY',  'j#g[#avCW$QZkF/hbZT[v%63<:-P>[Usjr$EiD8V}J}8.0I F]L@/j2!M;<.T7?|' );
define( 'LOGGED_IN_KEY',    'z]3&PivG$PjmD*{8i8SLA5<z3W8<2?Qc b+ k]mPUbV]63/_yTft+@US}tM)=est' );
define( 'NONCE_KEY',        '+RGcu<ymGkj>H!Qjd`KWNoMy(,_aq#Wyt*~C;Vl,e}0]jhB#@?q2Yc[/_S^BV*2b' );
define( 'AUTH_SALT',        '39@PLkqB>YfjTdkRmbt;d~8=te6&pp.P;P<siz}P)9Y`V!v7!$OqNq72?XM(XZ6;' );
define( 'SECURE_AUTH_SALT', 'eMfCmZ9Ud9]U5S(Ec+]6%|<xjWup`yI3MLle*?MkYs[T+U[1I1it|>_:&2_*G+3e' );
define( 'LOGGED_IN_SALT',   'I&7JVGg4p)40LX)L:5pLLaO}4h(.1>[;vzl~9WCN 8D`,+x1}l/&?|:!$nP_a:8b' );
define( 'NONCE_SALT',       '{L#iym,Hf-[WiIk4>Z~]mbHIN:P+m$wO${XV@C)-4I8?2O ek5>L+#[22sAw|lcz' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
