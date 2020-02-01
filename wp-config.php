<?php
define('WP_CACHE_KEY_SALT', '53def8bfbfa8daf4bf1faf03b3d616cb');
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', true);// Esta opción es imprescindible para garantizar que las actualizaciones de WordPress pueden gestionarse correctamente en el paquete de herramientas de WordPress. Si este sitio web WordPress ya no está gestionado por el paquete de herramientas de WordPress, elimine esta línea.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gfne56h');

/** MySQL database username */
define('DB_USER', 'wp_uwz8u');

/** MySQL database password */
define('DB_PASSWORD', 'O7eSskC6$3');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '0~cdk!zd8KB!x)6nw[5TP!4u9L5fx%iYb(!z%hSXWu]0y1V1+#!J71R5c;vW49CM');
define('SECURE_AUTH_KEY', '(RkBaiRhTl2je57wv38Za4GmFG369J&0s&_NA)Z1!o7:(:I_E1XPg0p*6d]b]:Sk');
define('LOGGED_IN_KEY', 'dy2t%+K*7[*3Y4El3P)7([ZR16xR%W8;g08x/s9y)q5AeDMtxq1c:)s6w(b_0H5(');
define('NONCE_KEY', 'O0bKVKY4;4ppXYZ50_0i_I@P9M%8dOR]d&q(7VN_8H-0L;/|uH1KnmY!AM0QX1:E');
define('AUTH_SALT', 'i1t4G3+(ZsXt@t+75c1#-S:6+zbY1jyA41Pb1Xnq2I-D%M~[#[42(PuN0q]3F!Pp');
define('SECURE_AUTH_SALT', 'Hj8s5b6(t2m64_u*x]73P7S!u@#65ho8)/581n3:RXS5:FE+fF0X2r))|BA|!~-3');
define('LOGGED_IN_SALT', '|2d]Y9kNE~EMaoTZ;]eSA%0)+Z8|(cPYgYsa35eoK#89OI;dG3vqr/tap-@K8OQB');
define('NONCE_SALT', '3JzLr(tIjJb2P!]]|/)~7T7uyRz4(;]~:45KrX1/R_C[LT3:|]!O~]8M-tcH&0x[');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Qa16Y_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
