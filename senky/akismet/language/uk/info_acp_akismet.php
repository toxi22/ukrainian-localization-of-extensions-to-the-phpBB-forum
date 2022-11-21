<?php
/**
 *
* Акисмет. Расширение для программного пакета phpBB Forum.
 *
 * @авторское право (c) 2018 Якуб Сенько <jakubsenko@gmail.com >
 * @лицензия GNU General Public License, версия 2 (GPL-2.0)
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
	// ACP модули
	'ACP_AKISMET_TITLE'			=> 'Akismet',
	'ACP_AKISMET_SETTINGS'		=> 'Налаштування',
	'ACP_AKISMET_SETTING_SAVED'	=> 'Налатування були успішно збережені!',

	// Операции ведения журнала
	'AKISMET_LOG_SETTING_CHANGED'				=> '<strong>Оновлено налаштування Akismet.</strong>',
	'AKISMET_LOG_CALL_FAILED'					=> '<strong>Не вдалося здійснити виклик API Akismet</strong><br />» Повернутий API: “%1$s”',
	'AKISMET_LOG_POST_DISAPPROVED'				=> '<strong>Несхвалений пост “%1$s” написаний “%2$s” з наступної причини</strong><br />» Повідомлення виявлене, як спам, сервісом Akismet',
	'AKISMET_LOG_TOPIC_DISAPPROVED'				=> '<strong>Несхвалена тема “%1$s” написаний “%2$s” з наступної причини</strong><br />» Тема виявлена, як спам, сервісом Akismet',
	'AKISMET_LOG_SPAMMER_REGISTRATION'			=> '<strong>Користувач %s: Реєстрація спаму, виявлена через сервіс Akismet</strong>',
	'AKISMET_LOG_BLATANT_SPAMMER_REGISTRATION'	=> '<strong>Користувач %s: Явна реєстрація спаму, виявлена через сервіс Akismet</strong>',
	'AKISMET_LOG_SPAMMER_GROUP_REMOVED'			=> '<strong>Akismet: Група %s була видалена</strong><br />Akismet більше не буде додавати нові реєстрації спаму до групи'
));
