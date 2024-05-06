<?php
/**
*
* Stop forum Spam extension for the phpBB Forum Software package.
*
* @copyright (c) 2024 Roman Pavlovsky (toxi)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, [

	// ACP entries
	'ACP_SFS_TITLE'			=> 'Stop Forum Spam',
	'SFS_CONTROL'			=> 'Налаштування Stop Forum Spam',
	// ACP message logs
	'LOG_SFS_MESSAGE'		=> '<strong>Тригер Stop Forum Spam</strong>:<br />Логін: %1$s<br />IP: %2$s<br />Email: %3$s',
	'LOG_SFS_DOWN'			=> '<strong>Функція Stop Forum Spam не працювала під час реєстрації або публікації повідомлення на форумі.</strong>',
	'LOG_SFS_DOWN_USER_ALLOWED' => '<strong>Функцію Stop Forum Spam зупинено.</strong> На форумі дозволено доступ наступному користувачеві:<br />Логін: %1$s<br />IP:%2$s<br />Email: %3$s',
	'LOG_SFS_NEED_CURL'		=> 'Для коректної роботи розширення для Stop Forum Spam потрібен модуль <strong>cURL</strong>. Будь ласка, зверніться до адміністратора вашого сервера, щоб встановити та активувати модуль cURL.',
	'LOG_SFS_CURL_ERROR'	=> '<strong>Помилка Stop Forum Spam cURL</strong><br>» %1$s',
	'LOG_SFS_CONFIG_SAVED'	=> '<strong>Зміни Stop Forum Spam збережені</strong>',
	'LOG_SFS_REPORTED'		=> '<strong>На користувача надійшло повідомлення від Stop Forum Spam</strong><br>» %1$s',
	'LOG_SFS_PM_REPORTED'	=> '<strong>Користувачі повідомили у ОП, що необхідно запустити Stop Forum Spam</strong><br>» %1$s',
	'LOG_SFS_REPORTED_CLEARED'	=> 'Повідомлення та особисті повідомлення, на які скаржилися, були видалені з метою запобігання спаму на форумі.',
	'LOG_ADMINSMODS_CACHE_BUILT'	=> 'Stop Forum Spam. Створено кеш адміністраторів та модів.',
]);
