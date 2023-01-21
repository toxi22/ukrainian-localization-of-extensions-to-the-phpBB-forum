<?php

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2021 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * Language pack for Extension permissions [Ukrainian] 
* @copyright Roman Pavlovsky: https://github.com/toxi22/ukrainian-localization-of-extensions-to-the-phpBB-forum
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
	'ACP_DOWNLOADS'			=> 'Панель файлів',

	'ACL_A_DL_OVERVIEW'		=> 'Може бачити початковий екран',
	'ACL_A_DL_CONFIG'		=> 'Може керувати загальними налаштуваннями',
	'ACL_A_DL_TRAFFIC'		=> 'Може керувати трафіком',
	'ACL_A_DL_CATEGORIES'	=> 'Може керувати категоріями',
	'ACL_A_DL_FILES'		=> 'Може керувати завантаженнями',
	'ACL_A_DL_PERMISSIONS'	=> 'Може керувати правами',
	'ACL_A_DL_STATS'		=> 'Може переглядати та керувати статистикою',
	'ACL_A_DL_BLACKLIST'	=> 'Може керувати чорним списком розширень файлів',
	'ACL_A_DL_TOOLBOX'		=> 'Може використовувати набір інструментів',
	'ACL_A_DL_FIELDS'		=> 'Може керувати полями користувача',
	'ACL_A_DL_PERM_CHECK'	=> 'Може перевіряти права користувача',
	'ACL_A_DL_ASSISTANT'	=> 'Може запустити майстер установки',
]);
