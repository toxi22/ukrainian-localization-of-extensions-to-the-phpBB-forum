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
	'ACP_CATEGORIES_MANAGE'				=> 'Управление категориями',
	'ACP_CATEGORIES_MANAGE_EXPLAIN'		=> 'Здесь вы можете добавлять, изменять или удалять категории. Сначала вы должны создать категорию и опубликовать ее, а затем изменить настройки.'
											. '<br />Обратите внимание: cmBB использует название категории для URL. Поэтому после того, как вы выбрали название категории, рекомендуется НЕ менять имя впоследствии, поскольку URL-адрес НЕ будет изменен соответствующим образом.',
	'ACP_CMBB_CATEGORIES'				=> 'Категории',
	'ACP_CMBB_SETTING_SAVED'			=> 'Настройки cmBB сохранены',
	'ACP_CMBB_TITLE'					=> 'cmBB',
	'ACP_MIN_TITLE_LENGTH'				=> 'Минимальная длина заголовка',
	'ACP_MIN_TITLE_LENGTH_EXPLAIN'		=> 'Требуемая минимальная длина заголовков статей',
	'ACP_MIN_CONTENT_LENGTH'			=> 'Минимальная длина контента',
	'ACP_MIN_CONTENT_LENGTH_EXPLAIN'	=> 'Требуемая минимальная длина содержания статьи (тела). Предотвращает тарабарщину статей.',
	'ACP_NO_ARTICLES'					=> 'У вас нет (активных) статей. Создайте новую статью по ссылке ниже:',
	'ACP_NUMBER_INDEX_ITEMS'			=> 'Количество элементов индекса',
	'ACP_NUMBER_INDEX_ITEMS_EXPLAIN'	=> 'Максимальное количество последних элементов для отображения на индексной странице. Элементы отсортированы по дате (последние сверху)',
	'ACP_REACT_FORUM_ID'				=> 'Форум для тем комментариев',
	'ACP_REACT_FORUM_ID_EXPLAIN'		=> 'Выберите форум, чтобы создать тему для комментариев.',
	'ACP_SHOW_MENUBAR'					=> 'Показать строку меню',
	'ACP_SHOW_MENUBAR_EXPLAIN'			=> 'Панель меню добавляется в заголовок, содержит все категории с дочерними элементами, а также домашнюю страницу (если есть), индекс доски и контакт с нами (если включено).',
	'ACP_SHOW_RIGHTBAR'					=> 'Показать правую боковую панель',
	'ACP_SHOW_RIGHTBAR_EXPLAIN'			=> 'Вы можете показать боковую панель справа, содержащую любой HTML-код, который вы хотите. Полезно для рекламы или любого другого контента, который вы хотите показать.',
	'ACP_RIGHTBAR_HTML'					=> 'Содержимое правой боковой панели.',
	'ACP_RIGHTBAR_HTML_EXPLAIN'			=> 'Если у вас включена правая боковая панель, будет отображаться введенный здесь контент. Вы можете использовать любой HTML/JS, просто убедитесь, что он коректный.',
	'CHILDREN'							=> 'Дочерняя',
	'CHILDREN_EXPLAIN'					=> 'Количество статей в этой категории',
	'CMBB_CATEGORY_NAME_INVALID'		=> 'Недопустимое название категории',
	'CMBB_SETTINGS'						=> 'Настройки cmBB',
	'CMBB_DELETE_CAT_EXPLAIN'			=> 'Категория может быть удалена только тогда, когда в ней нет статей',
	'CREATE_CATEGORY'					=> 'Добавить категорию',
	'ERROR_CATEGORY_NOT_EMPTY'			=> 'Категория не пустая',
	'ERROR_FAILED_DELETE'				=> 'Ошибка удаления.',
	'NO_REACTIONS'						=> 'Комментарии отключены',
	'PROTECTED'							=> 'Защищена',
	'PROTECTED_EXPLAIN'					=> 'Только модераторы могут публиковать',
	'SHOW_MENU_BAR'						=> 'Показать в строке меню',
	'SHOW_MENU_BAR_EXPLAIN'				=> 'Показывать или нет эту категорию в строке меню (только если у нее есть дочерние элементы). Полезно отключить, если вам не нравятся списки категорий или у вас есть только несколько свободных статей.',

		));
