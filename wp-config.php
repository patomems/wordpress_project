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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** what i added*/
define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", "admin");
define("FTP_PASS", "1234");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jbO/8_=%z)Ytuf~Pg4}B#4{^0{r^#o>Jh.C1b>E(s3H<Oo##1c[o .$8knQ(GnBp');
define('SECURE_AUTH_KEY',  'A`$<Mj* C/`vtC +dat04;-Z2/YoNY2g.a~6[1tL8Ki[9dZ9?YHI7Li b)I</<C1');
define('LOGGED_IN_KEY',    'LH&:L;8+4$(nM,D$DDa7:U6zLZ^ga+G.>co=ZV!t9a}H5|6Z/:0Di-bf%QW6u9*{');
define('NONCE_KEY',        'tQt:?VA9qZg0Ihj(LI3*PbfNfHcO+83Dt8?YbR*Xo-qwY0HHd=u9vZ4J8[)c:/(8');
define('AUTH_SALT',        'O?vz+eO(OMyj<5|/GK$(g64BaN}A[>z=AEK}zq^_O/%b 8|<Y$BzjY[!F%%(@(~y');
define('SECURE_AUTH_SALT', ']`/mbbV`oI#RRF$7]e=}*n4Tf6[U06q]hbRxXT1BJX4%V,7cu9uZ3.%AZB{_uov2');
define('LOGGED_IN_SALT',   '<s>z`}JkzZDg6kQ*8+Le P*$>c,xuD $#,#wIKiw_l7:5 HI2*d#Lg2N}f#{bi*S');
define('NONCE_SALT',       'C_pfE^5{t1Y-3s0 3.wPh^L/_b I;MLoQ+T&.D-#tnq>7%/C{CN_E%ymz[mF~K,F');

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

