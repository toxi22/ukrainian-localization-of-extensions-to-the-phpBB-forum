<?php

/**
 *
 * cmBB [English]
 *
 * @copyright (c) 2016 Ger Bruinsma
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
	'ACL_U_CMBB_POST_ARTICLE'	 => 'Може публікувати статті cmBB',
	'ARTICLE_HIDDEN_WARNING'	 => 'Ця стаття прихована і доступна лише для модераторів.',
	'ARTICLES'					 => 'Статті',
	'ARTICLES_TOTAL'			 => 'Усього статей',
	'BACK'						 => 'Назад',
	'CATEGORY'					 => 'Категорія',
	'CMBB_UPLOAD_BROWSE'		 => 'Або вибрати',
	'CMBB_UPLOAD_DRAG'			 => 'Перетягніть файли сюди',
	'CMBB_UPLOAD_EXPLAIN'		 => 'Виберіть файли через вікно завантаження нижче. <br /> Допустимі типи файлів: ',
	'COMMENTS'					 => 'Розміщувати та/або переглядати коментарі',
	'COMMENTS_DISABLED'			 => 'Коментарі вимкнені',
	'CONTENT'					 => 'Зміст статті',
	'DELETE_ARTICLE'			 => 'Приховати статтю',
	'EDIT_ARTICLE'				 => 'Редагувати статтю',
	'ERROR_MUCH_REMOVED'		 => 'Ви дуже багато чого прибрали з цієї статті. Це може бути зловживанням або простою помилкою користувача. Дані НЕ зберігаються.',
	'ERROR_TITLE'				 => 'Вказаний заголовок не дозволяється.',
	'FEATURED_IMG'				 => 'Популярні зображення',
	'LOG_ARTICLE_VISIBILLITY'	 => 'Змінено видимість статті',
	'NEW_ARTICLE'				 => 'Нова стаття',
	'NO_HIDDEN'					 => 'Немає прихованих статей',
	'NO_REACTIONS_ARTICLE'		 => 'Вимкнути коментарі <small>(коментарі вже можуть бути вимкнені в налаштуваннях категорії)</small>',
	'READ_MORE'					 => 'Читати далі...',
	'RESTORE_ARTICLE'			 => 'Відновити статтю',
	'SEARCH_USER_ARTICLES'		 => 'Пошук статей користувача',
	'SHOW_HIDDEN'				 => 'Показати приховані статті',
	'TITLE'						 => 'Заголовок',
	'USE_AVATAR'				 => '-use avatar-',
	'WELCOME_USER'				 => 'Привіт %s!',
		));
