<?php
/**
*
* Pages extension for the phpBB Forum Software package.
* Modified and maintained by @toxi (Roman Pavlovskyi).
* @copyright (c) 2026 @toxi (Roman Pavlovskyi).
*
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
	// Manage page
	'ACP_PAGES_MANAGE'					=> 'Керування «Сторінками»',
	'ACP_PAGES_MANAGE_EXPLAIN'			=> 'Тут можна додати, змінити або видалити сторінки.',
	'ACP_PAGES_CREATE_PAGE'				=> 'Створити сторінку',
	'ACP_PAGES_CREATE_PAGE_EXPLAIN'		=> 'Використовуйте форму для створення нової сторінки.',
	'ACP_PAGES_EDIT_PAGE'				=> 'Змінити сторінку',
	'ACP_PAGES_EDIT_PAGE_EXPLAIN'		=> 'Використовуючи форму нижче, ви можете змінити сторінку.',

	// Display pages list
	'ACP_PAGES_TITLE'					=> 'Ім\'я',
	'ACP_PAGES_DESCRIPTION'				=> 'Опис',
	'ACP_PAGES_ROUTE'					=> 'Шлях',
	'ACP_PAGES_TEMPLATE'				=> 'Шаблон',
	'ACP_PAGES_ORDER'					=> 'Порядок',
	'ACP_PAGES_LINK'					=> 'Посилання',
	'ACP_PAGES_VIEW'					=> 'Перегляд сторінки',
	'ACP_PAGES_STATUS'					=> 'Статус',
	'ACP_PAGES_PUBLISHED'				=> 'Загальнодоступна',
	'ACP_PAGES_PUBLISHED_NO_GUEST'		=> 'Загальнодоступна (тільки для зареєстрованих)',
	'ACP_PAGES_PRIVATE'					=> 'Приватна',
	'ACP_PAGES_EMPTY'					=> 'Сторінки не знайдені',

	// Purge icons
	'ACP_PAGES_PURGE_ICONS'				=> 'Очистити іконки',
	'ACP_PAGES_PURGE_ICONS_LABEL'		=> 'Очистити кеш іконок',
	'ACP_PAGES_PURGE_ICONS_EXPLAIN'		=> 'При додаванні іконки до посилання потрібно очистити кеш іконок. Іконки повинні мати ім\'я  <samp>pages_route.gif</samp>, де <samp>route</samp> - це шлях, заданий у налаштуваннях конкретної сторінки. Іконки завантажувати в папку  <samp>styles/*/theme/images/</samp>.',

	// Messages shown to user
	'ACP_PAGES_DELETE_CONFIRM'			=> 'Ви дійсно хочете видалити сторінку?',
	'ACP_PAGES_DELETE_SUCCESS'			=> 'Сторінку успішно видалено.',
	'ACP_PAGES_DELETE_ERRORED'			=> 'Сторінку не можна видалити.',
	'ACP_PAGES_ADD_SUCCESS'				=> 'Сторінку успішно додано.',
	'ACP_PAGES_EDIT_SUCCESS'			=> 'Сторінку успішно оновлено.',

	// Add/edit page
	'ACP_PAGES_SETTINGS'				=> 'Налаштування сторінки',
	'ACP_PAGES_OPTIONS'					=> 'Опції сторінки',
	'ACP_PAGES_FORM_TITLE'				=> 'Ім\'я сторінки',
	'ACP_PAGES_FORM_TITLE_EXPLAIN'		=> 'Це обов\'язкове поле.',
	'ACP_PAGES_FORM_DESC'				=> 'Опис сторінки',
	'ACP_PAGES_FORM_DESC_EXPLAIN'		=> 'Тільки для відображення в адмін. панелі у списку сторінок.',
	'ACP_PAGES_FORM_DESC_DISPLAY'		=> 'Показувати як заголовок посилання',
	'ACP_PAGES_FORM_ROUTE'				=> 'URL шлях сторінки',
	'ACP_PAGES_FORM_ROUTE_EXPLAIN'		=> 'Шлях, за яким сторінка буде доступна, наприклад, <samp>http://www.phpbb.com/<strong>route</strong></samp>. Дозволено лише літери та цифри, обов\'язкове поле.',
	'ACP_PAGES_FORM_CONTENT'			=> 'Вміст сторінки',
	'ACP_PAGES_FORM_CONTENT_EXPLAIN'	=> 'Вміст можна створювати за допомогою Markdown, звичайних BBCode phpBB, смайликів та автоматично розпізнаних URL-адрес або ввімкнути режим HTML. У режимі HTML Markdown, BBCode, смайли та автоматично розпізнавані URL-адреси не працюють, але можна використовувати будь-який допустимий HTML-синтаксис. Зверніть увагу, що цей вміст буде додано до існуючого HTML-шаблону, тому не слід включати теги DOCTYPE, HTML, BODY або HEAD. Всі інші теги форматування HTML, включаючи IFRAME, SCRIPT, STYLE, EMBED, VIDEO та інші, можна використовувати.',
	'ACP_PAGES_PARSE_MARKDOWN'			=> 'Обробляти Markdown',
	'ACP_PAGES_FORM_TEMPLATE'			=> 'Шаблон сторінок',
	'ACP_PAGES_FORM_TEMPLATE_EXPLAIN'	=> 'Свої шаблони сторінок називайте <samp>pages_*.html</samp> і розташовуйте на шляху <samp>styles/*/template</samp> ',
	'ACP_PAGES_FORM_TEMPLATE_SELECT'	=> 'Обрати шаблон',
	'ACP_PAGES_FORM_ORDER'				=> 'Порядок сторінки',
	'ACP_PAGES_FORM_ORDER_EXPLAIN'		=> 'Сторінки будуть відсортовані за цим полем. Чим менше число, тим вищий пріоритет сторінки.',
	'ACP_PAGES_FORM_LINKS'				=> 'Розміщення посилання на сторінку',
	'ACP_PAGES_FORM_LINKS_EXPLAIN'		=> 'Виберіть місце для розміщення посилання на цю сторінку. Використовуйте CTRL+CLICK (або CMD+CLICK у Mac) для виділення кількох пунктів',
	'ACP_PAGES_FORM_ICON_FONT'			=> 'Значок посилання сторінки',
	'ACP_PAGES_FORM_ICON_FONT_EXPLAIN'	=> 'Введіть ім\'я значка <strong><a href="%s" target="_blank">Font Awesome</a></strong> для відображення поруч із посиланням на цю сторінку. Залишіть поле порожнім для використання як піктограму звичайних зображень CSS/GIF.',
	'ACP_PAGES_FORM_DISPLAY'			=> 'Показувати сторінку',
	'ACP_PAGES_FORM_DISPLAY_EXPLAIN'	=> 'кщо виберіть Ні, то сторінка не буде відображатися (Адміністратори матимуть доступ до цієї сторінки).',
	'ACP_PAGES_FORM_GUESTS'				=> 'Показувати сторінку гостям',
	'ACP_PAGES_FORM_GUESTS_EXPLAIN'		=> 'Якщо виберіть Ні, сторінка показуватиметься лише зареєстрованим користувачам',
	'ACP_PAGES_FORM_VIEW_PAGE'			=> 'Посилання на сторінку',
	'ACP_PAGES_TITLE_SWITCH'			=> 'Показувати заголовок сторінки першим',
	'ACP_PAGES_TITLE_SWITCH_EXPLAIN'	=> 'За замовчуванням браузери показують заголовок цієї сторінки після назви сайту <samp style="white-space: nowrap">«Назва сайту - Заголовок сторінки»</samp>. Якщо цей параметр увімкнено, заголовок сторінки буде показаний перед назвою сайту <samp style="white-space: nowrap">«Заголовок сторінки - Назва сайту»</samp>.',
	'PARSE_HTML'						=> 'Обробляти HTML',

	// Page link location names
	'NAV_BAR_LINKS_BEFORE'				=> 'Верхнє меню перед Посиланнями',
	'NAV_BAR_LINKS_AFTER'				=> 'Верхнє меню після Посиланнями',
	'NAV_BAR_CRUMBS_BEFORE'				=> 'Верхнє меню перед Breadcrumbs',
	'NAV_BAR_CRUMBS_AFTER'				=> 'Верхнє меню після Breadcrumbs',
	'FOOTER_TIMEZONE_BEFORE'			=> 'Футер, перед Часовим Поясом',
	'FOOTER_TIMEZONE_AFTER'				=> 'Футер, після Часового Пояса',
	'FOOTER_TEAMS_BEFORE'				=> 'Футер, перед посиланням Наша Команда',
	'FOOTER_TEAMS_AFTER'				=> 'Футер, після посилання Наша Команда',
	'QUICK_LINK_MENU_BEFORE'			=> 'Посилання у верхньому меню',
	'QUICK_LINK_MENU_AFTER'				=> 'Посилання в нижньому меню',
));
