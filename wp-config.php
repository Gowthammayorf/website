<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'examic' );

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
define( 'AUTH_KEY',         '*%qoE#J}.Psg4<]^}K6IZyjRJjJh^i)3a$#k YV1MFbzTNrO@) (9j(yX;{X?g(W' );
define( 'SECURE_AUTH_KEY',  '>e@,?DXJA`hL%4+?9y]5=k|;?),UIz=*`$5^jg!pf%hM20)T7OHE68j4;W10Oj$x' );
define( 'LOGGED_IN_KEY',    'qC+1{>^:(}-)`(lezcVC!F Mj@~9@5{7N&5($wI)[>YPL1wO2sLI0K+1RNl0lMm6' );
define( 'NONCE_KEY',        'Ps/Z0S.~O~64]D_-rsa^Xt<J6v:C/VC7s20}]q9T~D$@Xh#*IQu*B<w_l9Qa{|Nf' );
define( 'AUTH_SALT',        ']A1:wHC!<s%apl}{*M!%R!7RY( A%Uv0tr0LzipIR(Jx$9II0*N(D1,&%Q>Pse8D' );
define( 'SECURE_AUTH_SALT', '3[BG5TaGx#y(>>rka&pB[[C.*uK?8:!8)VC58xhpnmc/WP1.%6xCaCn$sZ)/G:/e' );
define( 'LOGGED_IN_SALT',   'u&$f@*DIN4R<<=GK#NqA#tTE_pYfL}_*|JHz%VeX_;dIg)KF*nwwt|G=uB8gx<{6' );
define( 'NONCE_SALT',       '8}&wpC^oGr,*s=|[.PC2;#5 D&~.>E?e%3i~pso3#^f/!qR{8Je*%naBtR#h[mel' );

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
