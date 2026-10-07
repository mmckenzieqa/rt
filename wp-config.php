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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`[pMl7*EA$?3xm0to`aR{!Qv=TmL}KYx`K5[yp+]L^a.:qYb3s/shq[]&::=NTa[' );
define( 'SECURE_AUTH_KEY',  'Y]/-csV1nfJy~%>HOH|,&nLUP}Bwk8l,^4G>y#,XuDkx,-T3A8$qjs_8/gXGmh+$' );
define( 'LOGGED_IN_KEY',    '5]!dH&iH_@5j<d +qJ/}Y!z?[r/F<9w?.;z_V{J4ooGH0 I,Y}(Z#3_pA(K@|P^x' );
define( 'NONCE_KEY',        '*jl9_AkJ?9)?TDIA>B#9pV*_M_$T8Qw%aUpGy=IRk_@0J!71e25QH!q>dw~x6K7K' );
define( 'AUTH_SALT',        '%58T#uAqTb9ek2>(/}p`!m`a^Z)y4do;LfVQ])T<@$[wgzHMRX0&tyMWUM0[nz}o' );
define( 'SECURE_AUTH_SALT', '1CiZao;+Lt3;vK~Lr,t(HkkJ`CdORml98HZU,FiNCsR,_Fj_*}gjs?-dJC@JrMum' );
define( 'LOGGED_IN_SALT',   'jEp 6hB5=^7vbZ.v##J{u)_og^c:)dKE[_WhZMDJ(ntZ;~Pxbmk30d[1#K9v_vL%' );
define( 'NONCE_SALT',       'krr.pYf({v2kiB#Ac`/r*%1$qFQ7R!)!H<ne lK9[Rnp=,YfM1R4zGYR5O|#7hFc' );

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
