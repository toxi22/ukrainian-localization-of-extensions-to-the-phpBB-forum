<?php
/**
*
* @молоток для запрета пакетов
* @ *@авторское право (c) 2015 phpBBМоддеры<https://phpbbmodders.net />
* @автор Яри Канерва
* @лицензия http://opensource.org/licenses/gpl-2.0.php Общая общественная лицензия GNU v2
*
*/

/**
* @игнорировать
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* НЕ МЕНЯЙТЕ
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

//РАЗРАБОТЧИКИ, ПОЖАЛУЙСТА, ОБРАТИТЕ ВНИМАНИЕ
//
//// Все языковые файлы должны использовать UTF-8 в качестве кодировки, и файлы не должны содержать бомбу.
//
//Заполнители теперь могут содержать информацию о заказе, например, вместо
// "Страница %s%s" вы можете (и должны) написать "Страница %1$s %2$s", это позволяет
//переводчики для изменения порядка вывода данных, обеспечивая при этом их правильность
//
//Вам это не нужно, если используются одиночные заполнители, например, "Сообщение %d" подходит
//одинаково, если строка содержит только два заполнителя, которые используются для переноса текста
////в URL-адресе вам снова не нужно указывать порядок, например, "нажмите %shere%s" - это нормально
$lang = array_merge($lang, array(
	'ACP_BH_TITLE'		=> 'Ban Hammer',
	'ACP_BH_SETTINGS'	=> 'Налаштування Ban Hammer',
	'BH_SETTINGS_SUCCESS'		=> 'Налаштування Ban Hammer оновлені',
));
