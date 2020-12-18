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
define( 'DB_NAME', 'trakkmasters_db' );

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
define( 'AUTH_KEY',         ' zwg!WYY24@Bs5k@71_6xdfUB4jKvQhM-!GCZLT(knfr7%ussZgtx^|x7q&!K8%K' );
define( 'SECURE_AUTH_KEY',  'cP]?E([Zr=Q[(EoCU=uk~H4 MfHClZw_nHw|nF&Ac.r*- nh1J<M7&&_P]7Upx`C' );
define( 'LOGGED_IN_KEY',    ':{$yUAJ;@ blB.pg} i-MPYsusg<APwLVTSqX{@uW7k3W4R3Vz%Z+%(&;_,p!oet' );
define( 'NONCE_KEY',        '=C,VdD,Y9kt[Gz;E/7byCprWtO*,5oEk32N[Oa|fe^UjaQH@AYK(I8a~zU_*`0`*' );
define( 'AUTH_SALT',        'Kct+D9xbs:];_P^+UO{|/:^VL;KwErUezp9`mPf9zv8W<qp^&_)!s(,0a6UWHS@R' );
define( 'SECURE_AUTH_SALT', '`.Bj? l#f(%kS.`Z7v<tk azu[F;mB|{nTalATk_M#YT(fsvapOYWm8l&H}+aWCx' );
define( 'LOGGED_IN_SALT',   '/)(;[HstUkN=YyqZITs)K,Zdt~XuYUq/bL9.|*!;`(>h3i)PkX)aZv.vctF<~~C=' );
define( 'NONCE_SALT',       'n^z#>]]8$<D;49Ql][8.(KcB4P ?j,,-f.ppqJfPTlq4;i5jNa^`xPT=vBFTWxy9' );

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
