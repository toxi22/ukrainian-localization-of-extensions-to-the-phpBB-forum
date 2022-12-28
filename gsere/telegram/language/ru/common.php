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
	'ACP_SETTINGS'			=> 'Настройки',
	'ACP_SENDER'			=> 'Токен Telegram Bot',
	'ACP_SENDER_EXPLAIN'		=> 'Введите идентификатор (ID) бота, который будет отправлять сообщения',
	'ACP_SUBMIT'			=> 'Обновить настройки',
	'ACP_SAVED'			=> 'Идентификатор (ID) бота Telegram обновлен.',
	'TELEGRAM_ID'			=> 'Ваш Telegram ID',
	'TELEGRAM_ID_EXPLAIN'		=> '<b>Уведомления через Telegram</b><br>Добавьте своего бота «BOTNAME» в свои контакты Telegram и введите свой идентификатор (ID) Telegram ниже. После этого вы можете перейти в «Настройки форума -> Изменить параметры уведомлений» и выбрать оповещения, которые вы хотите получать в Телеграм.',
	'TELEGRAM_GROUP_REQUEST' => "Сообщение от %s:\nПривет %s, Пользователь %s отправил заявку на вступление в группу <b>\"%s\"</b>.", 
	'TELEGRAM_NEW_MESSAGE'   => "Сообщение от %s:\nПривет %s, Пользователь %s отправил сообщение на %s с темой <b>\"%s\"</b>.", 
	'TELEGRAM_OTHER'         => "Сообщение от %s:\nПривет %s, %s.",
	'TELEGRAM_PRIVATE_MSG'   => "Сообщение от %s:\nПривет %s, Пользователь %s отправил вам личное сообщение с темой <b>\"%s\"</b>.",
));

