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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

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
define('AUTH_KEY',         'gVKVXR|gm5NG6,6+N<+)}V0V2a@a{Uz+_~,*zH#1)tJ|/@w00Q}>(|lVSdoO;39~');
define('SECURE_AUTH_KEY',  '`vVx&dt6N7MB^W8&l}]CL3F>zU@/[f_r<nM^svgLytMnJR|)%f!,E_oa?Y()kOh?');
define('LOGGED_IN_KEY',    '}~y~u?{@Gmjy;VH!H}t@`ecy[HVswE*RUciLSW%ens(3!ry><?fdLt{aLxP9HBCy');
define('NONCE_KEY',        'cWm?tq`dK(^/_Iskk^K]ANr$=bU.?`<,Sv|wWS-)6RN?*b<sw,l&,J:>b1gf+o-p');
define('AUTH_SALT',        '+q-D3-<I12<q?lkXY1y=2?`9zA}zZi*n$Q#.)I$ WQTI[RnqMhin;0YjdQpc-|6w');
define('SECURE_AUTH_SALT', '-1!-yye~Lr%G0OO~UeybVx?1-wtwTE-PZnWH 3<?v98$}mpU/qL<sLs4{J=REP?s');
define('LOGGED_IN_SALT',   'S9U0IsaBoKZ0({]hEZw}TRgX?Z;7GWg/X|$r{+V-!}CUS^z$tE=CI.Nv|dTXX;b}');
define('NONCE_SALT',       'jSmPb9_K}<)$hL]j=;/`Lpj>emNKMO;K!(]:G`h{v||-HLJ(kH|CIWY>RW,bUO-H');

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


// on ajoute des constantes pour configurer notre install custom :

// Je définis l'URL vers la page d'accueil de mon site
define(
    'WP_HOME',
    rtrim ( 'put_your_home_url_here', '/' )
);

// Je définis l'URL vers le dossier source de WordPress
define(
    'WP_SITEURL',
    WP_HOME . '/wp'
);

// Je définis l'URL vers le dossier wp-content
define(
    'WP_CONTENT_URL',
    WP_HOME . '/wp-content'
);

// Je définis le path (chemin côté serveur) vers le dossier wp-content
define(
    'WP_CONTENT_DIR',
    __DIR__ . '/wp-content'
);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
