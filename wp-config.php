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
define( 'DB_NAME', 'jashoreTravel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'gUT6=MZ]R#;^ah8e2wBi:hD4Y6{:0;9*D==J.*yiezi:y_b(TSjS:X6yLJ%wKc,5' );
define( 'SECURE_AUTH_KEY',  'M77:S0RV$.:Vi}8(7JnM.| ,6u^=Grg+`%h&oijeU}):3t~`tDmw)nZwY=$o $f$' );
define( 'LOGGED_IN_KEY',    'RE]aGy$!I_S9`_*8D`j8RW^rsB,/-M/|Pf_?T@FG_Ec0465d_Fv:DiP[mRk$B{2p' );
define( 'NONCE_KEY',        '~@:Kg(lPvNU]qWj2n18HYrNdL2CEC]9/!]u:;>0:$@!pVFkimT8[5cf5K7WADqU+' );
define( 'AUTH_SALT',        'u]FiU&PLInz}1@2d-L3uIy=)z>-{zh2ea>|^IRc?Q)N@5uEkDI$`cTBQMQQ@;{P=' );
define( 'SECURE_AUTH_SALT', '#J0-%3L|5~~|EN_N5J`[D8I1Qb)t!X5%<a,uU=[HR^YzB33E8Vw&M{gOpHH!Xn9X' );
define( 'LOGGED_IN_SALT',   's%].{f|>j*$v=~BvX<Cn1+[I!S;7Q?Sa1[f}1= $#XytOZW`WCKk2GoYrxim]:yD' );
define( 'NONCE_SALT',       'n@?uYnf~n %PsqH}z6;d1G%K}bqQD<aLV@$WGE#jc$I;d|QRhZ^)SL/rl4muSYub' );

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
