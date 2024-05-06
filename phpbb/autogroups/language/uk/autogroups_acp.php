<?php
/**
*
* Auto Groups extension for the phpBB Forum Software package.
* Ukraine translation by toxi
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
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
	$lang = array();
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_AUTOGROUPS_MANAGE'			=> 'Керування АвтоГрупами',
	'ACP_AUTOGROUPS_MANAGE_EXPLAIN'	=> 'Використовуючи цю форму, ви можете створювати, редагувати, переглядати та видаляти конфігурації АвтоГруп.',
	'ACP_AUTOGROUPS_ADD'			=> 'Додати АвтоГрупу',
	'ACP_AUTOGROUPS_EDIT'			=> 'Редагувати АвтоГрупу',

	'ACP_AUTOGROUPS_GROUP_NAME'				=> 'Група',
	'ACP_AUTOGROUPS_GROUP_NAME_EXPLAIN'		=> 'Виберіть групу для автоматичного додавання/видалення користувачів у/з неї.',
	'ACP_AUTOGROUPS_CONDITION_NAME'			=> 'Тип АвтоГрупи',
	'ACP_AUTOGROUPS_CONDITION_NAME_EXPLAIN'	=> 'Виберіть умову, за якою користувачі можуть бути додані або виключені з цієї групи.',
	'ACP_AUTOGROUPS_MIN_VALUE'				=> 'Мінімальне значення',
	'ACP_AUTOGROUPS_MIN_VALUE_EXPLAIN'		=> 'Користувачі будуть додані до групи, якщо досягнуть мінімального значення.',
	'ACP_AUTOGROUPS_MAX_VALUE'				=> 'Максимальне значення',
	'ACP_AUTOGROUPS_MAX_VALUE_EXPLAIN'		=> 'Користувачі будуть виключені з цієї групи, якщо перевищать максимальне значення. Залишіть це поле порожнім, якщо не бажаєте, щоб учасники були виключені з групи.',
	'ACP_AUTOGROUPS_DEFAULT'				=> 'Зробити групою за замовчуванням',
	'ACP_AUTOGROUPS_DEFAULT_EXPLAIN'		=> 'Зробити вибрану групу за замовчуванням.',
	'ACP_AUTOGROUPS_DEFAULT_EXEMPTION'		=> 'Це не торкнеться користувачів, чия група за умовчанням одна з наступних: %s.',
	'ACP_AUTOGROUPS_NOTIFY'					=> 'Повідомити користувача',
	'ACP_AUTOGROUPS_NOTIFY_EXPLAIN'			=> 'Надіслати повідомлення користувачеві після автоматичного додавання/видалення до/з групи.',

	'ACP_AUTOGROUPS_EXCLUDED_GROUPS'		=> 'Виключені групи',
	'ACP_AUTOGROUPS_EXCLUDE_GROUP'			=> 'Виключити учасників цих груп',
	'ACP_AUTOGROUPS_EXCLUDE_GROUP_EXPLAIN'	=> 'Учасники, які належать до <em>будь-якої групи</em> вибраної в цьому списку, будуть ігноруватися. Залишіть це поле порожнім, якщо ви хочете, щоб ця АвтоГрупа застосовувалася <em>до всіх</em> учасників форуму. Виберіть кілька груп, утримуючи <samp>CTRL</samp> (або <samp>&#8984;CMD</samp> на Mac) і оберіть групи.',
	'ACP_AUTOGROUPS_INVALID_EXCLUDE_GROUPS'	=> 'Виникла помилка. Цю ж саму групу для цієї умови також не можна вибрати у полі “Виключені групи”.',
	'ACP_AUTOGROUPS_EXEMPT_GROUP'			=> 'Встановити винятки для груп за замовчуванням',
	'ACP_AUTOGROUPS_EXEMPT_GROUP_EXPLAIN'	=> 'АвтоГрупи не змінять групу користувача за замовчанням, якщо вона зазначена у цьому списку. Виберіть кілька груп із натиснутою клавішею <samp>CTRL</samp> (або <samp>&#8984;CMD</samp> на Mac).',

	'ACP_AUTOGROUPS_CREATE_RULE'	=> 'Створити нову АвтоГрупу',
	'ACP_AUTOGROUPS_SUBMIT_SUCCESS'	=> 'АвтоГрупа успішно налаштована.',
	'ACP_AUTOGROUPS_DELETE_CONFIRM'	=> 'Ви впевнені, що хочете видалити конфігурацію цієї АвтоГрупи?',
	'ACP_AUTOGROUPS_DELETE_SUCCESS'	=> 'АвтоГрупа успішно видалена.',
	'ACP_AUTOGROUPS_EMPTY'			=> 'Немає АвтоГруп.',
	'ACP_AUTOGROUPS_NO_GROUPS'		=> 'Немає доступних груп',
	'ACP_AUTOGROUPS_INVALID_GROUPS'	=> 'Виникла помилка. Не вибрано діючу групу користувачів.<br />АвтоГрупи можуть використовуватися тільки з певними групами користувачів, які можна створити на сторінці “керування групами”.',
	'ACP_AUTOGROUPS_INVALID_RANGE'	=> 'Виникла помилка. Мінімальне та максимальне значення не можуть бути встановлені на те саме значення.',

	// Conditions
	'AUTOGROUPS_TYPE_BIRTHDAYS'		=> 'Вік користувача',
	'AUTOGROUPS_TYPE_LASTVISIT'		=> 'Дні після останнього відвідування',
	'AUTOGROUPS_TYPE_MEMBERSHIP'	=> 'Кількість днів реєстрації',
	'AUTOGROUPS_TYPE_POSTS'			=> 'Повідомлень',
	'AUTOGROUPS_TYPE_WARNINGS'		=> 'Попереджень',
));
