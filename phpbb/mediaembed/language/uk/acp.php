<?php
/**
 *
 * phpBB Media Embed PlugIn extension for the phpBB Forum Software package.
 * Ukraine translation by toxi
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
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

$lang = array_merge($lang, [
	// Settings
	'ACP_MEDIA_SETTINGS'				=> 'Налаштування Media Embed',
	'ACP_MEDIA_SETTINGS_EXPLAIN'		=> 'Тут можна налаштувати параметри для Media Embed.',
	'ACP_MEDIA_BBCODE_LEGEND'			=> 'BBCode',
	'ACP_MEDIA_DISPLAY_BBCODE'			=> 'Показувати <samp>[MEDIA]</samp> бб-код на сторінці розміщення повідомлень',
	'ACP_MEDIA_DISPLAY_BBCODE_EXPLAIN'	=> 'Якщо це заборонено, кнопка бб-коду не відображається, але користувачі можуть використовувати <samp>[media]</samp> бб-код у своїх повідомленнях.',
	'ACP_MEDIA_OPTIONS_LEGEND'			=> 'Опції',
	'ACP_MEDIA_ALLOW_SIG'				=> 'Дозволити у підписах користувачів',
	'ACP_MEDIA_ALLOW_SIG_EXPLAIN'		=> 'Дозволити у підписах користувачів відображати Media Embed.',
	'ACP_MEDIA_CACHE_LEGEND'			=> 'Кешування контенту',
	'ACP_MEDIA_ENABLE_CACHE'			=> 'Увімкнути кеш Media Embed',
	'ACP_MEDIA_ENABLE_CACHE_EXPLAIN'	=> 'Іноді посилання на медіа контент не містять усю необхідну інформацію для їх вбудовування в повідомлення. У цьому випадку додаткова інформація зі сторінки, на якій знаходиться цей контент, має бути завантажена, перевірена та оброблена. Цей процес здійснюється лише один раз для кожного такого посилання при обробці повідомлення, але якщо повідомлення обробляється кілька разів (наприклад, при його редагуванні), локальна копія зовнішніх даних може бути збережена в кеші для збільшення продуктивності.',
	'ACP_MEDIA_PARSE_URLS'				=> 'Перетворювати посилання',
	'ACP_MEDIA_PARSE_URLS_EXPLAIN'		=> 'Якщо увімкнено, прості посилання (не обрамлені тегами <samp>[media]</samp> або <samp>[url]</samp>) будуть перетворюватися на вбудований медіа контент. Зауважте, що ця установка поширюється лише на нові повідомлення, оскільки старі повідомлення вже збережені в базі даних.',
	'ACP_MEDIA_WIDTH_LEGEND'			=> 'Розмір контенту',
	'ACP_MEDIA_FULL_WIDTH'				=> 'Включити контент повної ширини',
	'ACP_MEDIA_FULL_WIDTH_EXPLAIN'		=> 'Увімкніть це, щоб розширити більшу частину області вмісту публікації, зберігаючи при цьому вихідне співвідношення сторін.',
	'ACP_MEDIA_MAX_WIDTH'				=> 'Користувацький контент максимальної ширини',
	'ACP_MEDIA_MAX_WIDTH_EXPLAIN'		=> 'Використовуйте це поле, щоб визначити значення максимальної ширини для окремих сайтів. Це перевизначить розмір за промовчанням та параметр повної ширини, вказаний вище. Введіть кожен сайт з нового рядка, використовуючи формат <samp class="error">siteId:width</samp> з <samp class="error">px</samp> або <samp class="error">%</samp>. Наприклад:<br><br><samp class="error">youtube:80%</samp><br><samp class="error">funnyordie:480px</samp><br><br><i><strong class="error">Порада:</strong> Наведіть вказівник миші на сайт на сторінці “Керування сайтами”, щоб відобразити ідентифікатор сайту, який можна використовувати тут.</i>',
	'ACP_MEDIA_PURGE_CACHE'				=> 'Очистити кеш Media Embed',
	'ACP_MEDIA_PURGE_CACHE_EXPLAIN'		=> 'Кеш Media Embed автоматично очищається один раз на день (якщо кеш включений вище). Тут можна очистити кеш вручну.',
	'ACP_MEDIA_SITE_TITLE'				=> 'Id сайту: %s',
	'ACP_MEDIA_SITE_DISABLED'			=> 'Цей сайт не підключений до існуючого бб-коду: [%s]',
	'ACP_MEDIA_ERROR_MSG'				=> 'Було виявлено наступні помилки:<br><br>%s',
	'ACP_MEDIA_INVALID_SITE'			=> '%1$s:%2$s :: “%1$s” не є допустимим ідентифікатором сайту',
	'ACP_MEDIA_INVALID_WIDTH'			=> '%1$s:%2$s :: “%2$s” не є допустимою шириною в “px” або “%%”',

	// Manage sites
	'ACP_MEDIA_MANAGE'					=> 'Керування сайтами для Media Embed',
	'ACP_MEDIA_MANAGE_EXPLAIN'			=> 'Тут ви можете керувати сайтами, які ви хочете підключити до Media Embed.',
	'ACP_MEDIA_SITES_ERROR'				=> 'Немає сайтів для відображення.',
	'ACP_MEDIA_SITES_MISSING'			=> 'Наступні сайти більше не підтримуються та/або не працюють. Будь ласка, збережіть цю сторінку повторно, щоб видалити їх.',
]);
