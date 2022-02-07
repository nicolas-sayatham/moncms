<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cms' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'z <P4x?`!swN7I}H_;!F#gJ|V!`6wbb&@2(SPhn%6kbP]Mbmy(Bl&#GK>t%_yC=%' );
define( 'SECURE_AUTH_KEY',  '9p2e]`$adq&eF=`x00n[330$WJYAp=z8LM}x sBGg#7!Hee|CF7xz]#tX;jBW#d[' );
define( 'LOGGED_IN_KEY',    'bJ(dd|yod Im 7;D]LrCTk<Z0[f$o{hN-C0k6l0;A-asq2{IY_hJ.xj|k<iWx5}#' );
define( 'NONCE_KEY',        't*|q]^4uvRfn>L_#okonQ 2=w`.u7I 0H6!]BZ9[5M<|)mCn9WE13Zsi[cd4Gu >' );
define( 'AUTH_SALT',        '4!=1K?9i:ai8pN]>jCCdx~@]`8UZgCf?}Z8XvC6@n?^|^%UY1)}],yD!ecr5>;:n' );
define( 'SECURE_AUTH_SALT', '5D;@]BBIQM*Ca(cHj[gRA)V[z^tn>)*q;dUGP<,49C{rzWyi*ve2@gdXDFNe_$s}' );
define( 'LOGGED_IN_SALT',   'qLBwjn];r3BHa%ZS8E`w8F:X&B<D%ID+niUGK~pR,c4LjF_(j49#]oWY<M/by8d[' );
define( 'NONCE_SALT',       'nm~jniflH=<}q`+1efR{Pq>8)~TZG/R|Z0l@I6m<[c3iJJ_xFwyhoMN960pR)Au5' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
