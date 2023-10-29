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
define( 'DB_NAME', 'cyrilbroult_dev2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'yanlieb' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Xcacst2613!' );

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
define( 'AUTH_KEY',         'M`:0KlF,UMIhXXF@#?lgShFt]E<eXZ}X$.=!DD4Wx.PgZ&kc~7ys30M*C}&:[_H+' );
define( 'SECURE_AUTH_KEY',  'yA;-2=Yx&]U`6bzkey(ENwx+kZ5t}luEDzM74rC3)D%~CTb?ES%YP]o}J<WO?7X{' );
define( 'LOGGED_IN_KEY',    'rzI*GyBy_&cHp]y25546q+dG*OkTKl`QTN[Fh7KSi0@|_~@pENO;u.[tDWn}*<!O' );
define( 'NONCE_KEY',        'gF}JRwD!V{;[:@A^@2{szF`/(Ip?FSv}[Ala_[f$$#cgJ|ZDZ@nYT7U5awDBX%#<' );
define( 'AUTH_SALT',        '/)_uaM|3{n$_V1z>Ygj2JVb1~cG`;LrTvl{*+/C+Y75B}JfB6gSSkM?Ri|mTQaZ)' );
define( 'SECURE_AUTH_SALT', 'N.%j%ymzoph)?c4hfB^YB<[{*;|fSSidC)cr9WvukEzzEqBNi8vhQ1C[G`Ktm;`g' );
define( 'LOGGED_IN_SALT',   '9T*Sgs ,I+Mzb*Fe.{og!g<_vWTEQ3<m&*$y4J/pW0U7xBAPkRf?1:$2mwG9QuY{' );
define( 'NONCE_SALT',       '0Cirac~g;uGrNuPxi42]^1p(2vZ[D[OH2b9*nX$FsPFi|lN |wW`e=bB{WkevhH/' );
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
