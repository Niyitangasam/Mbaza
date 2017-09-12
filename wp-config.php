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
define('DB_NAME', 'mbaza');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D}_p%PUe&LcdT*MyYu?s{p~IG+r2g}MStoW&[t`EWNa)a[co?rdr=WFjt!lq<PYI');
define('SECURE_AUTH_KEY',  '3y4tOYrd*oRL[+b~a{&[Up*1~]nkrQ_r?FIOpe IjxS$&ZPZ^Ywu;;6qaFH^FhVy');
define('LOGGED_IN_KEY',    'Kl<_;Z3B`ju9OOklQ5F!{CF5 Zy{6jf*S x|N$RTZmw:ws/]1%f_gOh[e;7x^:CZ');
define('NONCE_KEY',        'Y]A/Bh;NW{t a.f3b}W$(vCZ~bS3tS1~aKwd{(11,t%VKMTKpZ[YaBO^E}#tbs+@');
define('AUTH_SALT',        '*[_r?zNA%pCkEmI_jC[wKhc]pD%dAH q7=]zN }!p.72l#qVLoMq}>+h!4|*9`CR');
define('SECURE_AUTH_SALT', 'V[BF3cZUcvhp]d~HDo,G_ioK1|p@Pr.&C?@GS2o]e3>2maK9cVzmy 2 C6m2WZ+s');
define('LOGGED_IN_SALT',   'rmx_5+7|ro(c;d4D#TnW{O(=PD8ZsN[x(Ibxas[G!@X?gF9Q^wydt<l?;iadk{#L');
define('NONCE_SALT',       'J5@E.-djx/8lm36=Wmf6$U/>$W=H~^(WIg(a7==.*Zr`qL!Yf.XL@w-}(J6>/qY(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mbaza_';

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
