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
define('DB_NAME', 'chalets_et_caviar');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '*******');

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
define('AUTH_KEY',         '*O@xZFybp1W^wEL?D_EUW8MJ 6,v>g8bH3M2,*bWE:aU%]a_BY`c<lgEp;p,9p_L');
define('SECURE_AUTH_KEY',  '9u>XiDO#Mj65)xlTQ?f|$Z3NuJI>h4^S+0,NyC=l$J@1hGc:GTd=%y9ATp6,4@Eq');
define('LOGGED_IN_KEY',    ';8x^pvN[4`0^]_@~Kt!x(9^{9H2X<3@3k[EUr>0ADKT:Jl}4!a?,X>5{1Lx+t|yQ');
define('NONCE_KEY',        '[} tm#]!Vr^PjALay0-;)RbI%~h:vEfI>PegD{=`n=TsEI;UPh<;1k6fAIuzLkM:');
define('AUTH_SALT',        'a.%:j3bPod,Fvgb?9wc[_n)V}qBcL&vA0+lrKXLH,b).cA4xxQ%H>KE5S7D,XE~?');
define('SECURE_AUTH_SALT', '}vge7<p^ XJqmP|yvefkBk/XBZ5#M6#}|lWC`P.bQ>t=UT{`7>r`rJ_?e02&Sgr7');
define('LOGGED_IN_SALT',   '!E KZky$ZslG>3`m:zhbLa{P>#^V9qKEgANSJ|Owmc1sSA574?M51WrpQk!vQnt ');
define('NONCE_SALT',       'gjJH_jPzrFUqYp]Ep`<loAbBj=rwdzp]i*>RTms0W)4quq;s#`1OOGO&%VuSWt5a');
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
