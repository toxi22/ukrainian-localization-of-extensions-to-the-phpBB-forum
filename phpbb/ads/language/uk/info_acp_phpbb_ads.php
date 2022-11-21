<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package (russian).
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'ACP_PHPBB_ADS_TITLE'		=> 'Керування рекламними блоками',
	'ACP_MANAGE_ADS_TITLE'		=> 'Керування',
	'ACP_ADS_SETTINGS_TITLE'	=> 'Налаштування',

	'ACP_PHPBB_ADS_ADD_LOG'		=> '<strong>Рекламний блок додано</strong><br />» %s',
	'ACP_PHPBB_ADS_EDIT_LOG'	=> '<strong>Рекламний блок відредаговано</strong><br />» %s',
	'ACP_PHPBB_ADS_DELETE_LOG'	=> '<strong>Рекламний блок видалено</strong><br />» %s',
));
