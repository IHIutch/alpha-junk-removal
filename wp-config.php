<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

require_once 'vendor/autoload.php';

// Initialize Dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD']);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_ENV['DB_NAME']);

/** Database username */
define('DB_USER', $_ENV['DB_USER']);

/** Database password */
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

/** Database hostname */
define('DB_HOST', $_ENV['DB_HOST']);

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          '8yK}#-zc9;~pm;0Z@O!hlGjei)fpy-.Z&hq$mH>`-&pd<g31cc}v_>]VP]G,o:pH');
define('SECURE_AUTH_KEY',   '<g*c*Bw KwL~`=4uKM1 3RX%OKhEl.DRODncj:,WOEv,:7.hP>&3^*FFgGzi~_~/');
define('LOGGED_IN_KEY',     '@Ms+%)[~RW$sr/$s%mS!|x^mT*:n^9y3(Sdob6~7=;Q3iMeTp=pZe4+&dpT{^^A%');
define('NONCE_KEY',         'U~_ho6e*<z=76Q=?dk76,NIG=Kh`h&,V{^]$AId?$e<HZC5:Z8hRxbsFLJ=]YhL#');
define('AUTH_SALT',         ':<.+!kw?P0ooq.2)[try@4e^N[z+7U<rvCx;s%!`$20pb5J+QhSJ=eAqX#^#mW!Y');
define('SECURE_AUTH_SALT',  'V0WR^!$E^2@6z#ZFCYgXRbKlZ0]fzxdk}PG;&v8l+M>< T_0~R8>bmXV-n,3nk_b');
define('LOGGED_IN_SALT',    'RMd$6m|ON %;Rig;sN*gvxDp#Y~<3?h)sRj%Wu.5,%_dakgP3b8CwJ3FkMnX7j/N');
define('NONCE_SALT',        ';%6d|~[nF~P:NftCGmir&iA;?2(0{{G|-BW%!E*>ll-on(24&zyZWGPk;.@5BKhj');
define('WP_CACHE_KEY_SALT', 'LQhFv@:yPUSadHR5Hg^?l9[~ABzg#Nbqn0Q$/JRr]G2<zP,~IQB5niGJ7pb U@r6');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', $_ENV['WP_DEBUG']);
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
