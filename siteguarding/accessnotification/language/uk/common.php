<?php
/**
*
* @package phpBB Extension - Уведомление о доступе от SiteGuarding.com
* @author Команда SiteGuarding.com
* @copyright (C) 2017 Команда SiteGuarding.com (https://SiteGuarding.com)
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
	'PAN_TITLE'			            => 'Повідомлення про доступ користувача phpBB',

	'PAN_SETTINGS'		            => 'Налаштування повідомлень про доступ користувачів',
	'PAN_SETTINGS_NOTIF'		            => 'Налаштування',
	'PAN_SETTINGS_SAVED'		        => 'Налаштування повідомлень про доступ успішно збережено!',
	'PAN_SETTINGS_NOTCORRECT_TELEGRAM'		        => 'Налаштування сповіщень про доступ НЕ зберіглись! Щоб активувати повідомлення через Телеграм, необхідно заповнити поле «Telegram API token».',
	'PAN_SETTINGS_NOTENTERED_EMAIL'		        => 'Налаштування сповіщень про доступ НЕ зберіглись! Ви повинні заповнити поле «Електронна пошта», щоб активувати підправку повідомлення електронною поштою.',

	'PAN_ENABLE'		            => 'Увімкнути повідомлення електронною поштою',
	'PAN_ENABLE_TELEGRAM'		            => 'Увімкнути повідомлення через Телеграм',

	'PAN_SEND_FAILED'		        => 'Відправити при невдалому вході до системи',

	'PAN_SEND_SUCCESS'		        => 'Відправити для успішного входу до системи',

	'PAN_EMAIL'		        => 'Email Ел. адреса',
	'PAN_EMAIL_TITLE'		        => 'Повідомлення електронною поштою',
	'PAN_TELEGRAM_TITLE'		        => 'Повідомлення через Телеграм',
	'PAN_TELEGRAM_TOKEN'		        => 'Telegram API token',
	'PAN_TELEGRAM_CHAT_ID'		        => 'ID чату',

	'PAN_FOR_MORE_INFORMATION'		        => 'Для отримання додаткової інформації та подробиць про повідомлення, про доступ користувачів phpBB, будь ласка ',
	'PAN_LINK_CLICK'		        => 'натисніть тут',
	'PAN_FOR_ANY_QUESTIONS'		        => 'З будь-яких питань та підтримки, будь ласка, використовуйте LiveChat або цю ',
	'PAN_LINK_CONTACT'		        => 'форму зворотнього зв\'язку',
	'PAN_LINK_SITEGUARDING'		        => 'SiteGuarding.com',
	'PAN_SITEGUARDING'		        => ' - Безпека веб-сайту. Професійні послуги із захисту від хакерської діяльності.',
	'PAN_LINK_GET_API'		        => 'Отримайте свій токен API',
	'PAN_AUTOFILLED'		        => 'Надішліть повідомлення боту і це поле буде автоматично заповнено після надсилання',
	'PAN_SETTINGS_NOTCORRECT_EMAIL'		        => 'Введена адреса електронної пошти недійсна!',


));
