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
	'ACL_U_CMBB_POST_ARTICLE'	 => 'Может публиковать статьи cmBB',
	'ARTICLE_HIDDEN_WARNING'	 => 'Эта статья скрыта и поэтому доступна только для модераторов.',
	'ARTICLES'					 => 'Статьи',
	'ARTICLES_TOTAL'			 => 'Всего статей',
	'BACK'						 => 'Назад',
	'CATEGORY'					 => 'Категория',
	'CMBB_UPLOAD_BROWSE'		 => 'Или выбрать',
	'CMBB_UPLOAD_DRAG'			 => 'Перетащите файлы сюда',
	'CMBB_UPLOAD_EXPLAIN'		 => 'Выберите файлы через окно загрузки ниже. <br /> Допустимые типы файлов: ',
	'COMMENTS'					 => 'Размещать и/или просматривать комментарии',
	'COMMENTS_DISABLED'			 => 'Комментарии отключены',
	'CONTENT'					 => 'Содержание статьи',
	'DELETE_ARTICLE'			 => 'Скрыть статью',
	'EDIT_ARTICLE'				 => 'Редактировать статью',
	'ERROR_MUCH_REMOVED'		 => 'Вы очень многое убрали из этой статьи. Это может быть злоупотреблением или простой ошибкой пользователя. Данные НЕ сохраняются.',
	'ERROR_TITLE'				 => 'Указанный заголовок не разрешен.',
	'FEATURED_IMG'				 => 'Популярные изображения',
	'LOG_ARTICLE_VISIBILLITY'	 => 'Изменена видимость статьи',
	'NEW_ARTICLE'				 => 'Новая статья',
	'NO_HIDDEN'					 => 'Нет скрытых статей',
	'NO_REACTIONS_ARTICLE'		 => 'Отключить комментарии <small>(комментарии уже могут быть отключены в настройках категории)</small>',
	'READ_MORE'					 => 'Читать далее ...',
	'RESTORE_ARTICLE'			 => 'Восстановить статью',
	'SEARCH_USER_ARTICLES'		 => 'Поиск статей пользователя',
	'SHOW_HIDDEN'				 => 'Показать скрытые статьи',
	'TITLE'						 => 'Заголовок',
	'USE_AVATAR'				 => '-use avatar-',
	'WELCOME_USER'				 => 'Привет %s!',
		));
