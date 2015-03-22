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
define('DB_NAME', 'actsetup');

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
define('AUTH_KEY',         '64ihRI%eLb| aHL]FMRR,S6SbB!-11 PelQ(ifU a7F$10IaUuNK`ud|s#B`3*|-');
define('SECURE_AUTH_KEY',  'ZFTo7cJ6asb1J3GHCXM{Ry&ayO$%W{m.ts|wY#M*KhByDd9(KXEMT-kwt}^Q$<sc');
define('LOGGED_IN_KEY',    '+BA 1DX&(3Ug:V,3Oqxybj=3?4v_p&|YmI+[^}zLG5Y-|:V|=loBA5r8`pD!1+s#');
define('NONCE_KEY',        'j&^?~HUMB.~3-h`mJ]OVi^YF(qtVjjCq;xlXxeYaAUiLp1!4.HtbR#;s7; H$qR}');
define('AUTH_SALT',        '~W,l*t{j?>/#:CqB(P$_Q<~<h=?&0SI2|hA-; F ^u3y0tNvg#h&5aF%@j C5JJ=');
define('SECURE_AUTH_SALT', '5PCXJhvvt*-V%X%+.BBvVBZ|%q437<#hP{`%WIY1Ffntos**B*1~yp4`S2HJlr`|');
define('LOGGED_IN_SALT',   'qj)L01&%AcYv`3Id *|IZdZIC9~!tqpLMEMm3.!Qk:Pko~|YhcF&rFm[eE({s}yT');
define('NONCE_SALT',       'BHRbm@.49f4e-mv_?*RdJ[tv.+?n>i_]{O|/W-z_uw-v%mhd ,C^1xmx+G`duxGA');

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
