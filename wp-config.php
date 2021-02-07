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

define( 'FS_METHOD', 'direct' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Test@123' );

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
define( 'AUTH_KEY',         '()UeUJ(upGO- o/Ed}lnUsU8C@(4F@W}vaoSd^G*+UEY H&GsnYCKGkV_vTkHhF{' );
define( 'SECURE_AUTH_KEY',  'n5`Q~hT[rO9HgsC|H0&}5?3VYp7a,..!)hXfZ66mDYD$q/rMzr*yc:;hT=)2FZu;' );
define( 'LOGGED_IN_KEY',    '4MSB7xHd*C{~O8wD }ryUvMyHc2cf*VMH:tf]:/_H`>6m+|[kI}CZ;b>o=x[q!hD' );
define( 'NONCE_KEY',        'XWLeQx1jL9ux]K-zl8Yt4GBF1Bz80ql>nlE]`lb,h~1B/#~=UzbM4Us7xd0`pGw2' );
define( 'AUTH_SALT',        'c<H8moS]5{7s.wSH4&Z7MS:*f@>0z(W6E}[ B xHZy:]9Vj|>Mit:PF2 8{&29up' );
define( 'SECURE_AUTH_SALT', 'sV$dex(W$W40gT4:~?(}ngQ(5:/~,a(EMzqkZcLIktO/Ai._Xd,(SvA`Rka5I*Bs' );
define( 'LOGGED_IN_SALT',   '0z7#=YsHv:)<5poo][OT]-OB:I@<aK3]!kQ7dHE0hdi]aL?pn0*lkD7B!ov.YN$E' );
define( 'NONCE_SALT',       'F;I9a2q0q_s:NAAQ<*YfBk7(HwWo*#m&lhc&(DGU6 w9h;gu/@ eHPoApBvX;,&$' );

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
