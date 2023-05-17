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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_bv6fya/bmi.mslamac.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'bmi_mslamac_com');

/** MySQL database username */
define('DB_USER', 'bmimslamaccom');

/** MySQL database password */
define('DB_PASSWORD', 'qTyYAEQS');

/** MySQL hostname */
define('DB_HOST', 'mysql.bmi.mslamac.com');

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
define('AUTH_KEY',         'j!:V$?Cm?eEL2eUoYFjn!MFOM)m8dS?XFB6VK$27*|g@rYTdQvl_!nba%O$TLV1$');
define('SECURE_AUTH_KEY',  '9o)OAVo~@x"tCfD8FGb%"Q%"SR(a(s5TbI#v;kZsVYJjkcVaEOmz!~KMJWcusf!)');
define('LOGGED_IN_KEY',    'ar"_Qu*7D%oQb4foMHhYzFjS?0CX#!1cOi0!)"Lm4aQ!GER2cCE%IFd|4EW4Q4Kt');
define('NONCE_KEY',        '%eQgM!COzy7?X&bz1D(zGpI3EIf%|GF;"tm~R10VsL%Y"Z#(_LW$lBzfE#dI|3X+');
define('AUTH_SALT',        'M"PS99T?&64Qt67sLiKsD)rBgDkqH6gv#D2TnBl964IbSTR7n9YHQuAu~k^+w*Qq');
define('SECURE_AUTH_SALT', '#1z)l8Y:Sj5+3g!8f@51^EXu"|q6e~:s6W/#_t@`k6j/gJY7$vet~_xF6"SowN(h');
define('LOGGED_IN_SALT',   'ovQbG@Ejj&_P8*^vGXey)K#v;e+V&Z@:B8?)_F0)F~p4y`5W0Y|hM&uYP"akvx~v');
define('NONCE_SALT',       'UrW7u0G41U^QPVquTy0LuGH6TyV5p;rB+Z4JGE4Kg_TW~|/*+XtPWwp&$S7;Q_Hi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_yqz72e_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
