<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'moosecodes');

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
define('AUTH_KEY',         ')JM368g@RE[H}|?Dq^$q:xX/4&5>&qm,fj<olq[K%HxJW] MUR-UNaT,arG{i3MK');
define('SECURE_AUTH_KEY',  ']SB]U*hb.);Z]0D<~_i(swj}mt!EydG1KjwcmOm].dLm3rPN)/(j8*y*PZ$[IN=6');
define('LOGGED_IN_KEY',    'N0;Q+w.g~9g$YUi@KI</Dh{?,0Lsi!NpClG0Tp-8_jf28U68<c=(++1o)yGlEB)a');
define('NONCE_KEY',        'bM;T*KeC0?_z1)g/;L8}$-{kiWwz5=6_Yc|-;}af-wQr=Iwi[d-~gy)z|#D%A#Ek');
define('AUTH_SALT',        '9r@Gn|i*h[:-WS9Bq12B-#Q$k|P6xG:-sDL/{=v);>~?Kc#$af?-5bdzNIdrD&FH');
define('SECURE_AUTH_SALT', 'm<(qM&n{u/5dYT4p_lR|Jzuw-+F@;TU:OA,kQk$(b;SoYt|mTD.X~[sh,sG*i!|-');
define('LOGGED_IN_SALT',   'CZ{o)>)dJqt87-&{Ah<zG^2nQ`*:$nrC>DQzy(AD&&t1}]h%R9&Es6E-x[]R0u@]');
define('NONCE_SALT',       'YCvzAGj7xh|XJ!D*~A|aPAx-e&lDTKHjOTF>)8`1@s[W1k-_q;0e/]r]Ge8 `zJ ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
