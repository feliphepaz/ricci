<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'riccidb' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fJ4sHUC;}U=KK=guf%04M-|=nW+[x_1>!9<[0+w:5[05<G<}49hIQ#!JEIM2^FF)' );
define( 'SECURE_AUTH_KEY',  'EGiY?=2i2mszg`t-[RR$6yHw38Pz5)+mDu7O5hO1hGr:*E<FD$ 1oH)KAOA4MWp~' );
define( 'LOGGED_IN_KEY',    '/`[g@;r-:QbY?2Sx3I}.6hGK;@`+B+O~cWpFko9?)[=d+avR@#Jk-7E3wt+dn%Wa' );
define( 'NONCE_KEY',        '-,K<J,hRcn/>A1.l4c/YCVGHHcv1TE@/R-x{4.]l[0R{TomQQ^5%h;5*.!<w]0a+' );
define( 'AUTH_SALT',        'h&5Pr1A>Ez:@;$2*5#$]f!0:]C5qzslJ9c2th}eZ7{4^/xO?.(#Lj$tM#{WGhBg[' );
define( 'SECURE_AUTH_SALT', 'VwuhEF:b@1(A%%X$D;He@z}0WHAOwg+xz|51!E:Z@uj#+^gU}g{hHJE7p:y51a1g' );
define( 'LOGGED_IN_SALT',   'Z6D+-m>mmz5aH6`7Q4q.S/=iGcrtzQZ,X20Iz*`ctM/79i3XbbL/F`3,4<sRcM[[' );
define( 'NONCE_SALT',       '=6/{e%Y[>L7fa^4YN#Xw*8PdK3hYu/yOQceE>}]`B-6@#J.;4XXC>MEzA!5wO! v' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
