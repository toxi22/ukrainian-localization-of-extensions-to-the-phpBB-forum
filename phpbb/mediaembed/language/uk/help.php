<?php
/**
 *
 * phpBB Media Embed PlugIn extension for the phpBB Forum Software package.
 * Ukraine translation by toxi
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
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
	$lang = [];
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

$lang = array_merge($lang, [
	'HELP_EMBEDDING_MEDIA'			=> 'Вбудовування мультимедіа',
	'HELP_EMBEDDING_MEDIA_QUESTION'	=> 'Як вставляти медіа з інших сайтів у повідомлення?',
	'HELP_EMBEDDING_MEDIA_ANSWER'	=> 'Користувачі можуть вставляти контент, наприклад, відео та аудіо з дозволених сайтів, використовуючи бб-код
										<strong>[media][/media]</strong>, або просто вставивши посилання в текстовому форматі. Наприклад:<br /><br />
										<strong>[media]</strong>%1$s<strong>[/media]</strong>
										<br /><br />Як говорилося вище, посилання також може використовуватися без бб-коду <strong>[media]</strong>.
										<br /><br />Приклад, показаний тут, буде генерувати:<br /><br />%2$s
										<br /><br />Підтримуються такі сайти:<br /><samp>%3$s.</samp>
										<br /><br />Повну документацію про підтримувані сайти та ​​URL-адресах дивіться на сторінці <a href="https://s9etextformatter.readthedocs.io/Plugins/MediaEmbed/Sites/">
										Документація MediaEmbed</a>.',
	'HELP_EMBEDDING_MEDIA_DEMO'		=>	'https://youtu.be/QH2-TGUlwu4',
]);
