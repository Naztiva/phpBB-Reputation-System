<?php
/**
*
* @package	Reputation System
* @author	Pico88 (https://github.com/Pico88)
* @copyright (c) 2013
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'REPUTATION'		=> 'Reputacja',

	'RS_DISABLED'		=> 'Przepraszamy, ale administrator wyłączył tą funkcję.',
	'RS_TITLE'			=> 'System Reputacji',

	'RS_ACTION'					=> 'Czynność',
	'RS_BAN'					=> 'Ban',
	'RS_COMMENT'				=> 'Komentarz',
	'RS_DATE'					=> 'Data',
	'RS_DETAILS'				=> 'Szczegóły reputacji użytkownika',
	'RS_FROM'					=> 'Od',
	'RS_LIST'					=> 'Lista punktów reputacji użytkownika',
	'RS_POST_COUNT'				=> 'Punkty za posty',
	'RS_USER_COUNT'				=> 'Punkty od użytkowników',
	'RS_POSITIVE_COUNT'			=> 'Pozytywne punkty',
	'RS_NEGATIVE_COUNT'			=> 'Negatywne punkty',
	'RS_STATS'					=> 'Statystyki',
	'RS_WEEK'					=> 'Ostatni tydzień',
	'RS_MONTH'					=> 'Ostatni miesiąc',
	'RS_6MONTHS'				=> 'ostatnie 6 miesięcy',
	'RS_NEGATIVE'				=> 'Negatywne',
	'RS_POSITIVE'				=> 'Pozytywne',
	'RS_POINT'					=> 'Punkt',
	'RS_POINTS'					=> 'Punkty',
	'RS_POST'					=> 'Post',
	'RS_POST_DELETE'			=> 'Post usunięty',
	'RS_POWER'					=> 'Siła reputacji',
	'RS_POST_RATING'			=> 'Ocenianie postu',
	'RS_ONLYPOST_RATING'		=> 'Ocena wpisu',
	'RS_RATE_BUTTON'			=> 'Oceń',
	'RS_RATE_POST'				=> 'Oceń post',
	'RS_RATE_USER'				=> 'Oceń użytkownika',
	'RS_RANK'					=> 'Ranga reputacji',
	'RS_SENT'					=> 'Punkt reputacji został dodany pomyślnie',
	'RS_TIME'					=> 'Data',
	'RS_TO'						=> 'do',
	'RS_TO_USER'				=> 'Do',
	'RS_TYPE'					=> 'Typ',
	'RS_USER_RATING'			=> 'Ocenianie użytkownika',
	'RS_USER_RATING_CONFIRM'	=> 'Czy na pewno chcesz przyznać punkty reputacji %s?',
	'RS_VIEW_DETAILS'			=> 'Zobacz szczegóły',
	'RS_VOTING_POWER'			=> 'Pozostałe punkty',
	'RS_WARNING'				=> 'Ostrzeżenie użytkownika',

	'RS_EMPTY_DATA'				=> 'Brak punktów reputacji.',
	'RS_NA'						=> 'Brak',
	'RS_NO_COMMENT'				=> 'Musisz uzupełnić pole z komentarzem!',
	'RS_NO_ID'					=> 'Brak ID',
	'RS_NO_POST_ID'				=> 'Nie ma takiego postu.',
	'RS_NO_POWER'				=> 'Twoja siła reputacji jest za niska.',
	'RS_NO_POWER_LEFT'			=> 'Nie posiadasz żadnych punktów do rozdysponowania.<br/>Poczekaj, aż zostaną uzupełnione.<br/>Twoja siła reputacji: %s',
	'RS_NO_USER_ID'				=> 'Nie ma takiego użytkownika.',
	'RS_TOO_LONG_COMMENT'		=> 'Twój komentarz składa się z %1$d znaków. Dozwolone maksimum to %2$d znaków.',
	'RS_COMMENT_TOO_LONG'		=> 'Za długi komentarz.<br />Maksymalna ilość znaków: %s. Twój komentarz:',

	'RS_NO_POST'				=> 'Wybrany post nie istnieje',	
	'RS_SAME_POST'				=> 'Przyznałeś/aś już punkt/y za ten post.',
	'RS_SAME_USER'				=> 'Przyznałeś/aś już punkt/y temu użytkownikowi.',
	'RS_SELF'					=> 'Nie możesz sam sobie przyznać punktów reputacji.',
	'RS_USER_ANONYMOUS'			=> 'Nie możesz przyznać punktów reputacji Gościowi.',
	'RS_USER_BANNED'			=> 'Nie możesz przyznać punktów reputacji zbanowanemu użytkownikowi.',
	'RS_USER_CANNOT_DELETE'		=> 'Nie masz uprawnień do usunięcia punktu.',
	'RS_USER_DISABLED'			=> 'Nie możesz przyznawać punktów reputacji.',
	'RS_USER_NEGATIVE'			=> 'Nie możesz przyznawać negatywnych punktów reputacji.<br />Twoja reputacja musi wynosić co najmniej %s.',
	'RS_VIEW_DISALLOWED'		=> 'Nie możesz przeglądać punktów reputacji.',

	'RS_DELETE_POINT'			=> 'Usuń punkt',
	'RS_DELETE_POINT_CONFIRM'	=> 'Czy na pewno chcesz usunąć ten punkt reputacji?',
	'RS_POINT_DELETED'			=> 'Punkt reputacji został usunięty',
	'RS_DELETE_POINTS'			=> 'Usuń punkty',
	'RS_DELETE_POINTS_CONFIRM'	=> 'Czy na pewno chcesz usunąć te punkty reputacji?',
	'RS_POINTS_DELETED'			=> 'Punkty reputacji zostały usunięte',
	'NO_REPUTATION_SELECTED'	=> 'Nie wybrano punktu reputacji.',
	'RS_CLEAR_POST_CONFIRM'		=> 'Czy na pewno chcesz usunąć wszystkie punkt reputacji tego postu?',
	'RS_CLEAR_USER_CONFIRM'		=> 'Czy na pewno chcesz usunąć wszystkie punkt reputacji tego użytkownika?',
	'RS_CLEAR_POST'				=> 'Wyzeruj reputację postu',
	'RS_CLEAR_USER'				=> 'Wyzeruj reputację użytkownika',

	'RS_PM_BODY'				=> 'Otrzymałeś punkt reputacji od autora tej wiadomości. <br />Punkty: [b]%s&nbsp;[/b] <br />By zobaczyć post, za który został przyznany punkt reputacji, proszę kliknąć w ten %slink%s.',
	'RS_PM_BODY_COMMENT'		=> 'Otrzymałeś punkt reputacji od autora tej wiadomości. <br />Punkty: [b]%s&nbsp;[/b] <br />Komentarz: [i]%s&nbsp;[/i] <br />By zobaczyć post, za który został przyznany punkt reputacji, proszę kliknąć w ten %slink%s.',
	'RS_PM_BODY_USER'			=> 'Otrzymałeś punkt reputacji od autora tej wiadomości. <br />Punkty: [b]%s&nbsp;[/b]',
	'RS_PM_BODY_USER_COMMENT'	=> 'Otrzymałeś punkt reputacji od autora tej wiadomości. <br />Punkty: [b]%s&nbsp;[/b] <br />Komentarz: [i]%s&nbsp;[/i]',
	'RS_PM_SUBJECT'				=> 'Otrzymałeś punkt reputacji',

	'RS_TOPLIST'			=> 'Top Reputacji',
	'RS_TOPLIST_EXPLAIN'	=> 'Jesteśmy dumni z',

	'NOTIFY_USER_REP'		=> 'Powiadomić użytkownika o przyznanym punkcie?',

	'RS_LATEST_REPUTATIONS'			=> 'Ostatnie punkty reputacji',
	'LIST_REPUTATION'				=> '1 wpis reputacji',
	'LIST_REPUTATIONS'				=> '%s wpisy/ów reputacji',
	'ALL_REPUTATIONS'				=> 'Wszystkie wpisy reputacji',

	'RS_NEW_REPUTATIONS'			=> 'Nowe punkty reputacji',
	'RS_NEW_REP'					=> 'Masz <strong>1 nowy</strong> punkt reputacji',
	'RS_NEW_REPS'					=> 'Masz <strong>%s nowe/ych</strong> punktów reputacji',
	'RS_CLICK_TO_VIEW'				=> 'Idź do listy otrzymanych punktów',

	'RS_MORE_DETAILS'				=> '» więcej szczegółów',

	'RS_HIDE_POST'					=> 'Ten post został napisany przez <strong>%1$s</strong> i został ukryty, bo otrzymał za dużo negatywnych głósów. %2$s',
	'RS_SHOW_HIDDEN_POST'			=> 'Pokaż ten post',
	'RS_SHOW_HIDE_HIDDEN_POST'		=> 'Pokaż / Ukryj',
	'RS_ANTISPAM_INFO'				=> 'Nie możesz przyznać punktów reputacji tak szybko. Wróć później.',
	'RS_POST_REPUTATION'			=> 'Ocena postu',
	'RS_USER_REPUTATION'			=> 'Reputacja %s',
	'RS_YOU_RATED'					=> 'Oceniłeś ten post. Punkty:',

	'RS_VOTE_POWER_LEFT_OF_MAX'		=> 'Pozostało %1$d punktów do wykorzystania z %2$d. Maksimum na głos: %3$d',
	'RS_VOTE_POWER_LEFT'			=> '%1$d z %2$d',

	'RS_POWER_DETAILS'				=> 'Sposób obliczania siły reputacji',
	'RS_POWER_DETAIL_AGE'			=> 'Według daty rejestracji',
	'RS_POWER_DETAIL_POSTS'			=> 'Według liczby postów',
	'RS_POWER_DETAIL_REPUTAION'		=> 'Według reputacji',
	'RS_POWER_DETAIL_WARNINGS'		=> 'Według ostrzeżeń',
	'RS_POWER_DETAIL_BANS'			=> 'Według liczby banów w ciągu ostatniego roku',
	'RS_POWER_DETAIL_MIN'			=> 'Minimalna siła reputacji dla wszystkich użytkowników',
	'RS_POWER_DETAIL_MAX'			=> 'Siła reputacji została ograniczona do maksymalnej wartości',
	'RS_GROUP_POWER'				=> 'Siła reputacji oparta na grupie użytkownika',

	'RS_USER_GAP'					=> 'Nie możesz ponownie ocenić tego samego użytkownika. Spróbuj ponownie za %s.',
));

?>