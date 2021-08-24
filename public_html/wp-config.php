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
define( 'DB_NAME', 'site' );

/** MySQL database username */
define( 'DB_USER', 'site' );

/** MySQL database password */
define( 'DB_PASSWORD', 'site' );

/** MySQL hostname */
if ( ! defined( 'DB_HOST' ) ) {
    define( 'DB_HOST', 'mariadb' );
}

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
define( 'AUTH_KEY', 'GT}`x8fowyrl%dU5|i0ds~sB`|lZrY-[YRu ni909)4c-U`32(:Nypm<q}<*/nlU' );
define( 'SECURE_AUTH_KEY', '(Ps@8P{~:SlQ?zlF+}VQ!k`EIlkGeHm}v{|Xr#=Fvg&}O2@ L=)*o:gbw1Y[#-z&' );
define( 'LOGGED_IN_KEY', 'ibYVvqlzuI.mB-2e@1=N-9AUb#F]r6@_[{1!%kZeU+&cK?FTX ihu$=Pctuw&{tC' );
define( 'NONCE_KEY', '9*Q ojEM+ROE#bNT]7>4W^Eo6Ly|h+bmXP]Lkt8*ZeH5O41E0-. W[C#<r<Q3;KJ' );
define( 'AUTH_SALT', '|5,S3PR_[*em*h07FjsnHQ$:XT5QZ8!wbUBzh-&tNUp[Z1;/42Dz|:(P>f9AFsI@' );
define( 'SECURE_AUTH_SALT', '}}Z<c_BThvr-y[o@8>,Q0?DWh46]k#qF]D}ko)YUz;5Ti_er2c_zoe}(8}E|]u2%' );
define( 'LOGGED_IN_SALT', '@P|}&TyU={Vc)DyK;w+ZN+1`eQvJOWDQ;|7;<Q#9eGP%|{M)y1zBZ2fGm`WwZ{E!' );
define( 'NONCE_SALT', '4!PK,<-rEC_[JM,2b9W=rps}33;&cHd~pS?YxV@A? +hH@)#)c(UI-s~v*o-O;lo' );

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
//define('WP_DEBUG', false);

define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

define( 'FS_METHOD', 'direct' );
define( 'DISALLOW_FILE_EDIT', true );
define( 'ACF_ADMIN_MENU', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
