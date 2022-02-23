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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('REVISR_WORK_TREE', 'C:\Users\Pichau\Local Sites\stoque\app\public/'); // Added by Revisr
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lMZJpESGQIY7gKEUNsPdI0c029dajKeJut5yraYW4e5GW4busU0BMfZuEycelZEyMG24TNU/WyB45497fO99Dg==');
define('SECURE_AUTH_KEY',  'RvvsNP8lyixCFexM3/0u0ek4PZkjLPoWfC0XGlReAWcV5ZtVaTZSjMRbtI25TH4BcDKMal+j3XFDeYWdo+n0uQ==');
define('LOGGED_IN_KEY',    '7BOJdJ4i7d1zqYFR1Vvty2Z5/K+dUuIJMplNfqygV8rNyMeSU3K4hY5sCwHpJYiqAtFV0K0bGsQmi9N/fPNEnA==');
define('NONCE_KEY',        '3h5hWZl8tGe9+FbGbzcUNnbdC5jxHOyNievwZquT3hKdf2AQj+Thlf8UxBTDW2jvcMGCOrY1lVTVzE7pOtbBPg==');
define('AUTH_SALT',        '36L3w/+OVKQSyH+3fGrj+lqF8+fUKfImpPQw4faMGAa1x76wEbe41yQoOCESU9iWZcJHOKn0UmCo/UczoPMrzQ==');
define('SECURE_AUTH_SALT', 'I8KzdA0gNfVuwy9SSTwu7eU2sd7EMwnr4SmvmAC4P61LNeyBG8SRiF8tym8Zvwzs3DpOFpzgRjrUTmNHqKzuvA==');
define('LOGGED_IN_SALT',   'UweR4IpsLoagM2mGJzPcSDm+7FcJv2gh1Zf6UeUOwwH5wuiTnuq6B4FzvgvCRTBG/6FXF7xcMJmKOBvZcZNn4A==');
define('NONCE_SALT',       'oaoCpm3ZAbQkoYrSgL0twLEPpshnUT3DG1EfqPzONHUt3BgOLaPrI0hpTkiK2Idj5pSVy0QIZuQa+wnUZo3i/Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
