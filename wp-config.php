<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i8939854_twhy1' );

/** Database username */
define( 'DB_USER', 'i8939854_twhy1' );

/** Database password */
define( 'DB_PASSWORD', 'L.7IddQULxTv2weraUS35' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         '1ckR2Bw8BgWpw3tYdUabbfJ2PaNBb9oqMaO9tdt3Qca9wuwIWMKiwtVeRYvPe2M5');
define('SECURE_AUTH_KEY',  '4DzV2C9w9XJYoYjT68tJ3v25xNV5yyPwoEvGGM8u5VDcMcztvH2X6wTT2OwlwlE6');
define('LOGGED_IN_KEY',    'lZlMgSwCYhSlKidQaLpLO5ze0Z4a2vRnbPYLj5sRt4ONgXYnlHKCg5g8s8E6C7C4');
define('NONCE_KEY',        '49soUadJ85ImmqYfnV6Wy6tqPAL9mHzCLcBkDpZuUEPVl1JYMZjRCOwWCWxqhdoO');
define('AUTH_SALT',        'dM6729Ksd7pT76G3IfzftgE0l4wmGuu3x10EEmMIFJpzbkYkN2qqslrUL0fTliA2');
define('SECURE_AUTH_SALT', 'uPjEtCVLiDWAutgAW83BbJ7LwV1L1hzYOi3C2Qu9dgYgTyzgCD9LWXdvzK20dyc5');
define('LOGGED_IN_SALT',   'ghonvlnOsYonwjeZ7GPGkjSvaHeW43JX2YtLqclqjEsDy3sqMYhVc3zkSw9Gf1jk');
define('NONCE_SALT',       'MJeqjfG2ovnA4QJbzsxWoos1iUYxhsQA0f0fxaAbyLWw6Vb6L0n80phJccozQXkE');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'e02o_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
