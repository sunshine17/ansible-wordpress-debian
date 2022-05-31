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
define('DB_NAME', '{{ wp_db_name }}');

/** MySQL database username */
define('DB_USER', '{{ wp_db_user }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ wp_db_password }}');

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

define('AUTH_KEY',         'QH#W<Xg2;>L_M%_8`]j#u$-6Y7LTnY8l +}9HMRV)?=<->4_=E1N~f&D*|^8A^RU');
define('SECURE_AUTH_KEY',  'X;hX|eq C99*v[`)Yr^A+tq<4 v(2K:UFm*/?|jd@%!4Bb(0jjH`Q4}Hz_IwIqDW');
define('LOGGED_IN_KEY',    'rHT-|<W`/JZBd2E}-~2zV+I+>>79tlec-%f0+.1ps#uW00,y~+Gx(&/vS}G%Vn?$');
define('NONCE_KEY',        'Q~IgbQOe&N!iHpucMh1L:ab|Sx|NT6>{)Jgf(g2<Mgg{S9yhPJ)!s09<Eg/B||A]');
define('AUTH_SALT',        '{5sm;(1p.c|l$mHL.F7Kg&=7`cyJ/L+NM{;XLPE#zEBU4ZTvh24xWww2F6lY1M+_');
define('SECURE_AUTH_SALT', 'gEf(n%f3e$L?eOLB_T2&c@-?8C;nZi{UW=nMdTOmA+|?i7}oqd>Rr:zx9gX$<b1G');
define('LOGGED_IN_SALT',   '$87`R0c f4`wDzgn!->QEhCG-g$[69cwh%^I3dVm~6xY<eb-7%_z`K-<%s~GW|~E');
define('NONCE_SALT',       '%GsmT|3f|YuJ#Q~vy%Ftr1s3Kagx.W-yxaoVB#_i%qG;B:*6#cwJDlm%+r|U~{0O');

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

/** Disable Automatic Updates Completely */
define( 'AUTOMATIC_UPDATER_DISABLED', {{auto_up_disable}} );

/** Define AUTOMATIC Updates for Components. */
define( 'WP_AUTO_UPDATE_CORE', {{core_update_level}} );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
