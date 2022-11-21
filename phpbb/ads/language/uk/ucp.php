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
	'AD_NAME'		=> 'Назва',
	'AD_START_DATE'	=> 'Початок показів',
	'AD_END_DATE'	=> 'Закінчення показів',
	'AD_VIEWS'		=> 'Перегляди',
	'AD_CLICKS'		=> 'Кліки',
	'AD_STATUS'		=> 'Статус',
	'EXPIRED'		=> 'Закінчено термін показу',
	'ACTIVE_ADS'	=> 'Активні блоки',
	'EXPIRED_ADS'	=> 'Деактивовані блоки',
	'NO_ADS'		=> '<strong>Ви не маєте рекламних блоків. Користувачі, які володіють рекламою на цій конференції, можуть переглядати свою статистику тут.</strong>',
));
