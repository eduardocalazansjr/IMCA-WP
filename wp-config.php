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
define('DB_NAME', 'ranki319_test');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'ranki319_test');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'mark9218');

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
define('AUTH_KEY',         'SJ`ZRNIjOV4Y|*o1d*L9+cb-&]Q^c2A~BPbx5:$D,O G]YRC;N|;3K*eR||QG+=q');
define('SECURE_AUTH_KEY',  'O}XluX<fTm]_eAtv1|z;4Ecz-&fe#7.+@uS~c*Q^uFFhf|S@5W0-w#=!@~l^&O<6');
define('LOGGED_IN_KEY',    'FQn^:!}A0#{q_g+<vOCyeF;_8L:UBmWB.JQ90Ty*v!-MW$[k9??SD(1d&,tqZ;.z');
define('NONCE_KEY',        '+)6krm|tUR*9T@=Ua(1?CqFJ~>*0-BlCZ2H}@nL <ZAS+1FT+.reqbehE|o |c:w');
define('AUTH_SALT',        '-%~p*0l8s||G|~[j&g*#&$NWQ~o$+[/CK(q-KkhvnmOb. psA74dH]<r&}S+L;ow');
define('SECURE_AUTH_SALT', '4R~VzdCkxMe{Dl:9k/3c_qA++YU}>B~-0bi`L{<{mDaunQb+)|+dq|B:W[NqzTMr');
define('LOGGED_IN_SALT',   'Qww|~-9C%uN,fA|JcXE|jtNZ7+kcg^6~(WsiWFH 94#i* t-Pl9c^+sXn$?pyh5)');
define('NONCE_SALT',       'utx K.-w<+z`1n40G-doeH(}*%ds:|LWWlY8}!l`;I6 lA4jP*+to=s/a7]~k%Sb');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
