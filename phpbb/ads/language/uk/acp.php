<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package (russian).
 *
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
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
	// Manage ads
	'AD_SETTINGS'				=> 'Налаштування',
	'ACTIVE_ADS'				=> 'Активовані блоки',
	'EXPIRED_ADS'				=> 'Деактивовані блоки',
	'STATUS'					=> 'Статус',
	'AD_NAME'					=> 'Назва',
	'AD_NAME_EXPLAIN'			=> 'Назва потрібна тільки для полегшення ідентифікації цього рекламного блоку.',
	'AD_ENABLED'				=> 'Увімкнено',
	'AD_ENABLED_EXPLAIN'		=> 'Якщо вимкнено, цей блок не буде показаний.',
	'AD_NOTE'					=> 'Зауваження',
	'AD_NOTE_EXPLAIN'			=> 'Введіть будь-який текст. Цей текст не буде показаний ніде, крім ACP і є необов\'язковим параметром.',
	'AD_CODE'					=> 'Код',
	'AD_CODE_EXPLAIN'			=> 'Введіть код блоку. У коді має використовуватися лише HTML-розмітка, BBCode не допускаються.',
	'ANALYSE_AD_CODE'			=> 'Аналізувати код',
	'EVERYTHING_OK'				=> 'Код відповідає вимогам.',
	'AD_BANNER'					=> 'Банер',
	'BANNER'					=> 'Завантажити банер',
	'BANNER_EXPLAIN'			=> 'Ви можете використовувати зображення у форматах JPG, GIF або PNG. Зображення зберігаються у стандартній папці phpBB <samp>images</samp> і HTML-тег IMG буде автоматично доданий до коду блоку.',
	'BANNER_UPLOAD'				=> 'Завантажити баннер',
	'AD_PLACEMENT'				=> 'Розташування',
	'AD_LOCATIONS'				=> 'Месце розташування блоку',
	'AD_LOCATIONS_EXPLAIN'		=> 'Виберіть місце на сторінці, де ви бажаєте показувати цей рекламний блок. Для отримання підказки, наведіть курсор на один із елементів списку. Якщо кілька блоків використовують те саме місце, то для відображення в цьому місці будь-який з блоків буде обраний випадковим чином. Для вибору більш ніж одного місця розташування використовуйте комбінацію CTRL+CLICK (або CMD+CLICK для Mac).',
	'AD_LOCATIONS_VISUAL_DEMO'	=> 'Показати візуально місця блоків',
	'AD_PRIORITY'				=> 'Пріоритет',
	'AD_PRIORITY_EXPLAIN'		=> 'Встановіть значення від 1 до 10. Блок з вищим пріоритетом буде показуватися частіше ніж другий, якщо для них призначено те саме місце показу, що і для цього блоку.',
	'AD_CONTENT_ONLY'			=> 'Показати тільки на сторінках контенту',
	'AD_CONTENT_ONLY_EXPLAIN'	=> 'Блок відображатиметься лише на сторінках, які містять контент. Не буде відображатися на таких сторінках, як UCP, логін, реєстрація тощо. Деякі рекламні платформи (наприклад, Google AdSense) вимагають цього.',
	'AD_OPTIONS'				=> 'додаткові налаштування',
	'AD_OWNER'					=> 'Власник',
	'AD_OWNER_EXPLAIN'			=> 'Призначення власника реклами надасть одному з користувачів вашої конференції право на перегляд статистики (кількість переглядів та кількість кліків) у його особистому розділі. Залишіть це поле порожнім, якщо не бажаєте призначати власників.',
	'AD_VIEWS'					=> 'Перегляди',
	'AD_VIEWS_LIMIT'			=> 'Ліміт показів',
	'AD_VIEWS_LIMIT_EXPLAIN'	=> 'Встановіть число показів блоку, після якого цей блок більше не відображатиметься. Встановіть 0, щоб зняти це обмеження.',
	'AD_CLICKS'					=> 'Кліки',
	'AD_CLICKS_LIMIT'			=> 'Ліміт кліків',
	'AD_CLICKS_LIMIT_EXPLAIN'	=> 'Встановіть кількість кліків, після чого цей блок більше не відображатиметься. Встановіть 0, щоб зняти це обмеження.',
	'AD_START_DATE'				=> 'Початок показів',
	'AD_START_DATE_EXPLAIN'		=> 'Встановіть дату запуску та увімкнення реклами. Залишіть це поле порожнім, якщо ви не бажаєте, щоб оголошення запускалося автоматично в майбутньому. Для встановлення дати, використовуйте наступний формат дати (рік місяць день) <samp>РРРР-ММ-ДД</samp>.',
	'AD_END_DATE'				=> 'Закінчення показів',
	'AD_END_DATE_EXPLAIN'		=> 'Встановіть дату завершення блоку. Залишіть це поле порожнім для зняття обмеження. Для встановлення дати використовуйте наступний формат дати (рік місяць день) <samp>РРРР-ММ-ДД</samp>.',
	'AD_CENTERING'				=> 'Вирівняти по центру',
	'AD_CENTERING_EXPLAIN'		=> 'Вмтановіть «Так», щоб рекламний блок вирівнювався центром. Якщо будуть небажані результати, використовуйте CSS безпосередньо в коді вашого оголошення або зверніться до гінеколога.',

	'AD_PREVIEW'				=> 'Перегляд',
	'AD_ENABLE_TITLE'			=> array( // Plural rule doesn't apply here! Just translate the values.
		0 => 'Клікніть для увімкнення',
		1 => 'Клікніть для вимкнення',
	),
	'AD_EXPIRED_EXPLAIN'		=> 'Час показу цієї реклами минув, і вона була відключена.',
	'ACP_ADS_EMPTY'				=> 'Нема реклами для показу. Додайте рекламний блок за допомогою кнопки нижче.',
	'ACP_ADS_ADD'				=> 'Додати новий блок',
	'ACP_ADS_EDIT'				=> 'Редагувати рекламний блок',

	'AD_NAME_REQUIRED'			=> 'Назва обов\'язкова.',
	'AD_NAME_TOO_LONG'			=> 'Перевищено обмеження %d символів довжини назви блоку.',
	'AD_CODE_ILLEGAL_CHARS'		=> 'Код містить такі символи, що не підтримуються: %s',
	'AD_START_DATE_INVALID'		=> 'Невірна дата початку показу чи дата вже настала.',
	'AD_END_DATE_INVALID'		=> 'Невірна дата закінчення показу чи дата вже настала.',
	'AD_PRIORITY_INVALID'		=> 'Недопустиме значення. Введіть число в діапазоні від 1 до 10.',
	'AD_VIEWS_LIMIT_INVALID'	=> 'Недопустиме значення. Будь ласка, введіть не від\'ємне число.',
	'AD_CLICKS_LIMIT_INVALID'	=> 'Недопустиме значення. Будь ласка, введіть не від\'ємне число.',
	'AD_OWNER_INVALID'			=> 'Запитуваного користувача немає. Введіть ім\'я існуючого користувача або натисніть [Знайти користувача].',
	'NO_FILE_SELECTED'			=> 'Файл не обрано.',
	'CANNOT_CREATE_DIRECTORY'	=> 'Неможливо створити папку <samp>phpbb_ads</samp>. Перевірте папку <samp>/images</samp> доступність для запису (права chmod).',
	'FILE_MOVE_UNSUCCESSFUL'	=> 'Неможливо завантажити файл у папку <samp>images/phpbb_ads</samp>.',
	'END_DATE_TOO_SOON'			=> 'Дата закінчення раніше, ніж дата початку.',
	'ACP_AD_DOES_NOT_EXIST'		=> 'Такого рекламного блоку немає.',
	'ACP_AD_ADD_SUCCESS'		=> 'Блок успішно доданий.',
	'ACP_AD_EDIT_SUCCESS'		=> 'Блок успішно змінено.',
	'ACP_AD_DELETE_SUCCESS'		=> 'Блок успішно видалено.',
	'ACP_AD_DELETE_ERRORED'		=> 'При видаленні блоку виникла помилка.',
	'ACP_AD_ENABLE_SUCCESS'		=> 'Блок успішно увімкнено.',
	'ACP_AD_ENABLE_ERRORED'		=> 'Виникла помилка при включенні блоку.',
	'ACP_AD_DISABLE_SUCCESS'	=> 'Блок успішно вимкнено.',
	'ACP_AD_DISABLE_ERRORED'	=> 'Виникла помилка при вимкненні блоку.',

	// Analyser tests
	'UNSECURE_CONNECTION'	=> '<strong>Змішаний вміст</strong><br />Ваша конференція використовує безпечний протокол підключення HTTPS, проте рекламний код намагається завантажити вміст із небезпечного HTTP-з\'єднання. Це може змусити браузери генерувати попередження «Змішаний вміст», щоб користувачі знали, що сторінка може містити небезпечні ресурси.',
	'SCRIPT_WITHOUT_ASYNC'	=> '<strong>Використання технології AJAX</strong><br />Цей код завантажує JavaScript не асинхронним способом. Це означає, що заблокує завантаження будь-якого іншого Javascript до завершення завантаження, що може вплинути на продуктивність завантаження сторінки. Для підвищення швидкості завантаження сторінки використовуйте атрибут <samp>async</samp>.',
	'ALERT_USAGE'			=> '<strong>Використання функції <samp>alert()</samp></strong><br />У вашому коді використовується функція <samp>alert()</samp>, що не є гарною практикою і може вводити користувачів в оману. У цьому випадку деякі браузери також можуть блокувати завантаження сторінки та відображати додаткові попередження.',
	'LOCATION_CHANGE'		=> '<strong>Перенаправлення</strong><br />Код може перенаправити користувача на іншу сторінку чи сайт. Іноді перенаправлення можуть надсилати користувачів у ненавмисні, часто зловмисні адреси. Перевірте безпеку адреси призначення перенаправлення.',

	// Template location categories
	'CAT_TOP_OF_PAGE'		=> 'Верх сторінки',
	'CAT_BOTTOM_OF_PAGE'	=> 'НИз сторінки',
	'CAT_IN_POSTS'			=> 'У повідомленні',
	'CAT_OTHER'				=> 'Інше',
	'CAT_INTERACTIVE'		=> 'Інтерактив',
	'CAT_SPECIAL'			=> 'Спеціальне',

	// Settings
	'ADBLOCKER_LEGEND'				=> 'Блокувальники реклами',
	'ADBLOCKER_MESSAGE'				=> 'Повідомлення, що виводиться при виявленні блокувальника реклами',
	'ADBLOCKER_MESSAGE_EXPLAIN'		=> 'Відображати повідомлення відвідувачам, у яких встановлено блокувальник реклами, з порадою відключити його на цьому сайті.',
	'CLICKS_VIEWS_LEGEND'			=> 'Статистика',
	'ENABLE_VIEWS'					=> 'Лічильник переглядів',
	'ENABLE_VIEWS_EXPLAIN'			=> 'Включення цієї опції дозволить підрахувати скільки разів показувався кожен рекламний блок. Зверніть увагу, що в цьому випадку зросте навантаження на сервер, тому якщо вам не потрібна ця функція, відключіть її.',
	'ENABLE_CLICKS'					=> 'Лічильник кліків',
	'ENABLE_CLICKS_EXPLAIN'			=> 'Увімкнення цієї опції дозволить підрахувати, скільки кліків припало на кожен рекламний блок. Зверніть увагу, що в цьому випадку зросте навантаження на сервер, тому якщо вам не потрібна ця функція, відключіть її.',
	'HIDE_GROUPS'					=> 'Приховати блок для груп',
	'HIDE_GROUPS_EXPLAIN'			=> 'Учасники вибраних груп не бачитимуть блоки. Використовуйте комбінацію CTRL+CLICK (або CMD+CLICK на Mac) для одночасного вибору кількох груп.',

	'ACP_AD_SETTINGS_SAVED'			=> 'Налаштування успішно збережено.',
));
