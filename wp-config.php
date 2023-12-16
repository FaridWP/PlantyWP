<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '<k][JszDpur<b=$^f}UZ7EsW+%^8PC@A^p0UE#CMibBv>&<c9SJM(d4_j3J<uV= ' );
define( 'SECURE_AUTH_KEY',  'Ikf8;pZ,5DVj-!Fxo`P$sAd 4}#D*e5a(Ban@%*.$pP=#!Key];g|?$FcSc+e6lR' );
define( 'LOGGED_IN_KEY',    'iJ)U3>{6V!Aiq<rCE?.gsHF6|:px{@0V/rz*A|p3^`j j^4e#6ky|!ffxQ[DvU=r' );
define( 'NONCE_KEY',        ')asQ5e)>y|FKQO5A^?S?!7/@autC{/aa:$,:>DYr.(:ZXTU~,e?sH$IXh{HBef{f' );
define( 'AUTH_SALT',        'QR0y%~h:Nuxg[T*eGxGv%D%K?u;AVJasU+V.UHy:ai]Qii(^xtSwCPL79m_M:$d%' );
define( 'SECURE_AUTH_SALT', '+3E=9`Uy..pz3*t~}d1G(ho>(*rmV=mec$2Po ATB_hqw(arwO9X91#YGI(Bk_`7' );
define( 'LOGGED_IN_SALT',   '@q}KI1>Z0pR[a]K3mj>/*)L!yz6A8~)j;g=$pMg@o`(5)(%_pdM{SV2O-_Gf?C`[' );
define( 'NONCE_SALT',       '|18JF19W1OB}p|~,{SV15ZS$JGpcrerj*g]%.2daw)4[Vrd&>:46j`-n8E%y@a03' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
