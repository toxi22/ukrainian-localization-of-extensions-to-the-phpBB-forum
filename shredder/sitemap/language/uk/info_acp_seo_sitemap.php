<?php

/**
*
* info_acp_seo_sitemap [Russian]
*
* @package phpBB3 SEO Sitemap
* @copyright (c) 2014 www.phpbb-work.ru
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'SEOMAP'						=> 'SEO Мапа сайту',
	'SEOMAP_VERSION'				=> 'Версія розширення: %s. Нові версії та підтримку можна знайти <a style="font-weight: bold;" href="https://www.phpbb-work.ru/sitemap-extension-t76.html" onclick="window.open(this.href);return false;">на сторінці розширення, на сайті автора</a>.',
	'SEOMAP_EXPLAIN'				=> 'Зверніть увагу, що застосування необов\'язкових опцій priority (пріоритет) та changefreq (частота оновлення) може дати деякий позитивний результат, але рекомендується використовувати їх разом і тільки після аналізу того, які сторінки повинні вважатися більш важливими порівняно з іншими, перш ніж приймати будь-які рішення. Якщо ви не знаєте або не впевнені, краще відключіть ці опції. Докладніше про priority та changefreq читайте <a href="http://www.sitemaps.org/ru/protocol.html#xmlTagDefinitions" onclick="window.open(this.href);return false;">здесь</a>.<br />Для відключення пріоритету введіть 0.',
	'SEOMAP_SETTINGS'				=> 'Налаштування SEO Sitemap',
	'SEOMAP_SETTINGS_UPDATED'		=> '<strong>Змінено налаштування SEO Sitemap</strong>',
	'SEOMAP_SAVED'					=> 'Налаштування SEO Sitemap успішно змінені.',
	'SEOMAP_EXCLUDED'				=> 'Виключені форуми',
	'SEOMAP_EXCLUDED_EXPLAIN'		=> 'Обрані тут форуми та теми не будуть внесені в мапу сайту для роботів.<br /><strong>Увага:</strong> Категорії та форуми без тем, виключені з мапи сайту за замовчуванням.',
	'SEOMAP_CACHE_TIME'				=> 'Час зберігання в кеші',
	'SEOMAP_CACHE_TIME_EXPLAIN'		=> 'Для зменшення навантаження на сервер, створена мапа сайту на деякий час кешується. Після цього часу її буде створено заново. Вкажіть час у годинах, на який час мапа буде збережена в кеші або введіть 0, щоб вимкнути кешування.',
	'SEOMAP_URL'					=> 'Посилання на мапу: <a href="%s" onclick="window.open(this.href);return false;">%s</a>',
	'SEOMAP_URL_COUNT'				=> 'Загальна кількість URL у мапі: %s',
	'SEOMAP_URL_LIMIT'				=> 'Ліміт URL',
	'SEOMAP_URL_LIMIT_EXPLAIN'		=> 'Максимальне число URL в одному файлу мапи, не більше 50000 за стандартом sitemap. Поставте менше, якщо маєте проблеми з перевищенням лімітів. Якщо кількість URL у мапі сайту перевищить задане число, вона буде автоматично розбита на кілька файлів.',
	'SEOMAP_BATCH_SIZE'				=> 'Переважний розмір пакету обробки',
	'SEOMAP_BATCH_SIZE_EXPLAIN'		=> 'Зменшіть розмір пакета обробки, якщо виникають помилки нестачі пам\'яті PHP під час створення мапи. Зверніть увагу, що час створення мапи буде значно зростати при кожному зменшенні розміру пакета обробки.',
	'SEOMAP_PRIORITY_0'				=> 'Пріоритет для звичайних тем',
	'SEOMAP_PRIORITY_1'				=> 'Пріоритет для прикріплених тем',
	'SEOMAP_PRIORITY_2'				=> 'Пріоритет для оголошень',
	'SEOMAP_PRIORITY_3'				=> 'Пріоритет для "важливих" тем',
	'SEOMAP_PRIORITY_4'				=> 'Пріоритет для тем-статей',
	'SEOMAP_PRIORITY_F'				=> 'Пріоритет для форумів',
	'SEOMAP_FREQ_0'					=> 'Частота оновлення звичайних тем',
	'SEOMAP_FREQ_1'					=> 'Частота оновлення прикріплених тем',
	'SEOMAP_FREQ_2'					=> 'Частота оновлення оголошень',
	'SEOMAP_FREQ_3'					=> 'Частота оновлення "важливих" тем',
	'SEOMAP_FREQ_4'					=> 'Частота оновлення тем-статей',
	'SEOMAP_FREQ_F'					=> 'Частота оновлення форумів',
	'SEOMAP_FREQ_NEVER'				=> 'Ніколи',
	'SEOMAP_FREQ_YEARLY'			=> 'Щорічно',
	'SEOMAP_FREQ_MONTHLY'			=> 'Щомісячно',
	'SEOMAP_FREQ_WEEKLY'			=> 'Тижня',
	'SEOMAP_FREQ_DAILY'				=> 'Щодня',
	'SEOMAP_FREQ_HOURLY'			=> 'Щогодини',
	'SEOMAP_FREQ_ALWAYS'			=> 'Постійно',
	'SEOMAP_NO_DATA'				=> 'Немає даних для внесення до мапи. Перевірте наявність та доступність хоча б однієї теми для облікового запису гостя.',
	'SEOMAP_NO_FILE'				=> 'Неможливо відкрити файл:<br /><strong>%s</strong>',
	'SEOMAP_CANT_WRITE'				=> 'Папка <strong>%s</strong> не існує або недоступна для запису. Виправте це вручну, використовуючи FTP-клієнт.',
	'SEOMAP_COPYRIGHT'				=> 'Моди та розширення phpBB',

// Sync section
	'SEOMAP_SYNC_COMPLETE' 			=> 'Синхронізація дат успішно завершена.<br /><br /><a style="font-weight: bold;" href="%s">&laquo; Повернутись до налаштувань</a>',
	'SEOMAP_SYNC_PROCESS'			=> '<strong>Синхронізується. Не закривайте сторінку та не переривайте скрипт до завершення його роботи.</strong><br /><br />Завершено обробку <strong>%1$s%%</strong>. Оброблено <strong>%2$s</strong> повідомлень. Всього повідомлень: <strong>%3$s</strong>.',
	'SEOMAP_SYNC_REQ' 				=> 'Ви повинні синхронізувати дати зміни повідомлень перед початком використання мапи. Це необхідно для створення часу останньої модифікації сторінок у мапі. <a style="font-weight: bold;" href="%s">Перейти до синхронізації</a>.',
));
