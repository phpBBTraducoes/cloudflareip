<?php
/**
*
* Cloudflare IP
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0] (https://github.com/phpBBTraducoes)
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_CLOUDFLARE'				=> 'Cloudflare IP',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore não existe!<br /> Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore na sua pasta de extensão de sitesplat.',
	'CLOUDFLARE_NOTICE'	            => '<div class="phpinfo"><p>Não há configurações específicadas para esta extensão. Os endereços IP agora estão todos normalizados e serão os usuários reais IP. Aproveite!<br /> Você pode ser expulso do ACP depois de clicar para longe desta página. É totalmente normal à medida que seu IP atual é mormilizado. Entre novamente.</p></div>',
));

