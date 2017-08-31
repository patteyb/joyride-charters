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
define('DB_NAME', 'heroku_048bed3bb41232b');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
/*define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');*/
define('AUTH_KEY',         'yLvF3053g1?*oXf^|pc}ny@UE|[l6IZ(5lOOElZ=`w1Aa6wQ@<09sKh3C()_h{UD');
define('SECURE_AUTH_KEY',  'P1>P%{se,8,F%A|]vWFm]IMI+!ZmWDP7eXTVe>+7n@gvT+#KH[F<jP5}cpjy-G.Q');
define('LOGGED_IN_KEY',    'Ubng~gj7B<uWA4=5}8 upIE:oqd@L!Wb(AJ<cux;j/x>Mu:sr^>-pR+5lJ1}_Y8B');
define('NONCE_KEY',        'ugFY=Sd9$yWKy=#9hCzk!+Yx7bvWMs{d2YHimqag<t(i!k5anR?I+Lx_n}Mc=G|B');
define('AUTH_SALT',        'O%jiQZ%3e2:0VE6Avn2LNcB|.r|p}@YzQ.P|T;2.NdI3H*7ot+M?(]p1vF=))2dM');
define('SECURE_AUTH_SALT', 'QgK-`^YQ-j5N_(O-W{]s|pC`iBd@cq}^,q!BpH8E;dIp6}C{;;h4gX3M|-k*-GYx');
define('LOGGED_IN_SALT',   '*J#<t&fv!+]|E0=|>+w7|fbX[eMljgj8DxplzYe&|a=qt;IfU!=wEO?lBbDbwuS/');
define('NONCE_SALT',       'CdYODlek<Uu|A@,,L#gDF`Kpq6Y7j@OvW?R4{v<4,-{b//jAM%u+yu-R)BM>rr*(');

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
