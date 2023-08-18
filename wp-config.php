<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cyrilbroult_dev' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3]t.>b7QpIwi(sfZy)$]~>Cc&.uOO1%^Vm_m^1,2X44`^ztcM(}0ZWZJnhIH26SY' );
define( 'SECURE_AUTH_KEY',  'qz{V36^.z%4q9(Vfd13o}_*?)epD^;~GY>(?eI:Z_w9Jg0<M`xHtZa>_96`rk:G9' );
define( 'LOGGED_IN_KEY',    '-T_wGXNT-k?e3Kw])@fTU[OV9#T?FmRT?_ocxQ>X@AIHUS@Mm9.xH.2e*y<H/y9+' );
define( 'NONCE_KEY',        'mQrd#$Z:z`[_s]yo9;J [ NA,X|2/jRPEOM5Ps)J]1v2G:i?[g,lZpws;auZ,%+$' );
define( 'AUTH_SALT',        '<1y}/],*i )q6<Ecsp_Ji%n(/IKXke!4{pJZAEKj%J3^^:_;[mV`Xjt^wi{t1&b{' );
define( 'SECURE_AUTH_SALT', 'm.*5CI&o}3{!Ga_$f_U_x3u`ZyBH%o@K/lJpzN;bP2x2 z];)Q/tV^Un=J/RF5St' );
define( 'LOGGED_IN_SALT',   '-9 HdnSV xQM]k*o~:6sQu2t|YUX3K{S& )wWCKA]e7IC+ HG(*Xc[$}86*K!7#z' );
define( 'NONCE_SALT',       'K>D 4:O;>VvT$pJ<<h5]&UzsP]%,lJw0[*&e`GV99vSi$WJ$htrJZ7,7H4!iSD[x' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cb_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
