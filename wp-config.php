<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'CHCM-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@sc}Qiu:-1^am=RUXHC@`DLLr#`G.z8CGtYg=vbi},[Up_G|e|+$.NM1@|uV1l~%');
define('SECURE_AUTH_KEY',  'T-uBt<^G4CC]jJ-EZ~A]%SUUj=k9Q6ANSXvKN:~QG~VAiy?x$-ir]tr/y-~QrZYt');
define('LOGGED_IN_KEY',    '8jf[VqV|QrOS>@[%*,.nBGzK`L%nWItuiGaFr$R+d|c|I`*wa92G)LMSR[oU+vBj');
define('NONCE_KEY',        '%Hw[S_S7EhyZI%siZdrV:o>Y&QRV/l1sp8S>|Rf$I|w/d=:cWf^G3#|Y+b8;,)=a');
define('AUTH_SALT',        'IuKzlI.AkM2w;u+R&+/=6n}i_(.C2!?+I#]|c)Ws8kTPw|(|CPa DxX<3MEshsJ.');
define('SECURE_AUTH_SALT', 'Vb8*F,L>Y1d|$f|i8PXrI(}M1*jHXq~lrsa+K:[{jj/eHrTP-;>+`{Z@uB q[c+#');
define('LOGGED_IN_SALT',   'eJr!UV(/!)9P1H++2R|LNvTBcLa=48J^TpslL2:{?;#fO9$$~X+vK,9kP$J;RYE_');
define('NONCE_SALT',       'p?bEUjCi[:l=,nF7O4Yf;,hr$k/qm8vd=lpF8pJ^T2Ue,@Wj$2Kg0(i+U9{j73]-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
