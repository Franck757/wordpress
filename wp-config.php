<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'ilayoga');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'troiswa');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z}g5maQ!vTrQ|6)c;VmVkM>43U_e7$-Sqkid4miD,O,pWDztx0nEW;qCIa?pPWSV');
define('SECURE_AUTH_KEY',  ':e6n9awN-v$)f8YtK@=6nT(KD/;@{Fu-REiG(n9eMf57H^l|Z<Q$kr$5?LGY(kq:');
define('LOGGED_IN_KEY',    ';zO*mRNH [Fk[q;WwGako  Vi:XSe:dX~dl-8Oc=+mab5-whBk]2By:^Ge-*[4]q');
define('NONCE_KEY',        ':DqLpDv4b>e&BYCpcM{(p]E8y`YubLnE*ovgH!LghyBfp0H>sKJ-Y#^rYFa#[h_J');
define('AUTH_SALT',        'FqdFKQ:-qDsRrnqU*ci3&8K?4O 8J2@U>6>_Hu,V873SKQV**Ym;RcZm OYo_/.`');
define('SECURE_AUTH_SALT', '+zp42u?]GeE/2tJ<zK^j[$/^,LY>w9zIK;z{Ka@u!ZGrt!&:VG3Q?o]_]BDF@.$@');
define('LOGGED_IN_SALT',   '{]Y@Ur!EeyEUKXM~zQk S<*wFj#Qe<,/6OY&nSOe^Ez;$audO?FD88h3Q]z6-Fa&');
define('NONCE_SALT',       'I4t)*>sYR<2b0cVgK4M47Fd(uv4t}%(:M%ezW-Evg^OEj,}3|~lmV@LC`0Yuk:hm');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');