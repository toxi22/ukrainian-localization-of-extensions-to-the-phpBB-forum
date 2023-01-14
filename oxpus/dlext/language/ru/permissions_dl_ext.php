<?php

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2021 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * Language pack for Extension permissions [English]
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// Download Extension Permissions
$lang = array_merge($lang, [
	'ACP_DOWNLOADS'			=> 'Панель файлов',

	'ACL_A_DL_OVERVIEW'		=> 'Может быть виден начальный экран',
	'ACL_A_DL_CONFIG'		=> 'Может управлять общими настройками',
	'ACL_A_DL_TRAFFIC'		=> 'Может управлять трафиком',
	'ACL_A_DL_CATEGORIES'	=> 'Может управлять категориями',
	'ACL_A_DL_FILES'		=> 'Может управлять файлами',
	'ACL_A_DL_PERMISSIONS'	=> 'Может управлять разрешениями',
	'ACL_A_DL_STATS'		=> 'Может просматривать и управлять статистикой',
	'ACL_A_DL_BLACKLIST'	=> 'Может управлять черным списком расширений файлов',
	'ACL_A_DL_TOOLBOX'		=> 'Можно использовать набор инструментов',
	'ACL_A_DL_FIELDS'		=> 'Может управлять пользовательскими полями',
	'ACL_A_DL_PERM_CHECK'	=> 'Может проверять права пользователя',
	'ACL_A_DL_ASSISTANT'	=> 'Может запустить мастер установки',
]);
