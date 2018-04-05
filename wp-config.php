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
define('DB_NAME', 'one');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S!c:D;tQuCNIf>/X1D``ZtEbely9cP%AZBIT_Ca*59,,}b=lJJOG7bcuAEz7PZN3');
define('SECURE_AUTH_KEY',  ' >vj9bF`_18>u)}yN0qGfs |&Z_t_)E#Z1z/adT.e,JkisDn7C(.-lR-:`NSy0uP');
define('LOGGED_IN_KEY',    'qz26WAs(ZRDC3^.v5Kzv%~S:QM#5e0J!cCb$aR|EC>b${W=42(y/oL-4O1U#0K1*');
define('NONCE_KEY',        'NFME:a=)7om(gfo=j@7oa=l0xJ~PvRCQ!Kp+AY<SuVV< Wt%F|YW17h85B28%)xC');
define('AUTH_SALT',        'Bd~o7rHs|*)w{e&0;z+3;n8H*}#h(vdL+Ar-1W1v7a;G2{`:Y*9)63*k+x+q5;8l');
define('SECURE_AUTH_SALT', 'HpA.@9JSnSZ .*M1GP A5$aKTuKTP=Gc5(w1Ha[wpVk/a3nWYm&C%gUTG0R4*gUC');
define('LOGGED_IN_SALT',   '{GxOx0lkcn8e<~%B?N/N*&QLjfab7Z.QsZ.jnWx(@H@Ub;g15zTS7R{O}d$??C6/');
define('NONCE_SALT',       'Z|[w6iK=b~-F=[+7_ox.swJUfe#{rx;lowF===${sQ0ka71mbfE kL@*:J0ce1=-');

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
