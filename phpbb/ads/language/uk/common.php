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
	'ADBLOCKER_TITLE'	=> 'У вашому браузері включений плагін блокування реклами',
	'ADBLOCKER_MESSAGE'	=> 'Існування нашого сайту можливе завдяки показу реклами. Будь ласка, підтримайте нас, відключивши блокування реклами на нашому сайті.',  // при локализации текст отображается крякозябрами

	'ADVERTISEMENT'		=> 'Реклама',
	'HIDE_AD'			=> 'Приховати рекламу',

	'VISUAL_DEMO'			=> 'Увімкнено показ позицій блоків',
	'DISABLE_VISUAL_DEMO'	=> 'Відключити показ позицій блоків. F5 - оновити сторінку.',
	'DISABLE_VISUAL_DEMO_ERROR'	=> 'Не вдалося виконати ваш запит. Будь ласка, спробуйте знову вимкнути показ позицій блоків.',

	// Template locations
	'AD_ABOVE_HEADER'				=> 'Верх body',
	'AD_ABOVE_HEADER_DESC'			=> 'На кожній сторінці перед назвою форуму.',
	'AD_BELOW_HEADER'				=> 'Marque - нижче логотипу headerbar',
	'AD_BELOW_HEADER_DESC'			=> 'Рядок, що біжить. Відображати перед випадаючим меню.',
	'AD_BEFORE_POSTS'				=> 'Перед повідомленням',
	'AD_BEFORE_POSTS_DESC'			=> 'Показувати на кожній сторінці перед першим повідомленням.',
	'AD_AFTER_POSTS'				=> 'Нижче форми швидкої відповіді',
	'AD_AFTER_POSTS_DESC'			=> 'Внизу сторінки після останнього повідомлення нижче форми швидкої відповіді.',
	'AD_BELOW_FOOTER'				=> 'Низ body',
	'AD_BELOW_FOOTER_DESC'			=> 'Самий низ сторінки.',
	'AD_ABOVE_FOOTER'				=> 'Перед лічильниками',
	'AD_ABOVE_FOOTER_DESC'			=> 'Показуйте на кожній сторінці перед підвалом.',
	'AD_AFTER_FIRST_POST'			=> 'Після першого повідомлення',
	'AD_AFTER_FIRST_POST_DESC'		=> 'Показувати на сторінці теми після першого повідомлення.',
	'AD_AFTER_NOT_FIRST_POST'		=> 'Після кожного повідомлення, крім першого',
	'AD_AFTER_NOT_FIRST_POST_DESC'	=> 'Показувати на сторінці теми після кожного повідомлення, окрім першого.',
	'AD_BEFORE_PROFILE'				=> 'Перед профілем',
	'AD_BEFORE_PROFILE_DESC'		=> 'Показувати на сторінці профілю користувача перед вмістом.',
	'AD_AFTER_PROFILE'				=> 'Після профилю',
	'AD_AFTER_PROFILE_DESC'			=> 'Показувати на сторінці профілю користувача після вмісту.',
	'AD_AFTER_HEADER_NAVBAR'		=> 'Вгорі після навігації',
	'AD_AFTER_HEADER_NAVBAR_DESC'	=> 'На кожній сторінці перед форумами.',
	'AD_AFTER_FOOTER_NAVBAR'		=> 'Після рядка навігації у підвалі',
	'AD_AFTER_FOOTER_NAVBAR_DESC'	=> 'У підвалі після рядка навігації, нижче лічильників.',
	'AD_POP_UP'						=> 'Спливаюче вікно',
	'AD_POP_UP_DESC'				=> 'Відображається один раз на день у спливаючому вікні. Щоб продовжити будь-які дії на конференції, відвідувач має закрити це вікно. Будь ласка, майте на увазі, що подібна реклама дуже нав\'язлива і може дратувати відвідувачів!',
	'AD_SLIDE_UP'					=> 'Слайдер common',
	'AD_SLIDE_UP_DESC'				=> 'Показувати на кожній сторінці під час прокручування до кінця сторінки. Слайд піднімається знизу догори.',
	'AD_SCRIPTS'					=> 'JavaScript',
	'AD_SCRIPTS_DESC'				=> 'Для кода JavaScript, нібито оголошення AdSense Auto, коди відстеження тощо. Цей код буде вставлено в тег HEAD сторінки - тобто, він не призначений для розміщення об\'яв, а тільки для завантаження додаткових скриптів.',
));
