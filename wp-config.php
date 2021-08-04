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
define( 'DB_NAME', 'onebaz77' );

/** MySQL database username */
define( 'DB_USER', 'onebaz' );

/** MySQL database password */
define( 'DB_PASSWORD', '48551277@Qq@@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '!62&|F}[r`s&OsFj%XiH>UiM[k4F@|z;R^+++SN8zePi6zXUvSh]+3=RLnLNA}V6' );
define( 'SECURE_AUTH_KEY',  '>D0JDJd+AJs6M$7[n@q+ZzPMjA+[%=$x>^Oz[2-Vwy<~1hw#5OO;=Q6x)JreO&21' );
define( 'LOGGED_IN_KEY',    'zMb&=n,UE?Jkvhm550!5,47rre,`L_%%_N[%f8I#<~(n3,g,2v|o3a 2NadJtHin' );
define( 'NONCE_KEY',        'lG/9BzJnfV#>$oSBJlk+XCUfb$S@W/]d3Ib7g]6:%45Afd>jU5!vU])dX1e?+.P=' );
define( 'AUTH_SALT',        '~ Gnk.h~4r^[94>yx)(AG=^Z)Y3WBi]SpcjTTGRD-5_P>x(;4b`SKU@;mIu9PwJ_' );
define( 'SECURE_AUTH_SALT', '-M~JxzQ?D!r3t}*j}b@+zxwbOm8v]RE?k3ub%|,(,ygi>AEj7C2Q&nGee1,H}6bg' );
define( 'LOGGED_IN_SALT',   'RL9OId98V$#jLv${OkXJQhbiW}1$WqL0;-zrjfb)H_$%|b9|~pon`)wYf>>UF~Cs' );
define( 'NONCE_SALT',       '+ ]fEQGwd;<{KVm$y#|,}gJRn}CG8[7hcmF]S:GL41u@9KRv1=pbA,>SuW.pw(Y|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_77';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
