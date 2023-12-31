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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u311423116_sparkgps' );

/** Database username */
define( 'DB_USER', 'u311423116_sparkgps' );

/** Database password */
define( 'DB_PASSWORD', 'Sparkgps@2023' );

/** Database hostname */
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
define( 'AUTH_KEY',         'x/1?X8c|$!tAK]f/xs*a3AGOKNL*pfX,|4Kv#jB:HH)r&m`W3V@cQQZGFpgBEVW6' );
define( 'SECURE_AUTH_KEY',  '9?)tXB[c#hs:3(nZZ84CKz}O<m<|cZY4ue<}<aj}z5VG/!9vSYD]8fFOJSvg=h:)' );
define( 'LOGGED_IN_KEY',    'it{TZphCgzLN;33~&zC#(j@Dx*+K];2za0;Ye|z w^>m{S}Fm#&Gr=Q3{p*wwN]Z' );
define( 'NONCE_KEY',        'GT)Q6j;jzdxP*d#6PKgz#6!#OAw:$7zn]p82mOTuA9Z!9yv,R=h{z4)|G00rGbz7' );
define( 'AUTH_SALT',        'yHd1s~vW?uW_/)(^GQ_t3t4{wCpKQU>1WVrHVlMC3J@IjaM7[>P8n$-.T{DvT{F)' );
define( 'SECURE_AUTH_SALT', 'tI3Yx|BV*S{<%[_M9>5<(V-8YW:=NPD^RFWiPUOF/WV!}tN&U 8)8AC>l3zEwVov' );
define( 'LOGGED_IN_SALT',   ' K&(b5VC=5KpWn:VOdfUtBJQOe2hQHVqD&=wHFrj?(>nhJ,b3#q-hH~o+G@2+zm ' );
define( 'NONCE_SALT',       '$qJ<3SFE>5tGC0{+5B[So+zqQDuyv`gnPR+7NRd}%H:9T:y{?oD=m8mJhz8Gs[Su' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
