<?php
/**
 *

* Акисмет. Расширение программного пакета phpBB Forum.
 *
 * @copyright (c) 2019 Якуб Сенко <jakubsenko@gmail.com>
 * @license Стандартная общественная лицензия GNU, версия 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit();
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SPAM_MESSAGE'	=> 'Ваше повідомлення схоже на спам. Будь ласка, скоригуйте своє повідомлення.',
));
