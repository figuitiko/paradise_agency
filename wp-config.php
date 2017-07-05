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
define('DB_NAME', 'paradise');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GW!eAf[7Zv!z7YEykCM#-+%#VD7Lni cO?s6U?`XK<htDb*>dnVp(m%JGgf6]EB)');
define('SECURE_AUTH_KEY',  '_8grv^&*}I8/vHJY3ZaQZC,%EWtQ/|~{%RqsXB@0pTqIFs>ie;5xePStyi0tL*6c');
define('LOGGED_IN_KEY',    '`MohBvRyN%f^#tEY~uwZ6azx2z_4ug*1Ze1X[nL@,;EDyY1567E67g;VhlF;[&5+');
define('NONCE_KEY',        'kRH(71S*:JMkdg;6lSor<&@_|({L|K@YQA!vC**WUt-ou _J~dZr3_6ud##^itmg');
define('AUTH_SALT',        'IlOeq[A5BH5VTRnb40~DYV1&?l%#QwEZDz_g03T=]Hp5t6WS1QBCkMJlpJH(<Tv[');
define('SECURE_AUTH_SALT', '-9oXBt;xZ(wqatG_2R,(DnoNLo?]H3s7Emw]Y4*Jp,gA.t)!m*:+#(h4X|feS*d;');
define('LOGGED_IN_SALT',   'BP]G_`$f(%{WahKAwaOnbnrfqABfwOOE|tEQ(gH-&6Eb%WPXd}(d(K+tmDx?k1Tz');
define('NONCE_SALT',       '1pp%1,YeTB7i%R9i>`S.m5%-OUBi+!n9G] oX0m<6(a}H*M$:xwSm1<_S:y2|^NH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pf_';

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
