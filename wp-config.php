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
define( 'DB_NAME', 'bd_salama' );

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
define( 'AUTH_KEY',         'H&W{]@.zM_PE8,h[(sigWAh_rR?.1=Lp*kIk@k?%H6bb{+K6J9F39Cr<#3XZW/H ' );
define( 'SECURE_AUTH_KEY',  'LH1K7!ovxYk0WzSg{__GCItUR@gs#*6FAQxq=qCYDhj-BM@!MCYrmKU@Oe&uas_1' );
define( 'LOGGED_IN_KEY',    '|}v!k7(MX Lo1--zJsV.+X&uZEa>8`@wH `BUN3D9}TE8ez|QUtG!D{W^|EVrl|0' );
define( 'NONCE_KEY',        'rIYE3SC I%Wr[ G{R)?F%,(BJDF%k<8a3Y6nBBDJ(IqLvPrqS9r/0#X?BnME&U:u' );
define( 'AUTH_SALT',        '&%S#S4sQ1xCR/[r*>Ip[!~ZYl?a:Cv2o@TNF:gNP/MlgI7Mh+y,g>g+kw|ss)5!v' );
define( 'SECURE_AUTH_SALT', '5}Y_#~ x96F1AMpIDTg6Q.t7NOQNoPj8ri5bX4uYLp)[rIk`S3ne=?p1QT`+(Fk_' );
define( 'LOGGED_IN_SALT',   'Hu;QcSvof4.7$yXY1>)c&VJvx; hOOH7 w`3(8+]P~k6b998ObhC6}FBZiGhKX+D' );
define( 'NONCE_SALT',       'QLAY8#HeFTB5M3a7O`(I|:Yj>O;0T#tCw&ri=tV59u6,9NRTUnMJE:m|&<{xx`Wx' );

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
