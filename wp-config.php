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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'wp_user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'desnutri89');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'D5rfmjJt.@/:gbD0J#8k!GWDZx8EY6<_}z*;t[dmIj94<;d^e{[gu?H05[-su2tD');
define('SECURE_AUTH_KEY',  'Ey9PnRK/6(+XW%r)w[~VR*2XM]Ms5M6s M^oI6cW.;g0Vg-Z7&^^Ez=))yrpODRX');
define('LOGGED_IN_KEY',    'dZWHU0C-#!vgV@f(luSHd@8Lb|L;QnwhFox@Sw,<e2BGD+dGoSsWmY3l!`[)[l!z');
define('NONCE_KEY',        'XV4P{R>SjA3^GsJXzQ!ABuGi8B?OF)IlcF1@.AJ2TIjF+LJeg1gnq]ycKQ_&TTME');
define('AUTH_SALT',        't((d_9[j+|7ZV9[6fZ1 &Pyf@O<r}DM`aY#iw0E ?qL<TbI[?ZUw<eeoNPr-NvD/');
define('SECURE_AUTH_SALT', '=f|-_*QoJg]8J+gPH*@5=rAKJw?wm?^`(B]bp!llasjq,Qv5&)T[Rd3Ii=#TfXxr');
define('LOGGED_IN_SALT',   '2:41-ztsgKIfaAqzYc(H5i?+L-nl84*jn6 Si&/1%fnvE=?/NQ@,@.SyylDRPt*%');
define('NONCE_SALT',       '+2T<)9e|B9H.?y|TecA!~s{@FL*~w_#62(Gb)ea.A7>O4+`,YVC#/F{9<pHbAHa~');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
