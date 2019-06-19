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
define('DB_NAME', 'spa_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vagrant');

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
define('AUTH_KEY',         ']A?~g:h3/IEu,*953K:FJ}Tx$,u#p&| zF0OnItvwHOaXq)/ei85%+UI4R<~yLu9');
define('SECURE_AUTH_KEY',  'S pu6>HZ(6bvWbs!yuICieh~SQvf:_aXE!=B58zKvo`eywV8eizOW}TQsREQLNkF');
define('LOGGED_IN_KEY',    'oZp2wUb{$|{6U4MO#@n,,<1skdXxZ}#tyKpbUTJ8KHl.D1}7-{{0!6As0x=bnrr!');
define('NONCE_KEY',        'IfwZ^u1Fb|fVpLe}>xtc:JLN^IGbPsAbU&r]jqSCN-=MG{8GKF6K-W UCi$mc/ O');
define('AUTH_SALT',        ':Sbc;Ry#oTelJ3m4zhZUqEdJ D*o{SB4(m}N5:1kuy;~WNqs!gS0p)t#4VxEuxvY');
define('SECURE_AUTH_SALT', '7%KWA4g,]yw8R%z*Ztq:$]$]A^Q#%P<<9GQ*COA Do*uS])hr3pU<g2&NCKo/vG^');
define('LOGGED_IN_SALT',   '+U2,q~&tHI57 U~c0Ic0)p_z`l@OWH:mj.f_*~W5M~K,~*<KD{30SVu]NBQd4[jm');
define('NONCE_SALT',       '5d47)|v>~^*l%MhhlH!k~jA]h6A!<(ab$Bja)^;kI9koo4K:}-2T>doIm#dm[-!:');

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
