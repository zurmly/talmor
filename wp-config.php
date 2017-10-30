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
define('DB_NAME', 'talmormlyco_DB');

/** MySQL database username */
define('DB_USER', 'talmormlyco_USER');

/** MySQL database password */
define('DB_PASSWORD', 'murcrfv2017');

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
define('AUTH_KEY',         'z,_XDiHZKO qEzII)xc(!{pg{k9wR5(hHn#FxW_X6Zt7rv:)rg^SW+<5<No!~*wD');
define('SECURE_AUTH_KEY',  'nO(d+Yg`r>Mt~{#/CLe0QI{65GC=~{;^8-BFq<HQf51wH1d~E{mFSKvn?vCa.9rV');
define('LOGGED_IN_KEY',    ' PS`1(G6;/%z QFeO]Q{!dn {k~qbWl`o@MQz7ATZ4LA$UQ>!rZH=Hh]69@pWdVw');
define('NONCE_KEY',        '+!{qe!i Sn i5-Rw!QSE7#KO*uo[H@&w^}9OMeYRmxJ$S>!)4aY2j68%g+Pz!O:C');
define('AUTH_SALT',        'o )$@5p 6`VFIW3.d{4F{MGg^U=Kg50e6=)1]DLTBj58a;2]d.vv5B8kqEQh4T?H');
define('SECURE_AUTH_SALT', 'Ag,djPh) D%G]`V[:KY/40a(Ui!7)/zPxP(%leGpI>2{zFT|8Z[!v6LukseZDg]g');
define('LOGGED_IN_SALT',   '[bDM3`UnzeX-s<=4+Yrp(7.E5]&yK@/<{UItjXSre_#P8vFKy~ul.i}$TN0j7[,Y');
define('NONCE_SALT',       'zBpa8UiEgfP]taD#Fo;F[_:mD0gx&`1^rK@i8KT^/q (|u2fOYU mFK}MwE7<G F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptalmor_';

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
