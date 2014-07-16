<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_ab_2014');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(TVDO[tmYdFn,k+t@G>u$)]~q9Z#~>~j(D6|Dk@W[ip2:T-u#{fOyrnMW+h2W@bG');
define('SECURE_AUTH_KEY',  'L?8mpyeAvRo[lZs|_lX$77/Mve7qP3oiM|0AxXaXh+ D>GV9ilhE0bBj6^AzC` |');
define('LOGGED_IN_KEY',    '}?=g+eb*L7O%+6ZSOKs~:[<CAp?i:vv|)eA|m*vK(m}|!d1oe%OZkmjhb<pjz5tx');
define('NONCE_KEY',        'LD:@s+AdfWJ;.j8@P.)p<}+ma}Ps#54Z(jAO*Iy_2W+#hRGLlYb{lrY8VKFjMSd;');
define('AUTH_SALT',        'rh(bC8W}3!-1_xJ+W-UGLM9Zhmb,/OGW8?GdCWbj+w(-Z.N3r*h=B|lOR.SKavkj');
define('SECURE_AUTH_SALT', 'jBG$`}+1Z q`S@FvCjf8B9iK|Rv!bV-r%P_F/5~-P~!+I9,}-l!`JH[s}*sFlQl*');
define('LOGGED_IN_SALT',   'Twp8Q(gbvBQ#qU(}y+Z:`tTH^(pgLBaK=ish&R%.@|Q#UCws0AbLr)1k3l6MI/`N');
define('NONCE_SALT',       'W}hC@$HQY[!]tQhxt4`q~gPzf/y~ wMtlj{2qdWQ*Dr]*R)rZPAdyW&eI>S8|%4Y');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_ab_2014_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
