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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'W92}5gX~+Y&ripb$j1%D$Ufc5imRyvcs?J+N<f*cv5Xbnm5!x|9GkU:/KuFP*=Hw');
define('SECURE_AUTH_KEY',  'l<G,uZyWJclfjm43l])E@+m~:|]i`D[-NLa-m|S_IQyJ&z7WBM|j)!vw%K*,<M`$');
define('LOGGED_IN_KEY',    'bp6 P6l*@<~42<t1C~Inl=jS^:8s#]ORf[-8?5H=va+e>cnZyr!nlCnPp-j~[I!1');
define('NONCE_KEY',        '=hiY|-IB8-fE[M<ieQ-oOUMUK>iM*%V~Mx}v|yqdD0:~/~Wzx=~Na~c2iU0zU7P{');
define('AUTH_SALT',        'bv{w|xuA<e:o$]`gCpF1_Yw4Cc[]xBhK>S.|W~h*-2V,#x>A3&+t0V*io@v,}ZZ?');
define('SECURE_AUTH_SALT', 'T`b7(Xz8z@9d``_SN[y1rLyJk+{-DDi]8&-fUi`5^ec5bwTJwpfho:I5_0U6`Jx[');
define('LOGGED_IN_SALT',   '? tq;#J*9cI|R5g$k: z.}H7+@qN+oR.m_buY,Ic; f7z?/o3nK0~^/3n6F?)]LS');
define('NONCE_SALT',       'bWl<U4_@Ad+f82?ZFb~PQPQQDqeq>p!~R6}b&C(?H$B:-0|=8_=#.;@$8oVuJ.1A');

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
