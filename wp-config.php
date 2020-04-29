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
define( 'DB_NAME', 'Ready' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$7H+vCe$CR<:rbbt$3F&kW~rg`!w^)#@Y}wZ7yajnqyL( bn(.OZt1?9NEf@e8PG' );
define( 'SECURE_AUTH_KEY',  '^=+/c|]m)ayZ9(6AoVDNk LK*t~[lY0We.[6PG8s/~~HF.=Kg+[FkHsQdzz:e0+c' );
define( 'LOGGED_IN_KEY',    'I*z3,<%e{SW|un9w5NXIi$7K@jUiVLoskOHVuxOdE;V{Y^zxU6*2*%an?AP{/,.{' );
define( 'NONCE_KEY',        '|Gs+`C ?>uvB(9$yI*zvv-hWR;Jr+ZuD`Azb%Ez]c-g+$}ZIKEKv;O[GWQ9r(7Sa' );
define( 'AUTH_SALT',        'r M]~eVMzAV 1sQR8iOC~YKI)9T:Sc}irb8B@S|/B8T^@3wdEV^L%r>G9/c7c ag' );
define( 'SECURE_AUTH_SALT', 'A^Wu4wmHj,.xUlOh-)]YKT{J:Ln#r#H^8z<oA,?(z%!%mld(,4wls$=!w3_|]LHy' );
define( 'LOGGED_IN_SALT',   ',EJPQWkG4z7iX@ar;{|k5X64 g7W>,#)W7etVP+lj^^PwggOgz[s=G8uU5oKzT]7' );
define( 'NONCE_SALT',       '-GBNNd]!x_n|[B3YBH=kPik(t,qU=ilED}M}}nO;B<@Aj>`Sid2WU[s:s,#Tv0TH' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
