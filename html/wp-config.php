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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'md2ApMgG' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Q_fNE;v>6l,+0R]k 3w^hvXVsvAfX389RyH--7Y)?2t$IEy>jE Jt[AE}g~i.ed*' );
define( 'SECURE_AUTH_KEY',   ' 76gl@4Pv[:AwQ0fMr.Sn[UqulbuW15Q0;Gc,SjyZ(pP0hG7kno%R^QS<2mQO~in' );
define( 'LOGGED_IN_KEY',     '(l_fIS*@e@ibf<y/YOK):QiJIm!)ht/ZQWxWls R2|x&_?9peD/F*AT:Jyc9hiaz' );
define( 'NONCE_KEY',         ' GB|Ebd3)+M,w36ap!^|l(avC}/6UoMa9dMH;,RF0. V><?PJyM[h@6? uL{jM|Q' );
define( 'AUTH_SALT',         '@Xj@r:VD}.&alMTP|+Q32+!_1DRk~DmQ&]]P3!dBG);CfBUDvKl_#{_d`=Y9Mk#d' );
define( 'SECURE_AUTH_SALT',  'ns Yi,Kbk|c!E{5fa7]Pm_c=zt7*M=Xo5yN@$w.rvnbX5eSLx)O(S59zHMV%y|eL' );
define( 'LOGGED_IN_SALT',    'lpD~)`CLV*c>RZ/enc9te^r).Lw4%W]?&8)qmRv*QOl67VT[wT@K$M[UL<;RC)sE' );
define( 'NONCE_SALT',        '8|=c},|{B+^D7u/7k$D8raFCd{iGA?uz[-o9I@ 90jp-T>a:XHMjvHNK]CBwUxp0' );
define( 'WP_CACHE_KEY_SALT', 'K9oE0nDqBGi9K<$}q,aF+0`vLFs_F$+h1N6DHHy`z(Qe;(rt`IN P0aJ8_hTn)0x' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
