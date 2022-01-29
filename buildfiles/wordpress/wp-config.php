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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_infinitum' );

/** Database username */
define( 'DB_USER', 'ben.rey' );

/** Database password */
define( 'DB_PASSWORD', 's4E0$rgFdHUCNe)3tycK!6V6' );

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
define( 'AUTH_KEY',         'p~mmfH:. -p`]EI9Psjp>M/=1jT^bIL=V{XjW`/;G&DMs&ZDQBb8luS=|#V{S ~@' );
define( 'SECURE_AUTH_KEY',  '$&Utw xola}fE_u6=DBgUk8*b5%_uo6PMH02*1.KY`o[.tpZIYP_zQZec%5j6#]|' );
define( 'LOGGED_IN_KEY',    'O[I^S~EP1#@@$Idd2L.,qM2D[VqBp]lI_qI;ao)?Lr_CYsZw-:^=`Gx`_tyK$>ie' );
define( 'NONCE_KEY',        '%U&}]d&u6}Qdn=?WXvs[:m`vIPMVY))QA^Whv`!| n;grzj9+p%{#6)jXN@.@K?I' );
define( 'AUTH_SALT',        'R=PMyaRMn%+g5_bZc+ou(hnIi*b(QHBO$p>5tfW{BVt(Q85m+!Y~Wyi3jS>:ZGf#' );
define( 'SECURE_AUTH_SALT', 'lG !NS%@n+U{4D77ly{td)1:x_e;BDS*(x&&{};$nT2&0B,[77G2&`Z3Sv$g_?BM' );
define( 'LOGGED_IN_SALT',   '@?M^zcjWKpzZ63y<#<!G0Yj~5_?h#UmO9ny2mw$@$Qp=|F&8P-V0AWp&}=g[YvH=' );
define( 'NONCE_SALT',       'q*+OStt.|WkJU17%s.X7`b-eB*/PbcFP^W&#>pkfI1|@6PO7R!@eyLxXDZ4?Pd%*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
