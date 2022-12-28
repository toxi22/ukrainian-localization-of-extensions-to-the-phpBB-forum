<?php
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}


/*
 * TELEGRAM_* params: Site Name, username, [author], subject
 *      'TELEGRAM_GROUP_REQUEST' => site name, username, author, group name
 *      'TELEGRAM_NEW_MESSAGE'   => site name, username, author, subject
 *      'TELEGRAM_PRIVATE_MSG'   => site name, username, author, subject
 *      'TELEGRAM_OTHER'         => site name, username, (comma separated params)
 */
$lang = array_merge($lang, array(
	'NOTIFICATION_METHOD_TELEGRAM'	=> 'Telegram',
	'ACP_SETTINGS'			=> 'Налатування',
	'ACP_SENDER'			=> 'Токен Telegram Bot',
	'ACP_SENDER_EXPLAIN'		=> 'Введіть ідентифікатор (ID) бота, який надсилатиме повідомлення',
	'ACP_SUBMIT'			=> 'Налаштування оновлені',
	'ACP_SAVED'			=> 'Ідентифікатор (ID) бота Telegram оновлено.',
	'TELEGRAM_ID'			=> 'Ваш Telegram ID',
	'TELEGRAM_ID_EXPLAIN'		=> '<b>Повідомлення через Telegram</b><br>Додайте свій бот «BOTNAME» у контакти Telegram і введіть свій ідентифікатор (ID) Telegram нижче.
Після цього ви можете перейти в "Налаштування форуму -> Змінити параметри повідомлень" і вибрати оповіщення, які ви хочете отримувати у Телеграм.',
	'TELEGRAM_GROUP_REQUEST' => "Повідомлення від %s:\nПривіт %s, Користувач %s надіслав заявку на вступ до групи <b>\"%s\"</b>.", 
	'TELEGRAM_NEW_MESSAGE'   => "Повідомлення від %s:\nПривіт %s, Користувач %s надіслав повідомлення на %s з темою <b>\"%s\"</b>.", 
	'TELEGRAM_OTHER'         => "Повідомлення від %s:\nПривіт %s, %s.",
	'TELEGRAM_PRIVATE_MSG'   => "Повідомлення від %s:\nПривіт %s, Користувач %s надіслав вам особисте повідомлення з темою <b>\"%s\"</b>.",
));

