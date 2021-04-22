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
define( 'DB_NAME', 'Trini' );

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
define( 'AUTH_KEY',         '/uLu A?uJqkv^tB4S.f NC}*P*)(i3Bn<9~*l#&QL1qzrpQ1<q%?Kdh>)6kL6Of!' );
define( 'SECURE_AUTH_KEY',  '5iXdp}x5?K>eI9aTb}$b5$PEFp^a28^#[=CbA@/#$tn$$E.8}~i[*;_jetD|[GxY' );
define( 'LOGGED_IN_KEY',    '`kxz` !k YQ7xF!;GOg~%ZW/>&4:6%U6tO.nQRy2<(LJVcRc2tBi&F-:lMdre<M|' );
define( 'NONCE_KEY',        '?w9+8*4J^+LfK {kMc+%%L.*KOehQR)$si?jx53hOlND3kVu4U(zW*- #KRy@$hg' );
define( 'AUTH_SALT',        '[W]+4P*liz{B?1Io^<-<n2WdNc.(E! SWSG[px6@m,)m6OU[u..4zIp#a:72vRi=' );
define( 'SECURE_AUTH_SALT', 'tR]x4&7LTb`tRQ0/0X:BHXJk8ix;B5QHuo&UOJi*Zdksrk]K|7ps#&8.6~MlG87f' );
define( 'LOGGED_IN_SALT',   'u^I|v &+n%qf&0ji 0-$]P:tjD| f3_GzRg3OH,G.1,#iXxsNKelnxleP.5&8Or,' );
define( 'NONCE_SALT',       'ZyXSx]u=k`#*I=mXuy9-Rd_Pa=};zc#F=zU)#q(vgF]feCH$O6Ql47q$^^y-n4FM' );

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
