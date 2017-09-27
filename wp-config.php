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
define('DB_NAME', 'authwp');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'G.2REd8FK;z3G*oCn}i9b|@A!bVv><BNym:IUWU$6jD(2+zn^aJ9?f(FL{^zTcei');
define('SECURE_AUTH_KEY',  '>.QEf&6ps&b/6E[Q5TPP6Wy{asCrh}dl@67tt3(lnO$>Ee)l+^S&zo8e5z>N^el|');
define('LOGGED_IN_KEY',    'Z!(o !7,<J0-y4_No}+RI6mO-O~)QzQ`LCmx^>ojb[E3S%ut`~r{*c{19L)9Q] [');
define('NONCE_KEY',        'lq5%OldFsP ,SH9,yZL0]hjxw=y7.OG_*a:YjxNVR$iuy;V(p#+Jwdx?KAXFY]F3');
define('AUTH_SALT',        '?e)/OPj38<m`F_5@r VyWo_GE-U}GB;{B,08BgFoVk*6$Qngk(8q1w(-W@$W59sC');
define('SECURE_AUTH_SALT', 'e.ADb1xti FmA,YQ8X|{[A|KZ,~ELmiuIsDh*:P1VaG.ToPj;4f=|t#&n{3>GJ7f');
define('LOGGED_IN_SALT',   'T9}Oo~~cDUMLUClsv]N<C2beQ(Bk#r?P<!I|vKt.Tx>ixGnI&>Rm tfXi)n..ea;');
define('NONCE_SALT',       'aRqU|[#mrYTcBn _UqEGb=pUah|fgVK^m$*st@Jm&a%<YKK?WnzB*VD#/z&^<.(5');

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
