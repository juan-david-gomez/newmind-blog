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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '7905c8cb7cece7a5a6a64e17d581c50c2b9ce54ef1a0e6e3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '19yQ91ypUKw__(|=6_lKviSlfjf_N~7?jkOSiOr:lmf!]7L7L#?<!lVzeg09VQ>)');
define('SECURE_AUTH_KEY',  '(=N>ewgk(=TE^<$5mb$a6g|y7+[5l0va]]nvA+M&+@dN8,;J~ZQ*L-E>~/+LJ`5e');
define('LOGGED_IN_KEY',    '40l00yfPE;2]*d90$kekI0V#(Yd(bD6OV<FaR0Dh0,Kt9=VgW+(RAyL/LHjI[`!2');
define('NONCE_KEY',        'zoXd*^-w:z/{Y&)c1`{LBGErP7VRUH/_ ;XiG?V/]g,jD@{?t/~!Y=q,)V Fg*Zg');
define('AUTH_SALT',        'ES(.0`87By1_G`k(GiVWpq2G#2ZfLOz;8$iU6cTU?mY&`Zf8L!a//JQzb<d[(T|z');
define('SECURE_AUTH_SALT', 'b!itl~+, DL:Ckcvi7)giy{D}X ;F_U? V+GNna@7DDZ[34X;x{:jSXLrA2)iA[-');
define('LOGGED_IN_SALT',   'I]ivfvLJ}{e4.6@8^rTQ>8]e5t[Df@K01|lO`@]G<jFb;#O+Lo]1t1x(IscwV#cF');
define('NONCE_SALT',       ']DdE<rALRe/2.Q+$l8&_Reo=-:ahDdm@Sio/<MpIh2wl2?Y&aeV6$-Fo?%U@nb,c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
