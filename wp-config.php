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
define( 'DB_NAME', 'sage11' );

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
define( 'AUTH_KEY',         '*g=O5Iq~r+(ZjuM =/#*Y0$Mwp!JA|N&5Xa^U202z9@Cha>~5/VR{fNC?L}H2Op~' );
define( 'SECURE_AUTH_KEY',  '<1}(rK%UNl#(|Z^pAzIj;rMlfLR,(LW7[$F/fPuxRk?)N!>2gus67225K1R|SQ^P' );
define( 'LOGGED_IN_KEY',    'o}vE*3i7OT=!F e)7WhfsEY/fct%5AU7gxfM6r!wA0eK^bV_?mFa3$kLjc8InN>&' );
define( 'NONCE_KEY',        'f*CEGT3,ZO o*gqn$V!`g9~}n7d/}&]c%@RR}FwdC`X383x$6!k nO=8QVfK@2.<' );
define( 'AUTH_SALT',        'R?N3/.U.E3;KA&tAVJK*|rQkH6>6z D(B>#~+P.nv8wX6Q!1A;T<(>&H!vVZO/Z`' );
define( 'SECURE_AUTH_SALT', 'C!VRT(!ZJWwL@`6kNXwn+pV!(8^@rX|pKj]fA3Z-@Db.>8dQ;|=UXdy[n IRvSRu' );
define( 'LOGGED_IN_SALT',   '(Ws%TuDK0EdKe<dvFi!8DCW#GLGPB*daV.IWIAV?gxQ-+G0f^JkGS)eW,O?0_ox9' );
define( 'NONCE_SALT',       'W^:>W2k#Ej_a>z}N? QZ39a0@wUdm3U?,RGJnXD8n<(9,]dLwJ#R`1R9m[<2m&${' );

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

define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
