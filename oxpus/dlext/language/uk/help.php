<?PHP

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2021 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/*
* [ Ukrainian ] language file for Download Extension 
* @copyright Roman Pavlovsky: https://github.com/toxi22/ukrainian-localization-of-extensions-to-the-phpBB-forum
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
	$lang = [];
}

$lang = array_merge($lang, [
	'HELP_TITLE' => 'Онлайн-довідка для цього розширення',

	'DL_NO_HELP_AVAILABLE' => 'Для цього параметра немає довідки',

	'HELP_DL_ACTIVE'			=> 'Дозволяє та забороняє можливість завантаження файлів відповідно до вказаних параметрів.',
	'HELP_DL_ANTISPAM'			=> 'Ця опція блокує файли, для яких у користувача має бути необхідна кількість трафіку та необхідна кількість повідомлень, і користувач досяг цієї кількості повідомлень за останні години.<br /><br />Наприклад:<br />Налаштування містить 25 постів за 24 години.<br />На підставі цього параметра, файли будуть недоступні для користувача, якщо він/вона опублікує 25 і більше нових повідомлень за останні 24 години.<br />Цей параметр призначений для запобігання спаму для файлів, особливо для нових користувачів, до того, як член команди дізнається про це і вживе заходів.<br />Файли, як і раніше, будуть відображатися як доступні, щоб спокусити користувача. Користувач отримає лише повідомлення про відсутність дозволів.<br /><br />Щоб вимкнути цю перевірку, просто встановіть одне або обидва значення на 0.',
	'HELP_DL_APPROVE'			=> 'Схвалювати файли відразу після відправки форми запиту.<br />В іншому випадку, файл буде прихований для користувачів, поки він не буде схвалений модератором або адміністратором файлів.',
	'HELP_DL_APPROVE_COMMENTS'	=> 'Якщо ви вимкнете цю опцію, кожен новий коментар повинен бути схвалений модератором або адміністратором файлів, перш ніж інші користувачі зможуть його побачити.',

	'HELP_DL_BUG_TRACKER_CAT'	=> 'Включає засіб відстеження помилок для файлів у цій категорії.<br />Помилки можуть публікувати та переглядати кожен зареєстрований користувач для відповідних файлів та з інших категорій, якщо там також увімкнена система відстеження помилок.<br />Тільки адміністратор і модератори форуму можуть керувати системою відстеження помилок.<br />Для кожної зміни в повідомленні про помилку автор отримає повідомлення електронною поштою, і член команди, який працює над цією помилкою, також буде проінформований.',

	'HELP_DL_CAT_DESCRIPTION'	=> 'Короткий опис цієї категорії.<br />BBCodes доступні лише в тому випадку, якщо опис буде постійно відображатися на головній сторінці.<br />Цей опис буде відображатися на головній сторінці файлів і в підкатегоріях.',
	'HELP_DL_CAT_EDIT_LINK'		=> 'Визначає, хто може бачити та використовувати посилання для редагування файлу з представлення категорії, за умови, що цей параметр не вимкнено.<br />\'Власні завантаження\' активні лише в тому випадку, якщо також активовано опцію редагування власних завантажень.',
	'HELP_DL_CAT_ICON'			=> 'конка категорії має бути вже завантажена на форум, наприклад. в папку /images/dl_icons/ (ця папка повинна бути створена до того, як у неї можна буде завантажувати значки).<br />Введіть відносну URL-адресу від кореня форуму, наприклад, images/dl_icon.gif.<br /><br />Будь ласка, використовуйте лише значки, які можуть відображатися у веб-браузері.<br />Рекомендовані файли JPG, GIF та PNG.<br />Зверніть увагу на розмір значків, щоб не зіпсувати головну сторінку списку файлів, оскільки розмір значків не буде змінено перед використанням.',
	'HELP_DL_CAT_NAME'			=> 'Ця назва категорії, яка буде відображатися в кожному переході.<br />Не використовуйте спеціальні символи, щоб уникнути записів, які важко читати в полі переходу.',
	'HELP_DL_CAT_PARENT'		=> 'Верхній рівень або будь-яка інша категорія, якій може бути призначена ця категорія.<br />Ви можете створювати ієрархічні структури для своїх файлів за допомогою цього динамічного списку, що розкривається.',
	'HELP_DL_CAT_PATH'			=> 'Введіть існуючий шлях до ваших файлів тут.<br />Це значення має бути ім\'ям підпапки в основній папці (наприклад, .downloads/), які ви визначили в основній конфігурації.<br />Введіть ім\'я папки з косою рисою в кінці.<br />Як приклад для існуючої папки ´downloads/mods/´, введіть ´mods/´, як шлях до категорії.<br />Після відправки цієї форми папка буде перевірена.<br />Переконайтеся, що вказана підпапка дійсно існує!<br />Якщо папка є вкладеною, то введіть тут повну ієрархію.<br />Наприклад, ´downloads/mods/misc/´, необхідно ввести шлях до категорії ´mods/misc/´.<br />Переконайтеся, що кожна вкладена папка має доступ CHMOD 777, і майте на увазі, що в Unix/Linux імена папок чутливі до регістру.',
	'HELP_DL_CAT_RULES'			=> 'Ці правила будуть відображатися над підкатегоріями та файлами під час перегляду категорії.',
	'HELP_DL_CAT_TRAFFIC'		=> 'Введіть максимальний місячний трафік для цієї категорії.<br />Цей трафік не збільшує загальний трафік!<br />Введіть 0 тут, щоб вимкнути обмеження.',
	'HELP_DL_CHOOSE_CATEGORY'	=> 'Виберіть категорію, в яку будуть поміщені файли.<br />Файл повинен бути вже збережений в папці, яку ви вказали в управлінні категоріями, перш ніж ви зможете зберегти це завантаження.<br />В іншому випадку ви отримайте повідомлення про помилку.',
	'HELP_DL_COMMENTS'			=> 'Увімкнути систему коментарів для цієї категорії.<br />Користувачі, включені до списків, можуть переглядати та/або залишати коментарі в цій категорії.<br />Адміністратори та модератори файлів можуть редагувати та видаляти всі коментарі, автори можуть керувати своїми коментарями.',
	'HELP_DL_COPY_PERMISSIONS'	=> 'Копіює дозволи з обраної категорії.<br />Якщо ви вибрали батьківську категорію, ця категорія отримає дозволи від батьківської категорії, до якої вона буде приєднана.<br />Якщо батьківською категорією є головна сторінка файлів (верхній рівень), ця категорія не отримує жодних дозволів. У цьому випадку виберіть іншу категорію або встановіть необхідні дозволи для цієї категорії за допомогою модуля дозволів.',

	'HELP_DL_DELAY_AUTO_TRAFFIC'	=> 'Введіть кількість днів, через яку новий користувач отримає перший автотрафік.<br />Затримка починається з дати реєстрації.<br />Введіть 0, щоб вимкнути цю затримку.',
	'HELP_DL_DELAY_POST_TRAFFIC'	=> 'Введіть кількість днів, через яку новий користувач отримає перший трафік для постів.<br />Затримка починається з дати реєстрації.<br />Введіть 0, щоб вимкнути цю затримку.',
	'HELP_DL_DISABLE_NOTIFY'		=> 'За допомогою цієї опції ви можете включити або повністю відключити повідомлення про нові або відредаговані файли.<br />Якщо ця функція включена, її можна окремо відключити при додаванні або редагуванні файлу.<br />Користувачі отримають повідомлення лише в тому випадку, якщо вони активували повідомлення про нові або змінені файли у своєму профілі.',
	'HELP_DL_DISABLE_POPUP_NOTIFY'	=> 'Якщо ця опція увімкнена, ведення журналу позначки часу для редагування файлу вимкнено.',
	'HELP_DL_DROP_TRAFFIC_POSTDEL'	=> 'Якщо включено, трафік автора буде зменшений на трафік, відданий для публікації (при видаленні теми буде застосовуватись тільки до автора теми!).<br />Майте на увазі, що початкова кількість може відрізнятися від поточної кількості, та/або знижена кількість трафіку цього автора може відрізнятись від того, що було отримано спочатку',

	'HELP_DL_EDIT_OWN_DOWNLOADS'	=> 'Якщо ви увімкнете цю опцію, кожен користувач зможе редагувати свої завантажені файли, не будучи адміністратором або модератором файлів.',
	'HELP_DL_EDIT_TIME'				=> 'Введіть тут кількість днів, протягом яких відредагований файл буде відмічений, як відредагований.<br />Введіть 0, щоб вимкнути цю функцію.',
	'HELP_DL_ENABLE_INDEX_DESC'		=> 'Приховує опис завантажень у поданні категорій.<br />Якщо ця опція увімкнена, довжина відображуваного опису може бути встановлена за допомогою наступної опції.',
	'HELP_DL_ENABLE_JUMPBOX'		=> 'Цей параметр показує або приховує поле переходу в нижньому колонтитулі списку файлів.<br />Вимкнення поля переходу підвищить продуктивність роботи цього розширення.',
	'HELP_DL_ENABLE_POST_TRAFFIC'	=> 'Наступні два параметри визначають обсяг трафіку, який користувач отримає за створення нових тем, відповіді або цитування.',
	'HELP_DL_ENABLE_RATE'			=> 'За допомогою цієї опції ви можете увімкнути/вимкнути рейтингову систему.<br />Існуючі рейтингові бали не будуть видалені при відключенні рейтингової системи, натомість вони будуть збережені і негайно показані знову, якщо ви знову увімкнете рейтингову систему.',
	'HELP_DL_ENABLE_SEARCH_DESC'	=> 'Приховує опис файлів у результатах пошуку. <br />Якщо цей параметр вимкнено, довжина відображуваного опису може бути встановлена за допомогою наступного параметра.',
	'HELP_DL_ENABLE_TOPIC'			=> 'Дозволяє створити тему в наступному форумі та з заданим текстом для кожного нового файлу, який буде завантажено або додано через панель адміністратора. Якщо файл повинен бути схвалений перед відображенням, тема буде створена та надіслана на модерацію.',
	'HELP_DL_EXT_NEW_WINDOW'		=> 'Відкриття зовнішніх файлів у новому вікні браузера або у поточному вікні.',
	'HELP_DL_EXTERN'				=> 'Активуйте цю функцію, щоб дозволити введення URL-адреси за межами вашого власного сервера в поле вище (наприклад, http://www.example.com/media.mp3).<br />У цьому випадку налаштування «безкоштовно» стає застарілим.<br />За бажанням ви можете ввести розмір файлу для зовнішнього завантаження. Цей розмір відображатиметься на всіх сторінках і може бути змінено.<br />Майте на увазі, що розмір файлу відображатиметься, якщо завантаження не позначене як зовнішнє. У цьому випадку зміни цього значення будуть проігноровані та замінені реальним розміром файлу завантаження.',
	'HELP_DL_EXTERN_UP'				=> 'Активуйте цю функцію, щоб дозволити введення URL-адреси за межами вашого власного сервера в поле праворуч (наприклад, http://www.example.com/media.mp3).<br />У цьому випадку налаштування «безкоштовно» стає застарілою.',

	'HELP_DL_FILE_DESCRIPTION'	=> 'Короткий опис цього завантаження.<br />Це також буде відображатися в категорії завантаження.<br />BBCodes вимкнено для цього тексту.<br />Будь ласка, введіть тільки короткий текст, щоб зменшити навантаження на сторінку при відкритті категорії.',
	'HELP_DL_FILE_EDIT_HINT'	=> 'Дозволяє пояснювальний текст при додаванні або редагуванні завантаження. Цей текст добре видно на початку форми.<br />BBCodes дозволено.',
	'HELP_DL_FILE_HASH_ALGO'	=> 'Визначає метод, який використовується для обчислення хеш-значення для кожного завантаження.<br />Хеш-значення буде розраховано для всіх файлів та всіх існуючих варіантів, але відображатиметься в деталях файлу тільки при включенні відповідних налаштувань.<br />Доступні методи - md5 і sha1, так як ці методи в більшості випадків встановлені на серверах за промовчанням.<br />TheeExtension автоматично розрахує хеш-значення при додаванні або редагуванні файлу. Також значення хеш-функції буде розраховане при відкритті докладного уявлення, якщо раніше значення хеш-функції не було розраховано та збережено. Це в основному призначено для оновленого розширення або якщо ви змінили метод хешування.<br /><br /><strong>Порада:</strong><br />Якщо змінити метод обчислення значення хеш-функції, всі існуючі значення хеш-функції будуть видалені, тому що вони не побудовані поточним вибраним методом!',
	'HELP_DL_FILES_EXTERN'		=> 'URL із зовнішнього файлу',
	'HELP_DL_FILES_INTERN'		=> 'Ім\'я файлу цього завантаження.<br />Введіть це ім\'я без початкового шляху до файлу або косої риси.<br />Файл повинен існувати перед збереженням цього завантаження, інакше ви отримаєте повідомлення про помилку.<br />Зверніть увагу, що використання заборонених розширень файлів блокує збереження файлу!',

	'HELP_DL_GLOBAL_BOTS'		=> 'Ця опція дозволяє або забороняє доступ списку файлів для ботів.<br />Цей параметр не впливає на всі інші дозволи.',
	'HELP_DL_GLOBAL_GUESTS'		=> 'Ця опція дозволяє або забороняє доступ до списку файлів для гостей.<br />Цей параметр не впливає на всі інші дозволи.',
	'HELP_DL_GUEST_STATS_SHOW'	=> 'Ця опція буде включати або виключати статистичні дані про гостей зі статистики загальнодоступних категорій.<br />Скрипт, як і раніше, буде збирати всі дані.<br />Інструмент статистики ACP завжди відображає повні статистичні дані.',

	'HELP_DL_HACK_AUTOR'			=> 'Автор цього завантажуваного файлу.<br />Залиште порожнім, щоб приховати це значення у відомостях про завантаження та загальний вигляд.',
	'HELP_DL_HACK_AUTOR_EMAIL'		=> 'Електронна адреса автора.<br />Залишіть порожньою, щоб приховати це значення у відомостях про завантаження та загальний вигляд.',
	'HELP_DL_HACK_AUTOR_WEBSITE'	=> 'Сайт автора.<br />Ця URL-адреса повинна бути веб-сайтом автора, а не URL-адресою для завантаження (не завжди однаково).<br />Будь ласка, не вводьте посилання на веб-сайти з пропрієтарним або сумнівним змістом.',
	'HELP_DL_HACK_DL_URL'			=> 'URL-адреса альтернативного завантаження для цього файлу.<br />Це може бути сайт автора або інший альтернативний сайт.<br />Будь ласка, введіть посилання для прямого завантаження тільки в тому випадку, якщо автор дозволив це зробити.',
	'HELP_DL_HACK_VERSION'			=> 'Версія завантажуваного релізу.<br />Це відображатиметься лише на сторінці файлів.<br />Це значення недоступне для пошуку.',
	'HELP_DL_HACKLIST'				=> 'Вибравши «Так», ви можете додати це завантаження до списку злому (список злому має бути включений до основної конфігурації).<br />Вибір «Ні», запобігає додаванню завантаження до списку злому, а «Показ додаткової інформації» відображатиме цей блок лише в деталях завантаження.',
	'HELP_DL_HOTLINK_ACTION'		=> 'Тут ви можете вибрати, як повинен реагувати скрипт завантаження, якщо пряме посилання на завантаження було заблоковано (див. також останній варіант).<br />Він покаже повідомлення (знижує навантаження на сервер) або перенаправить на завантаження ( видає додатковий трафік).',

	'HELP_DL_ICON_FREE_FOR_REG'		=> 'Якщо ця опція включена, значок завантаження для гостей стає білим (безкоштовне завантаження також для зареєстрованих користувачів).<br />Якщо ви відключите цю опцію, гості побачать червоний значок замість білого.',
	'HELP_DL_INDEX_DESC_HIDE'		=> 'Приховує описи категорій у списку завантажень та підкатегорій.<br />Потім описи будуть зникати при наведенні покажчика миші на рядок категорії.',
	'HELP_DL_IS_FREE'				=> 'Увімкніть цей параметр, якщо завантаження має бути нелімітованим для всіх і не повинно вважатися за трафіку.<br />Виберіть «Безкоштовно для зареєстрованих користувачів», щоб дозволити безкоштовне завантаження тільки для зареєстрованих користувачів.',

	'HELP_DL_KLICKS_RESET'			=> 'Ця опція скидає кількість переходів за поточний місяць до нуля.<br />Це корисно, якщо ви хочете контролювати кількість переходів після оновлення версії файлу.',

	'HELP_DL_LATEST_COMMENTS'		=> 'Ця опція відображає останні X коментарів у деталях завантаження. Введіть 0, щоб вимкнути блок.',
	'HELP_DL_LATEST_DOWNLOADS'		=> 'Визначає, чи деактивовано цей список, який показує всі завантаження (це відповідає загальному вигляду, відсортовані за віком) або останні додані або змінені файли.',
	'HELP_DL_LIMIT_DESC_ON_INDEX'	=> 'Обрізає описи завантаження в категоріях після введеної кількості символів.<br />Встановіть тут 0, щоб вимкнути цю функцію.',
	'HELP_DL_LIMIT_DESC_ON_SEARCH'	=> 'Обрізає опис завантаження в результатах пошуку після введеної кількості символів.<br />Встановіть тут 0, щоб вимкнути цю функцію.',
	'HELP_DL_LINKS_PER_PAGE'		=> 'Ця опція керує кількістю завантажень, що відображаються на сторінці кожної категорії, і статистикою ACP.<br />У списку хаків та оглядовому списку буде використовуватися налаштування дошки «тем на сторінці».',

	'HELP_DL_MOD_DESC'			=> 'Докладний опис введеного розширення.<br />Можливо використання BBCode та смайликів, також буде враховуватися переклад рядка.<br />Цей текст буде відображатися тільки в деталях завантаження.',
	'HELP_DL_MOD_DESC_ALLOW'	=> 'Включає блок інформації про розширення при додаванні або редагуванні завантаження.',
	'HELP_DL_MOD_LIST'			=> 'Активуйте відображення цього блоку в деталях завантаження.<br />Якщо вимкнено, весь блок не відображатиметься.',
	'HELP_DL_MOD_REQUIRE'		=> 'Оголошує, які інші розширення необхідні користувачеві для встановлення або використання цього завантаження.<br />Цей текст буде відображатися тільки в деталях завантаження.',
	'HELP_DL_MOD_TEST'			=> 'Вказує, на якій версії phpBB дане розширення було успішно протестовано.<br />Просто введіть номер релізу.<br />Скрипт відобразить це як «phpBB X», тому ви повинні ввести тут тільки «X».<br />Цей текст буде відображатися лише в деталях завантаження.',
	'HELP_DL_MOD_TODO'			=> 'Тут ви можете ввести такі кроки, які ви запланували для цього розширення, або ті, які в даний час перебувають у роботі.<br />Це створить список справ, який можна відкрити з нижнього колонтитула завантаження.<br />За допомогою цього тексту користувачі можуть бути проінформовані про останній статус цього розширення.<br />Перехід рядка буде враховуватися, але коди BBCode будуть недоступні.<br />Список справ, як і раніше, може бути заповнений, навіть якщо цей блок вимкнено.',
	'HELP_DL_MOD_WARNING'		=> 'Важлива порада про це розширення, яку необхідно враховувати при встановленні, використанні або взаємодії з іншими розширеннями.<br />Цей текст буде виділено у відформатованих деталях завантаження (за замовчуванням червоний).<br />Переклад рядка буде враховуватися.<br />BBCodes не доступні тут.',
	'HELP_DL_MUST_APPROVE'		=> 'Увімкніть цю опцію, щоб примусово схвалювати кожен новий завантажений файл, перш ніж він буде відображатися в цій категорії.<br />Адміністратори та модератори файлів будуть повідомлені електронною поштою про нові незатверджені завантаження.',

	'HELP_DL_NAME'					=> 'Це ім\'я завантаження, під яким воно буде відображатися в цьому розширенні.<br />Будь ласка, утримайтеся від використання спеціальних символів, щоб уникнути помилок.',
	'HELP_DL_NEW_TIME'				=> 'Введіть кількість днів, протягом яких завантаження буде позначене як нове.<br />Введіть 0, щоб вимкнути цю функцію.',
	'HELP_DL_NEWTOPIC_TRAFFIC'		=> 'Введіть обсяг трафіку, який буде зараховано автору за публікацію нової теми.',
	'HELP_DL_NO_CHANGE_EDIT_TIME'	=> 'Встановіть цей прапорець, щоб заборонити оновлення часу останнього редагування завантаження.<br />Електронна пошта та спливаючі повідомлення/повідомлення на головній сторінці не будуть порушені.',

	'HELP_DL_OFF_HIDE'					=> 'Приховує посилання в навігації головної сторінки.<br />В іншому випадку в області завантаження буде відображатися тільки повідомлення.',
	'HELP_DL_OFF_NOW_TIME'				=> 'Деактивує завантаження негайно або регулярно в наступні моменти часу.',
	'HELP_DL_OFF_PERIOD'				=> 'Період часу, протягом якого завантаження буде вимкнено автоматично.',
	'HELP_DL_OFF_PERIOD_TILL'			=> 'Період часу, протягом якого завантаження буде вимкнено автоматично.',
	'HELP_DL_ON_ADMINS'					=> 'Дозволяє адміністраторам форуму використовувати список файлів і працювати з ними, поки розширення завантаження деактивовано.<br />В іншому випадку адміністратори файлів також будуть заблоковані.',
	'HELP_DL_OVERALL_TRAFFIC'			=> 'Загальний ліміт для зареєстрованих користувачів на весь трафік, який не можна перевищувати в поточному місяці.<br />Після досягнення цієї межі, скачування та додавання нових (якщо включена опція) файлів буде недоступним.',
	'HELP_DL_OVERALL_GUEST_TRAFFIC'		=> 'Загальний ліміт для гостей на весь трафік, який не можна перевищувати в поточному місяці.<br />Після досягнення цієї межі, завантаження та додавання нових (якщо включена опція) файлів буде недоступним.',
	'HELP_DL_OVERVIEW_LINK'				=> 'Відображає посилання на загальний список або приховує його.<br />Порада:<br />Поки вимкнено, загальний список не може бути відкритий за прямим посиланням!',

	'HELP_DL_PHYSICAL_QUOTA'	=> 'Загальна фізична межа, яку розширення може використовувати для збереження та керування завантаженнями.<br />кщо ця межа досягнута, нові завантаження можуть бути додані тільки з використанням ftp-клієнта та керування файлами в ACP.',
	'HELP_DL_POSTS'				=> 'Кожен користувач, кожен адміністратор і модератор повинен опублікувати як мінімум цю кількість повідомлень, щоб мати можливість завантажувати файли не в рамках безкоштовного завантаження.<br />Дуже рекомендується встановити модуль захисту від спаму, щоб не розсилати постери спамом.<br />Введіть 0, щоб вимкнути цю функцію, рекомендується для нещодавно створених форумів.',
	'HELP_DL_PREVENT_HOTLINK'	=> 'Увімкніть цю опцію, якщо ви хочете заборонити прямі посилання на завантаження, за винятком відомостей про скачування.<br />Цей варіант <strong>не</strong> каталоги завантаження!',

	'HELP_DL_RATE_POINTS'			=> 'Встановлює максимальну кількість балів, яку користувач може нарахувати за завантаження.<br /><br /><strong>Будь ласка, зверніть увагу:</strong><br />Якщо ви зміните цей параметр, всі нараховані рейтингові очки будуть видалені, щоб розширення могло розраховувати правильні рейтингові очки!',
	'HELP_DL_REPLY_TRAFFIC'			=> 'Користувачу буде нараховуватися введений тут обсяг трафіку за кожну нову відповідь та цитату.',
	'HELP_DL_REPORT_BROKEN'			=> 'Включає або вимикає функцію повідомлення про проблемні файли.<br />Якщо ви встановите значення «не для гостей», тільки зареєстровані користувачі зможуть повідомляти про непрацюючі файли.',
	'HELP_DL_REPORT_BROKEN_LOCK'	=> 'Якщо ви увімкнете цю опцію, завантаження буде відключено, поки воно вважається не робочим.<br />Це приховає кнопку завантаження і заборонить будь-кому завантажувати цей файл, поки адміністратор або модератор файлів не включить його знову.',
	'HELP_DL_REPORT_BROKEN_MESSAGE'	=> 'Якщо завантаження було визнано не робочим, про це буде оголошено повідомленням.<br />Якщо ви увімкнете цю опцію, повідомлення буде відображатися замість кнопки завантаження тільки тоді, коли завантаження заблоковано.',
	'HELP_DL_REPORT_BROKEN_VC'		=> 'Включає візуальний код підтвердження, якщо користувач повідомляє про проблему з файлом. електронній пошті.<br />Потім цей звіт буде збережено лише в тому випадку, якщо було введено правильний код, і відповідно, адміністратори та модератори файлів будуть проінформовані електронною поштою.',

	'HELP_DL_RSS_ENABLE'				=> 'Включає RSS-канал для файлів.<br />Якщо вимкнено, наступні дві опції будуть визначати, що користувач побачить замість фіда.',
	'HELP_DL_RSS_OFF_ACTION'			=> 'За допомогою цієї опції визначається поведінка відключеного каналу.',
	'HELP_DL_RSS_OFF_TEXT'				=> 'Цей текст буде відображатися замість записів завантаження в RSS-каналі, якщо канал був вимкнений, а попередня опція була налаштована на відображення цього повідомлення. <br />Якщо в попередній опції була налаштована переадресація, цей текст залишиться активним, але не відображатиметься.',
	'HELP_DL_RSS_CATS'					=> 'Записи в RSS-каналі будуть взяті зі всіх або вибраних категорій зі списку в цій опції.<br />Щоб вибрати більше однієї категорії, утримуйте клавішу CTRL і натискайте на назви категорій.<br />Ви можете увімкнути у стрічку вибрані або невибрані категорії.',
	'HELP_DL_RSS_PERMS'					=> 'Незважаючи на вибір категорій, з яких повинні відображатися записи, рекомендується встановити права користувача на вхід до системи або навіть ближче до прав гостей або ботів, щоб запобігти відображенню завантажень у стрічці, які користувач не повинен бачити.<br />У налаштуванні «для гостей» вибираються тільки ті категорії, які повинні бачити гості.<br />За умови, що користувачеві або гостю/боту не показуються жодні стрічки через обрані категорії та права доступу, стрічка поводиться аналогічно до налаштувань, як якби вона була відключена.',
	'HELP_DL_RSS_NEW_UPDATE'			=> 'Ця опція позначає нові або оновлені завантаження, як міні-значок у поданні категорій.',
	'HELP_DL_RSS_NUMBER'				=> 'Максимальна кількість завантажень, що відображаються у стрічці.',
	'HELP_DL_RSS_SELECT'				=> 'Цей параметр визначає, чи повинні бути перераховані в стрічці останні або випадкові завантаження, залежно від вибраних категорій, прав доступу та кількості.',
	'HELP_DL_RSS_DESC_LENGTH'			=> 'За допомогою цієї опції ви можете відобразити опис завантаження або вибрати скорочений опис (відповідно до налаштування головної сторінки файлів).<br /><br /><strong>Увага:</strong><br />Оскільки не кожен рідер розпізнає та/або відображає HTML-коди, може статися так, що текст буде відображатися некоректно або рідер просто не покаже жодних записів. У цьому випадку користувач повинен використовувати інший RSS-рідер, інакше описи мають бути відключені.',
	'HELP_DL_RSS_DESC_LENGTH_SHORTEN'	=> 'Усікає опис завантажень після x символів, якщо опис повинен відображатися в скороченій формі (див. попередній варіант).<br />При значенні 0 опис не відображається!',

	'HELP_DL_SET_ADD'				=> 'За допомогою цієї опції ви можете вибрати ім\'я користувача, під яким будуть публікуватися нові завантаження.<br />Ви можете вибрати поточного користувача, користувача, вибраного в налаштуваннях категорії (якщо ви обрали тут ´вибір категорії´), або іншого користувача, зареєстрованого на форумі.<br /><br />Зверніть увагу, що автоматично створена тема завантаження на форумі, як і раніше, буде використовувати цього користувача для цієї функції. Ця опція змінить лише налаштування «додати користувача» для нових файлів.<br /><br /><strong>Порада:</strong><br />Ідентифікатор користувача не перевірятиметься самим розширенням файлів, тому неіснуючий ідентифікатор може порушити роботу функцій!',
	'HELP_DL_SHORTEN_EXTERN_LINKS'	=> 'Введіть довжину відображеного зовнішнього посилання для завантаження в відомостях про файл.<br />Залежно від довжини посилання воно буде обрізане посередині або усічено, починаючи праворуч.<br />Залиште це поле порожнім або введіть 0, щоб вимкнути цю функцію.',
	'HELP_DL_SHOW_FOOTER_EXT_STATS'	=> 'Показує загальний трафік для зареєстрованих користувачів та гостей та кількість кліків за поточний місяць у футері списку файлів.',
	'HELP_DL_SHOW_FILE_HASH'		=> 'Показує або приховує хеш файлу в деталях завантаження.',
	'HELP_DL_SHOW_FOOTER_LEGEND'	=> 'Цей параметр включає і виключає легенду значка стану завантаження в нижньому колонтитулі списку файлів.<br />Значки, які ви можете знайти поряд з файлами, не будуть змінені цією опцією',
	'HELP_DL_SHOW_FOOTER_STAT'		=> 'Ця опція включає та вимикає міні-статистику в нижньому колонтитулі списку файлів.<br />Навіть якщо він вимкнений, статистика все одно збиратиме дані.',
	'HELP_DL_SHOW_REAL_FILETIME'	=> 'Ця опція відображає реальний час останнього редагування файлів, що відображається в деталях завантаження.<br />Це найточніший часовий код навіть для файлів, завантажених за допомогою ftp-клієнта або оновлених кілька разів без реєстрації цього.',
	'HELP_DL_SIMILAR_DL'			=> 'Показує схожі завантаження з тієї ж категорії в детальному поданні.<br /><br />Увага: у великих базах даних, що завантажуються, цей параметр може збільшити час завантаження докладного подання, тому цей параметр слід відключити.',
	'HELP_DL_SIMILAR_DL_LIMIT'		=> 'Кількість схожих завантажень, які будуть перераховані на сторінці відомостей про завантаження.',
	'HELP_DL_SORT_PREFORM'			=> 'Опція «Предустановка» сортує всі завантаження у всіх категоріях для всіх користувачів так само, як вони сортуються в ACP.<br />З опцією «Користувач» кожен користувач може визначити, як для нього будуть сортуватися завантаження та буде чи це сортування замінено або доповнено іншими критеріями сортування.',
	'HELP_DL_STAT_PERM'				=> 'Виберіть тут, з якого рівня користувача можна переглядати статистику завантажень. <br /> Наприклад, якщо ви активуєте тільки модераторів, кожен адміністратор та модератор (НЕ модератор форуму!) зможе відкривати та переглядати цю сторінку. <br />Будь ласка, зверніть увагу, що ця сторінка може завантажуватися дуже довго, тому рекомендується не відкривати цю сторінку занадто великій кількості категорій користувачів, якщо ви використовуєте великий форум та/або надаєте багато завантажень.',
	'HELP_DL_STATISTICS'			=> 'Включає докладну статистику про завантажені файли.<br />Зверніть увагу, що ця статистика створить додаткові запити до бази даних та набори даних в окремій таблиці.',
	'HELP_DL_STATS_PRUNE'			=> 'Введіть кількість рядків даних, яких може досягти статистика для цієї категорії.<br />Кожен новий рядок буде видаляти найстаріший.<br />Введіть 0 тут, щоб вимкнути обрізку.',
	'HELP_DL_STOP_UPLOADS'			=> 'За допомогою цієї опції ви можете увімкнути або вимкнути додавання файлів.<br />Якщо ви відключите цю опцію, тільки адміністратори зможуть додавати нові файли через форму завантаження.<br />Увімкніть цей параметр, щоб дозволити користувачам додавати файли. файли залежно від дозволів категорії та групи.',

	'HELP_DL_THUMB'						=> 'Використовуючи це поле, ви можете завантажити зменшене зображення (зверніть увагу на розмір файлу та розміри зображення під цим полем), щоб відобразити його в деталях завантаження.<br />Якщо ескіз вже існує, ви можете завантажити нову, щоб замінити його.<br />Якщо ви встановите прапорець «Видалити» для існуючого ескізу, він буде видалений.',
	'HELP_DL_THUMB_CAT'					=> 'Цей параметр включає ескізи для завантаження в цій категорії.<br />Максимальний розмір цих ескізів залежить від налаштувань основної конфігурації цього розширення.',
	'HELP_DL_THUMB_MAX_DIM_X'			=> 'Це значення обмежує можливу ширину зображення завантажуваних ескізів.<br />Ескізи обмежені розміром 150x100 пікселів, ви можете переглянути завантажене зображення у спливаючому вікні, натиснувши на ескіз.<br /><br />Введіть 0, щоб вимкнути мініатюри (не рекомендується, якщо встановлено розмір файлу ескізів).<br />Існуючі мініатюри, як і раніше, відображаються, якщо розмір файлу мініатюри не встановлено 0.',
	'HELP_DL_THUMB_MAX_DIM_Y'			=> 'Це значення обмежує можливу висоту зображення завантажуваних ескізів.<br />Ескізи обмежені розміром 150x100 пікселів, ви можете переглянути завантажене зображення у спливаючому вікні, натиснувши на ескіз.<br /><br />Введіть 0, щоб вимкнути ескізи (не рекомендується, якщо встановлено розмір файлу ескізів).<br />Існуючі ескізи, як і раніше, відображаються, якщо тільки розмір файлу ескізу не встановлено 0.',
	'HELP_DL_THUMB_MAX_SIZE'			=> 'Введіть 0 як розмір файлу, щоб вимкнути ескізи у всіх категоріях.<br />Якщо ви включаєте ескізи, визначаючи розмір файлу, введіть максимальний розмір завантажуваних зображень, з яких створюються нові ескізи.<br />Якщо вимкніть ескізи, існуючі ескізи більше не відображатимуться в деталях завантаження.',
	'HELP_DL_TODO_LINK'					=> 'Включає або вимикає посилання на список справ у нижньому колонтитулі списку файлів.<br />Ця опція не впливає на дані справ та керування ними в рамках завантаження.',
	'HELP_DL_USE_TODOLIST'				=> 'Включає або вимикає список справ',
	'HELP_DL_TOPIC_DETAILS'				=> 'Показує опис завантаження, ім\'я файлу, розмір файлу або для зовнішніх завантажень URL-адрес у темі форуму.<br />Цей текст може бути розміщений над або під раніше введеним текстом.<br />Якщо тема буде створена через категорію завантаження опція в загальній конфігурації буде проігнорована.',
	'HELP_DL_TOPIC_FORUM'				=> 'Форум, на якому будуть відображатися нові теми про файли.<br />Щоб вибрати форум для файлів тем за категоріями, виберіть опцію «Вибір категорії» замість форуму.',
	'HELP_DL_TOPIC_FORUM_C'				=> 'Форум, на якому будуть відображатися нові теми про завантаження з цієї категорії.',
	'HELP_DL_TOPIC_POST_CATNAME'		=> 'Додає назву категорії до повідомлення теми, створеного для файлу. Назва категорії буде вставлена після заголовка завантаження.<br />Увага:<br />Існуючі теми не оновлюватимуться, доки не буде оновлено відповідне завантаження.',
	'HELP_DL_TOPIC_TEXT'				=> 'Безкоштовний текст для створення тем про завантаження. BBCodes, HTML та смайлики не допускаються, оскільки текст має відступ лише для введення в тему.',
	'HELP_DL_TOPIC_TITLE_CATNAME'		=> 'Додає назву категорії до назви теми, яка буде створена для завантаження. Назва категорії буде відокремлено знаком - (тире) від імені завантаження.<br />Увага:<br />Існуючі теми не оновлюватимуться, доки не буде оновлено завантаження.',
	'HELP_DL_TOPIC_TYPE'				=> 'Ця опція вибирає тип теми для тем, що завантажуються.<br />Після зміни цього типу всі нові додані або відредаговані завантаження будуть публікуватися з новим типом теми. Існуючі теми не будуть змінені.',
	'HELP_DL_TOPIC_USER'				=> 'Виберіть тут, який користувач буде вказаний як автор теми завантаження.<br />Якщо поточний користувач повинен бути автором теми, виберіть опцію «поточний користувач». Опція, вибрана за категорією, дозволяє вибрати окремого користувача для кожної категорії. Це може бути поточний користувач або будь-який користувач, вибраний за його ідентифікатором, введеним у поле праворуч від розкривного списку. Це рекомендується для опції «Вибрати користувача замість ID»<br /><br /><strong>Порада:</strong><br />Ідентифікатор користувача не перевірятиметься розширенням завантаження, тому неіснуючий ідентифікатор може порушити роботу функцій!',
	'HELP_DL_TRAFFIC'					=> 'Максимальний трафік, який може створювати файл.<br />Значення 0 деактивує керування трафіком.<br />Зверніть увагу, що файловий трафік буде встановлений на 0, якщо завантаження позначене як зовнішнє.',
	'HELP_DL_TRAFFIC_OFF'				=> 'Вимикає все керування трафіком в області завантаження та деактивує всі наступні параметри трафіку.<br />Увімкнення цієї опції приховає всі тексти про завантажувальний трафік на форумі і не враховуватиме обмеження щодо трафіку. Так само дані про трафік більше не оновлюються під час скачування та додавання файлів.<br />Написання або видалення повідомлень більше не буде зараховуватись обліковим записам користувачів.<br />Автоматично призначені бонуси за трафік більше не нараховуватимуться користувачам, якщо ця опція відключена. Однак користувачі або члени групи, як і раніше, можуть отримувати виділений трафік у модулі керування трафіком ACP.<br />Всі модулі, тексти та функції ACP, що стосуються керування трафіком, залишаться без змін.',
	'HELP_DL_TRAFFICS_FOUNDER'			=> 'Якщо керування трафіком відключено для засновників, вони все одно можуть завантажувати та завантажувати файли незалежно від параметрів трафіку.<br />Навіть якщо нарахування трафіку для створення тем або повідомлень активовано, ці користувачі звільняються від нього.<br />Ця опція заморозить поточний обсяг трафіку для засновників, доки ця опція не буде вимкнена.',
	'HELP_DL_TRAFFICS_OVERALL'			=> 'Ця опція обмежує загальний трафік для зареєстрованих користувачів.<br />Загальний трафік може бути увімкнений або вимкнений для всіх зареєстрованих користувачів або може бути встановлений лише для членів груп користувачів, вибраних у наступному параметрі.<br />Якщо загальний трафік вимкнено, всі зачеплені користувачі мають необмежений трафік для завантаження та вивантаження файлів.',
	'HELP_DL_TRAFFICS_OVERALL_GROUPS'	=> 'Попередній варіант буде застосовуватись до груп користувачів та їх учасників, вибраних тут, якщо обмеження трафіку застосовується до груп користувачів.',
	'HELP_DL_TRAFFICS_USERS'			=> 'Ця опція обмежує трафік для зареєстрованих користувачів.<br />Трафік користувача може бути включений або вимкнений для всіх зареєстрованих користувачів або може бути встановлений тільки для членів груп користувачів, які можна вибрати в наступному параметрі.<br />Якщо користувальницький трафік був вимкнений, всі порушені користувачі мають необмежений трафік скачування та додавання нових файлів.<br />Зачеплені користувачі також не отримуватимуть автоматичні суми трафіку за написання теми або публікації, навіть якщо ця опція увімкнена.',
	'HELP_DL_TRAFFICS_USERS_GROUPS'		=> 'Попередній параметр буде застосовуватись до груп користувачів та їх членів, вибраних тут, якщо попередній параметр обмежує трафік для груп користувачів.',
	'HELP_DL_TRAFFICS_GUESTS'			=> 'Увімкнути або вимкнути загальний трафік для гостей.<br />Якщо цю опцію вимкнено, гості мають необмежений трафік для скачування та додавання файлів, залежно від їх дозволу.<br />Оскільки ця опція може викликати велике навантаження на ваш форум і ваш сервер аж до повного навантаження, не рекомендується відключати цю опцію.',

	'HELP_DL_UPLOAD_FILE'			=> 'Файл, який потрібно завантажити з вашого комп\'ютера.<br />Переконайтеся, що розмір файлу менший за вказану межу і що розширення файлу не включено до списку, який ви бачите під цим полем.',
	'HELP_DL_UPLOAD_TRAFFIC_COUNT'	=> 'Якщо ця опція включена, додавання файлу зменшить щомісячний загальний трафік.<br />Після досягнення загальної межі подальше додавання файлів буде неможливо, і нові файли повинні бути завантажені за допомогою ftp-клієнта та додані до ACP.',
	'HELP_DL_USE_EXT_BLACKLIST'		=> 'Якщо ви увімкнете чорний список, всі введені типи файлів будуть заблоковані для додавання або редагування існуючих файлів.',
	'HELP_DL_USE_HACKLIST'			=> 'Ця опція включає або відключає список злому.<br />Якщо ця функція увімкнена, ви можете вводити інформацію про злом при додаванні або редагуванні файлу, щоб додати її до списку злому.<br />Якщо вимкнено, список злому буде повністю прихований для кожного користувача, але ви можете увімкнути його в будь-який час.<br />Зверніть увагу, що вся інформація про злом у файлах буде втрачена, якщо ви відредагуєте файл після відключення списку злому.',
	'HELP_DL_USER_TRAFFIC_ONCE'		=> 'Виберіть, чи потрібно завантаження зменшувати користувальницький трафік лише один раз при першому завантаженні файлу.<br /><strong>Увага:</strong><br />Ця опція НЕ змінить статус завантаження!',

	'HELP_DL_VISUAL_CONFIRMATION'	=> 'Активуйте цей параметр, щоб пропонувати користувачам ввести 5-значний код підтвердження перед завантаженням файлу. <br />Якщо користувач надіслав неправильний код або код не вказано, розширення відобразить помилку замість того, щоб дозволити скачування.<br />Якщо цю опцію вимкнено, користувачу не потрібно буде вводити код, і він зможе завантажувати файли прямо зі сторінки відомостей.',

	'HELP_NUMBER_RECENT_DL_ON_PORTAL'	=> 'Кількість останніх завантажень, які користувач побачить на порталі.<br />Розширення використовує час останнього редагування для цього списку, тому можна мати старіше завантаження поверх цього списку.',
]);
