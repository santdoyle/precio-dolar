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
define( 'DB_NAME', 'dolarblog' );

/** MySQL database username */
define( 'DB_USER', 'dolarblog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'uEoRp8SlZtGS9K92' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-$(GIRM6EYF9h}(~Y+*H-(/V2Y2%j8L]Z5 }m%;r#wo9{Yd6ps-RYg([8iP4^6A!' );
define( 'SECURE_AUTH_KEY',  '/qiw,HEo;[o0`_!cpn(g#=-987U%}0XC-lm}^*mOeRBNkA:i$<DM^te2bBGc=xUZ' );
define( 'LOGGED_IN_KEY',    '~t_z|-L 0`N[y;,rB2dNZHkvFZuU%gQ@)aUA|%.hq+anO:g%|t nP9t)tpJn~q4>' );
define( 'NONCE_KEY',        'Z Z9Yf_#I:ZSO<#3B&4vu^-kDe07dY!=f(*t}o7b@u FZS^52MUVI+.fQcF:/9@7' );
define( 'AUTH_SALT',        'T[^NJ+N]}.vzd>j>}?eEUJNjg&`QZ8Z1hC<sN4[rk=d9S1xqeMMv)$d>$l2|i6Sq' );
define( 'SECURE_AUTH_SALT', 'uFUIx8[vD:g!Ll!t9VYkE|6[{BK.J#GTm/<`{$mz|O~(ywyOfPCLq?T~>6H;&#Lc' );
define( 'LOGGED_IN_SALT',   '|T)9DSWb3so3``btq/r!vW0Og*9q,09(&xNBTg/rgNg<%nq??EXPlbX.CjX2%GlY' );
define( 'NONCE_SALT',       'v}Lj4@x C9+6eVXO[Nc}~CxO)1tP&&NV_rKgP0E|ta0PCiXl@7Eu2JO;#7i8uB!|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
