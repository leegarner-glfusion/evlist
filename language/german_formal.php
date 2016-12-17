<?php
// +--------------------------------------------------------------------------+
// | evList A calendar solution for glFusion                                  |
// +--------------------------------------------------------------------------+
// | german_formal.php                                                        |
// |                                                                          |
// | German language file, addressing the user as "Sie"                        |
// | Modifiziert: August 09 Tony Kluever									  |
// | Siegfried Gutschi (Dezember 2016) <sigi AT modellbaukalender DOT info>   |
// +--------------------------------------------------------------------------+
// | Based on the evList Plugin for Geeklog CMS                               |
// | Copyright (C) 2007 by the following authors:                             |
// |                                                                          |
// | Authors: Alford Deeley     - ajdeeley AT summitpages.ca                  |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+
/**
*   German language file for the evList plugin
*   @package    evlist
*/

// this file can't be used on its own
if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

$LANG_EVLIST = array(
'pi_title'          => 'Veranstaltungen',
'moderation_title'  => 'Veranstaltungs-Einsendungen',
'del_future'        => 'L�sche diese und zuk�nftige Wiederholungen',
'conf_del_future'   => 'Sind Sie sicher, dass Sie alle zuk�nftigen Wiederholungen dieser Veranstaltung l�schen m�chten?',
'del_all'           => 'L�schen?',
'conf_del_all'      => 'Sind Sie sicher, dass Sie alle Wiederholungen dieser Veranstaltung l�schen m�chten?',
'del_repeat'        => 'Diese Wiederholungen l�schen',
'conf_del_repeat'   => 'Sind Sie sicher, dass Sie diese Wiederholungen l�schen m�chten?',
'conf_del_event'    => 'M�chten Sie diese Veranstaltung l�schen?',
'conf_del_item'     => 'Sind Sie sicher, dass Sie diesen Eintrag l�schen m�chten?',
'edit_repeat'       => 'Wiederholung bearbeiten',
'edit_event'        => 'Veranstaltung bearbeiten',
'add_event'         => 'Veranstaltung hinzuf�gen',
'err_missing_title' => '* <i>Veranstaltungs-Titel</i> ist ein ben�tigtes Feld.',
'err_missing_weekdays' => 'Sie m�ssen mindestens einen Tag f�r eine Wiederholung des Wochentags angeben.',
'err_times'         => 'Uhrzeit-Ende kann nicht vor Uhrzeit-Beginn sein.',
'err_db_saving'     => 'Beim Speichern des Datensatzes ist ein Datenbankfehler aufgetreten.',
'err_cal_import'    => 'Beim importieren aus dem Kalender gab es %d Fehler. �berpr�fe die Datei "error.log" f�r weitere Informationen',
'err_import_event'  => 'Fehler beim importieren des Ereignisses %s',
'err_cal_notavail'	=> 'Die Kalender-Daten stehen nicht zur Verf�gung.',
'info'              => 'Information',
'warning'           => 'Warnung',
'alert'             => 'Warnhinweis',
'editing_instance'  => 'Sie bearbeiten eine einzelne Wiederholung dieser Veranstaltung.',
'editing_series'    => 'Sie bearbeiten die gesamte Veranstaltungsreihe. Anpassungen an bestimmte Wiederholungen gehen verloren!',
'allday'            => 'Ganzt�gige Veranstaltung?',
'recur_cust_format' => '(Format: JJJJ-MM-TT, JJJJ-MM-TT, etc.)',
'recur_cust_ignoredates' => '(Ignoriert das angegebene Datum F�r Beginn und Ende)',
'click_to_select'   => 'Zum Ausw�hlen klicken',
'access_denied'     => 'Zugriff verweigert',
'skip_weekends'     => 'Wochenenden �berspringen?',
'yes'               => 'Ja',
'no'                => 'Nein',
'next_bus_day'      => 'N�chster Werktag?',
'edit'              => 'Bearbeiten',
'event_title'       => 'Veranstaltungs-Titel',
'event_summary'     => 'Zusammenfassung',
'start_date'        => 'Datum-Beginn',
'start_time'        => 'Uhrzeit-Beginn',
'end_time'          => 'Uhrzeit-Ende',
'end_date'          => 'Datum-Ende',
'copy'              => 'Kopieren',
'id'                => 'ID',
'enabled'           => 'Aktivieren',
'enabled_q'         => 'Aktivieren?',
'ical_enabled'      => 'ICal Aktivieren',
'calendar'          => 'Kalender',
'calendars'         => 'Kalender',
'select_cals'       => 'W�hlen Sie, welche Kalender angezeigt werden sollen',
'new_calendar'      => 'Neuer Kalender',
'events'            => 'Veranstaltungen',
'new_event'         => 'Neue Veranstaltung',
'categories'        => 'Kategorien',
'category'          => 'Kategorie',
'new_category'      => 'Neue Kategorie',
'ticket_types'      => 'Ticket-Kategorie',
'type'              => 'Kategorie',
'fee'               => 'Ticket-Preis',
'new_ticket_type'   => 'Neue Ticket-Kategorie',
'print_tickets'     => 'Tickets drucken',
'import_calendar'   => 'Kalender-Import',
'import_from_csv'   => 'CSV-Import',
'title'             => 'Titel',
'ev_info'           => 'Allgemeine Informationen',
'ev_schedule'       => 'Programm-Informationen',
'ev_perms'          => 'Zugangs-Berechtigung',
'ev_contact'        => 'Kontakt',
'ev_location'       => 'Ort',
'show_upcoming'     => 'In bevorstehende Veranstaltungen anzeigen',
'misc'              => 'Sonstiges',
'foreground'        => 'Vordergrund',
'background'        => 'Hintergrund',
'colors'            => 'Farben',
'cal_name'          => 'Kalender-Name',
'cat_name'          => 'Kategorie-Name',
'reset'             => 'Zur�cksetzen',
'del_cal_msg1'      => 'Sind Sie sicher, dass Sie diesen Kalender und alle dazugeh�rigen Veranstaltungen l�schen m�chten? Dies ist eine permanente L�schung und kann nicht r�ckg�ngig gemacht werden. Sie k�nnen aber zuvor noch vorhandene Veranstaltungen entweder in einen neuen Kalender verschieben oder diese Veranstaltungen l�schen.',
'del_cal_events'    => 'In diesem Kalender sind %d Veranstaltungen eingetragen. Sie k�nnen diese Veranstaltungen verschieben, indem Sie unten einen neuen Kalender ausw�hlen. Wenn Sie keinen neuen Kalender ausw�hlen, werden ALLE Veranstaltungen dauerhaft aus der Datenbank gel�scht.',
'confirm_del'       => 'Best�tigen Sie, dass Sie diesen Eintrag l�schen m�chten',
'none_delete'       => 'Keiner - Veranstaltungen l�schen',
'deleting_cal'      => 'Kalender l�schen',
'filter'            => 'Filter',
'when'              => 'Wann',
'where'             => 'Wo',
'what'              => 'Was',
'more_info'         => 'Mehr Informationen',
'click_here'        => '<a href="%s" %s>Klicken Sie hier</a> f�r weitere Informationen',
'contact_us'        => 'Bitte <a href="%s">kontaktieren Sie uns</a> f�r weitere Informationen',
'rem_subject'       => "Eine Veranstaltungs-Erinnerung von {$_CONF['site_name']}",
'rem_msg1'          => "Sie erhalten diese Erinnerung, weil Sie Ihre E-Mail Adresse auf {$_CONF['site_name']} eingetragen haben.",
'rem_msg2'			=> 'Dies ist eine einmalige Nachricht. Sie erhalten keine weitere Nachricht mehr sofern Sie sich f�r keine weiteren Veranstaltungen eingetragen haben.',
'rem_url'           => 'F�r mehr Informationen besuche bitte %s',
'you_are_subscribed' => 'Sie sind bereits eingetragen',
'topic_all'         => 'Alle',
'topic_home'        => 'Nur auf der Startseite',
'recur_stop_desc'   => ' bis %s',
'recur_freq_txt'	=> 'Intervall: Wiederholen nach',
'interval_label'    => 'Geben Sie einen Tag und einen Intervall f�r die Wiederholungen an',
'interval_note'     => 'Die erste Wiederholungen wird an, bzw. nach dem, oben angegebenen Datum-Beginn liegen.',
'all_calendars'     => 'Alle Kalender',
'all_categories'    => 'Alle Kategorien',
'update_cats'       => 'Kategorien aktualisieren',
'notify_submission' => 'Eine neu Veranstaltung wurde eingesendet. Weiter Details finden Sie hier: {$_CONF[\'site_admin_url\']}/moderation.php.',
'submitted_by'      => 'Eingesendet von',
'notify_subject'    => 'Veranstaltungs-Erinnerung von $_CONF[\'site_name\']',
'show_contactlink'  => 'Zeige Kontakt E-Mail',
'no_match'          => 'Es gibt keine Ereignisse, die Ihren Kriterien entsprechen.',
'event_begins'      => 'Dieses Ereignis beginnt: %s',
'read_more'         => 'Mehr lesen',
'quick_del'         => 'Schnelll�schen',
'gen_evt_info'      => 'Allgemeine Veranstaltungs-Information',
'full_desc'         => 'Volle Beschreibung',
'postmode'          => 'Beitragsmodus',
'post_html_note1'   => 'HINWEIS: Das <i>Veranstaltungs-Ort</i> Feld akzeptiert auch HTML.',
'enable_reminders_q' => 'E-Mail Erinnerungen:',
'disable_reminders_note' => 'HINWEIS: Wenn Sie Erinnerungen deaktivieren, werden alle gespeicherten Erinnerungen gel�scht.',
'submit_email_note' => 'Geben Sie Ihre E-Mail-Adresse ein, um an diese Veranstaltung erinnert zu werden.',
'add_to_cats'       => 'F�gen Sie Ihre Veranstaltung einer einzelnen oder mehreren Kategorien hinzu',
'cats_not_req'      => 'Das Hinzuf�gen Ihrer Veranstaltung zu einer Kategorie, ist nicht zwingend notwendig.',
'cat_note1'         => 'W�hlen Sie vorhandene Kategorien aus und/oder erstellen Sie eine neue Kategorie f�r Ihre Veranstaltung.',
'url'               => 'URL',
'street_address'    => 'Strasse',
'city'              => 'Stadt',
'state'             => 'Bundesland',
'country'           => 'Land',
'zip'               => 'Postleitzahl',
'for_more_info'     => 'Kontakt-Person:',
'email'             => 'Kontakt E-Mail:',
'phone'             => 'Kontakt Tel.Nr.:',
'perms_desc'        => 'Berechtigungen: (R = Lesen, E = Bearbeiten, setzt Lese-Bereichtigung voraus)',
'date_time_info'    => 'Datum und Uhrzeit',
'split_q'           => 'Veranstaltung aufteilen?',
'rec_event_info'    => 'Veranstaltungs-Wiederholungen',
'rec_event_q'       => 'Wiederholende Veranstaltung?',
'event_recurs'      => 'Veranstaltung wiederholt sich',
'select_format'     => 'Format w�hlen',
'jump_today'        => 'Gehe zu Heute',
'day_view'          => 'Tages-Ansicht',
'week_view'         => 'Wochen-Ansicht',
'month_view'        => 'Monts-Ansicht',
'year_view'         => 'Jahres-Ansicht',
'list_view'         => 'Listen-Ansicht',
'select_range'      => 'W�hle einen Zeitraum zum Anzeigen',
'or_choose_cat'     => 'und/oder w�hle eine Kategorie',
'go'                => 'Los',
'days_prior'        => 'Tage vor diesem Ereignis.',
'email_private'     => 'Ihre E-Mail bleibt privat und wird nur zu Erinnerung an diese Veranstaltung verwendet.',
'current_events'    => 'Aktuelle Veranstaltungen',
'past_events'       => 'Vergangene Veranstaltungen',
'upcoming_events'   => 'Bevorstehende Veranstaltungen',
'this_week_events'  => 'Veranstaltungen dieser Woche',
'this_month_events' => 'Veranstaltungen dieses Monats',
'hits'              => 'Treffer',
'top_ten'           => 'Top 10 Veranstaltungen',
'no_events_viewable' => 'Derzeit sind keine Veranstaltungen anzeigbar.',
'date'              => 'Datum',
'time'				=> 'Zeit',
'all_upcoming'      => 'Alle bevorstehenden Veranstaltungen',
'subscribe_to'      => 'Anmelden f�r',
'messages'          => array(
				1   => 'Erfolg! Ihre Veranstaltung wurde gel�scht.',
				2   => 'Erfolg! Ihre Veranstaltung wurde gespeichert.',
				3   => 'Ihre Veranstaltung wurde kopiert. Sie k�nnen nun Ihre neue Veranstaltung bearbeiten.',
				4   => 'Erfolg! Ihre Veranstaltung wurde aktualisiert.',
				5   => 'Ben�tigte Felder sind leer. Bitte �berpr�fe Sie Ihre Einsendung.',
				6   => 'Alarm!',
				7   => 'evList-Standard-Einstellungen wurden gesetzt.',
				8   => 'evList-Konfigurations-Einstellungen wurden aktualisiert.',
				9   => "{$_CONF['site_name']} bedankt sich f�r Ihre Einsendung. Unser Team wurde benachrichtigt und wird demn�chst Ihre Einsendung �berpr�fen. Wenn Ihre Einsendung best�tigt wurde, wird Ihre Veranstaltung anderen zug�nglich sein.",
				10  => 'Eingegebene Daten sind ung�ltig. Bitte �berpr�fen Sie Ihre Einsendung und versuchen Sie es nochmal.',
				11  => 'Kategorien wurde aktualisiert.',
				12  => 'Veranstaltungs-Erinnerung wurde gespeichert. Sie werden vor dieser Veranstaltung eine E-Mail erhalten.',
				13  => 'Sie haben eine ung�ltige oder falsch formatierte E-Mail Adresse angegeben. Bitte versuchen Sie es erneut.',
				14  => 'Sie m�ssen angeben, wieviele Tage vor der Veranstaltung Sie erinnert werden m�chten',
				15  => "Sie m�ssen {$_EV_CONF['reminder_speedlimit']} Sekunden warten zwischen dem Anfordern von Erinnerungen.",
				16  => "Sie m�ssen {$_EV_CONF['post_speedlimit']} Sekunden warten zwischen dem Einsenden von Veranstaltungen.",
				17  => 'Die Veranstaltungen des glFusion Kalenders wurden importiert',
				18  => 'Veranstaltungs-Erinnerung wurde erfolgreich gel�scht',
				19  => 'Ein oder mehrere Fehler traten w�hrend des Kalender-Imports auf. �berpr�fen Sie die Datei "error.log" f�r weitere Details.',
				20  => 'Diese Veranstaltung erlaubt keine Registrierung, oder Sie haben keinen Berechtigung dazu.',
				21  => 'Sie sind bereits f�r diese Veranstaltung angemeldet.',
				22  => 'Diese Veranstaltung ist voll.',
				23  => 'W�hrend ihrer Anfrage ist ein Fehler aufgetreten.',
				24  => 'Sie wurden f�r diese Veranstaltung registriert.',
				25  => 'Ihre Reservierung wurde storniert.',
				26  => 'Eine Zahlung ist erforderlich, klicken Sie <a href="%s">hier</a> f�r weiter Details.',
				27  => 'Diese Veranstaltung ist voll, Sie wurden zur Warteliste hinzugef�gt',
				28  => 'Sie haben noch %d Tickets �brig.',
				50  => 'Nicht bezahlt',
				51  => 'Bereits benutzt',
    ),
'admin_instr'			=> array(
		'categories'	=> '<ul><li>Beim L�schen von Kategorien werden Veranstaltungen, die zu diesen Kategorien geh�ren, nicht gel�scht.</li><li>Die Deaktivierung einer Kategorie wird ihre Veranstaltungen nicht deaktivieren.</li><li>Diese Veranstaltung werden weiterhin in der Veranstaltungs-Liste erscheinen, wenn sie einer anderen Kategorie angeh�ren oder wenn keine Kategorie ausgew�hlt wurde.</li></ul>',
			'calendars'	=> '<ul><li>Alle Ereignisse m�ssen mit einem Kalender verkn�pft sein.</li><li>Deaktivieren eines Kalenders verhindert, dass seine Veranstaltungen angezeigt werden.</li><li>Beim l�schen eines Kalenders m�ssen die zugeh�rigen Veranstaltungen in einen anderen Kalender verschoben werden.</li><li>Kalendernummer 1 kann nicht gel�scht werden, kann aber deaktiviert werden.</li></ul>',
			'events'	=> '<ul><li>Um eine neue Veranstaltung zu erstellen, klicken Sie oben auf "Neue Veranstaltung".</li><li>Um eine Veranstaltung zu �ndern oder zu l�schen, klicken Sie unten auf das entsprechende Bearbeitungssymbol der Veranstaltung.</li><li>Um eine Veranstaltung zu aktivieren oder zu deaktivieren, markieren Sie das entsprechende K�stchen unten.</li></ul>',
		'tickettypes'	=> '<ul><li>Eintrittskarten k�nnen f�r kostenlose oder kostenpflichtige Eintritte erstellt werden und entweder f�r eine Veranstaltung oder f�r all seine Wiederholungen (Saisonkarte) vergeben werden.</li><li>Tickets werden nur verwendet, wenn die globale Einstellung "Tickets und Reservierung" aktiviert ist.</li><li>Ticket-Kategorien k�nnen nur gel�scht werden, wenn sie nicht f�r Veranstaltungen verwendet wurden.</li></ul>',
    ),
'rec_formats'       => array(
					1   => 'T�glich neu im bestimmten Zeitraum (z.B. von 4. Mai bis 7. Mai)',
					2   => 'Monatlich nach Tag (z.B. der erste und vierte Tag im Monat)',
					3   => 'J�hrlich nach Datum (z.B. der 25. Dezember im Jahr)',
					4   => 'W�chentlich nach Wochen-Tag (z.B. Montag, Dienstag und Freitag)',
					5   => 'Monatlich nach Wochen-Tag (z.B. der dritte Freitag des Monats)',
					6   => 'Benutzerdef. Daten: ein Liste mit Kalenderdaten, mit Komma getrennt',
    ),
'rec_periods'       => array(
					1	=> 'Tag(e)',
					2	=> 'Monat(e)',
					3	=> 'Jahr(e)',
					4	=> 'Woche(n)',
					5	=> 'Monat(e)',
					6	=> '',
    ),

'postmodes'         => array(
			'plaintext'	=> 'Text',
			'text'		=> 'HTML',
    ),
'rec_intervals'     => array(
					1   => 'Erster',
					2   => 'Zweiter',
					3   => 'Dritter',
					4   => 'Vierter',
					5   => 'Letzter',
    ),
'ranges'            => array(
					1   => 'Vergangen',
					2   => 'Bevorstehend',
					3   => 'Diese Woche',
					4   => 'Diesen Monat',
    ),
'recur_desc'        => array(
					1   => 'T�glich',
					2   => 'Bestimmter Tag jedes Monats',
					3   => 'Bestimmtes Datum jedes Jahres',
					4   => 'Jede %interval% Woche am %day%',
					5   => 'Jedes %interval% Monat am %daynum% %day%',
					6   => '',      // custom dates
    ),
'periods'           => array(
				'day'   => 'Tages-Ansicht',
				'week'  => 'Wochen-Ansicht',
				'month' => 'Monats-Ansicht',
				'year'  => 'Jahres-Ansicht',
    ),
'on_days'				=> 'am %s',
'on_the_days'			=> 'an dem %s',
'each'					=> 'jeden',
'every_num'				=> 'jeden %d',
'event_editor'			=> 'Veranstaltungs-Editor',
'datestart_note'		=> '* Tag, Jahr und Monat sind ben�tige Felder.',
'custom_label'			=> 'W�hle %s f�r die %s Wiederholungen',
'stop_label'			=> 'W�hle %s nach dem es keine %s Wiederholungen mehr gibt',
'day_by_date'			=> 'ein Datum',
'dates'					=> 'die Daten',
'year_and_month'		=> 'Jahr und Monat',
'year'					=> 'Jahr',
'days_of_week'			=> 'die Wochen-Tage und einen Intervall',
'date_l'				=> 'Datum',
'if_any'				=> ', wenn �berhaupt,',
'all_day_event'			=> 'Dies ist eine Ganztages-Veranstaltung',
'more_from_cat'			=> 'Mehr Ereignisse von:&nbsp;',
'access_denied_msg'		=> 'Nur authorisierte Benutzer haben Zugriff auf diese Seite. Ihr Benutzername und Ihre IP wurden aufgezeichnet.',
'coordinates'			=> 'Koordinaten',
'latitude'				=> 'Breitengrad',
'longitude'				=> 'L�ngengrad',
'instr_coords'			=> 'Wenn Null oder leer, werden die Koordinaten, wenn m�glich, automatisch aus den Adressinformationen generiert.',
'select_location'		=> 'Veranstaltungs-Ort:',
'instr_sel_loc'			=> 'W�hlen Sie einen Standort aus der Liste aus oder geben Sie unten die Daten ein.',
'use_rsvp'				=> 'Erlaube Reservierungen',
'max_rsvp'				=> 'Max. Teilnehmer',
'max_user_rsvp'			=> 'Max. Reservierungen pro Benutzer',
'signup'				=> 'Ticket f�r diese Veranstaltung reservieren',
'cancelreg'				=> 'Reservierung stornieren',
'rsvp_none'				=> 'Reservierungen Deaktivieren',
'rsvp_event'			=> 'Reservierungen Ativieren',
'rsvp_repeat'			=> 'Reservierungen f�r Wiederholungen',
'rsvp_mindays'			=> 'Min. Tage f�r Teilnahme-Best�tigung',
'admin_rsvp'			=> 'Reservierungen verwalten',
'rsvp_date'				=> 'Reservierungs-Datum',
'registration'			=> 'Reservierung',
'rsvp_waitlist'			=> 'Wartelisten f�r Reservierungen aktivieren?',
'rsvp_cutoff'			=> 'Reservierung m�glich bis (Tage) vor Veranstaltung',
'sel_monthdays'			=> 'W�hlen Sie die Tage im Monat und den Intervall, an denen sich die Veranstaltung wiederholt',
'sub_this_instance'		=> 'Diese Wiederholung',
'sub_all_instances'		=> 'Alle Wiederholungen',
'description'			=> 'Beschreibung',
'event_pass'			=> 'Saisonkarte',
'cancel_free'			=> 'Kostenlose Reservierungen k�nnen hier storniert werden, wenn Sie nicht mehr dabei sein wollen.',
'free_rsvp'				=> 'Kostenlose Reservierung',
'ticket_num'			=> 'Ticket-Nummer',
'date_used'				=> 'Eingel�st am',
'paid'					=> 'Bezahlt',
'balance_due'			=> 'Offener Rechnungsbetrag',
'login_to_register'		=> 'Sie m�ssen sich auf der Website anmelden, um sich f�r diese Veranstaltung anmelden zu k�nnen',
'conf_reset'			=> 'Sind Sie sicher, dass Sie diesen Eintrag zur�cksetzen m�chten?',
'reset_usage'			=> 'Verwendung zur�cksetzen',
'export_list'			=> 'List exportieren',
'waitlisted'			=> 'Warteliste',
'name'					=> 'Name',
'quantity'				=> 'Anzahl',
'edit_future'			=> 'Diese und weitere Wiederholungen bearbeiten',
'editing_future'		=> 'Sie bearbeiten alle zuk�nftigen Wiederholungen dieser Veranstaltung.',
'clk_help'				=> 'F�r Hilfe hier klicken',
'all'					=> 'Alle',
'sel_category'			=> 'Kategorie w�hlen',
'click_for_datepicker'	=> 'F�r Datums-Auswahl hier klicken',
'paid_only'				=> 'Bezahlt',
'paid_or_unpaid'		=> 'Bezahlt & Unbezahlt',
'register'				=> 'Reservieren',
'allow_ticket_printing'	=> 'Erlaube Ticket drucken',
);

// Localization of the Admin Configuration UI
$LANG_configsections['evlist'] = array(
    'label'                 => 'evList',
    'title'                 => 'evList-Konfiguration'
);
$LANG_confignames['evlist'] = array(
    'allow_anon_view'       => 'Anzeige f�r G�sten erlauben',
    'allow_anon_add'        => 'Gast-Einsendungen erlauben',
    'allow_user_add'        => 'Benutzer-Einsendungen erlauben',
    'can_add'               => 'Einsendungen erlauben f�r',
    'allow_html'            => 'Erlaube HTML beim Schreiben',
    'usermenu_option'       => 'Benutzer-Men�eintrag',
    'enable_menuitem'       => 'Men�-Eintrag erstellen',
    'week_begins'           => 'Woche beginnt am',
    'date_format'           => 'Datumsformat',
    'time_format'           => 'Zeitformat',
    'enable_categories'     => 'Kategorien aktivieren',
    'enable_centerblock'    => 'Zentrumsblock aktivieren',
    'pos_centerblock'       => 'Zentrumsblock-Position',
    'topic_centerblock'     => 'Zentrumsblock-Kategorie',
    'range_centerblock'     => 'Zentrumsblock-Zeitraum',
    'limit_centerblock'     => 'Zentrumsblock-Eintr�ge',
    'limit_list'            => 'Hauptliste-Eintr�ge je Seite',
    'limit_block'           => 'Eintr�ge Bevorstehend-Block',
    'limit_summary'         => 'Max. Zeichen f�r Zusammenfassung',
    'enable_reminders'      => 'E-Mail-Erinnerungen aktivieren',
    'event_passing'         => 'Nicht mehr "Bevorstehend"',
    'default_permissions'   => 'Standard-Rechte (Eigent�mer,Gruppe,Benutzer,Gast)',
    'reminder_speedlimit'   => 'Erinnerungen-Wartezeit',
    'post_speedlimit'       => 'Beitr�ge-Wartezeit',
    'reminder_days'         => 'Anzahl der Tage vor einem Ereignis, um Erinnerungen zu erlauben',
    'displayblocks'         => 'Bl�cke anzeigen',
    'default_view'          => 'Standart-Ansicht',
    'max_upcoming_days'     => 'Max. Tage f�r Bevorstehend',
    'use_locator'           => 'Locator-Plugin integrieren',
    'use_weather'           => 'Wetter-Plugin integrieren',
    'cal_tmpl'              => 'HTML oder JSON Templates',
    'enable_rsvp'           => 'Tickets und Reservierung aktivieren',
    'rsvp_print'            => 'Tickets drucken aktivieren',
    'meetup_key'            => 'Meetup API Key',
    'meetup_gid'            => 'Meetup Group ID(s)',
    'meetup_cache_minutes'  => 'Meetup zwischenspeichern (Minuten)',
    'meetup_enabled'        => 'Meetup.com integrieren',
);
$LANG_configsubgroups['evlist'] = array(
    'sg_main'               => 'Haupteinstellungen',
    'sg_rsvp'               => 'Tickets und Reservierung',
    'sg_integ'              => 'Erweiterungen',
);
$LANG_fs['evlist'] = array(
    'ev_access'             => 'Benutzer-Einstellungen',
    'ev_gui'                => 'Allgemeine-Einstellungen',
    'ev_centerblock'        => 'Zentrumsblock-Einstellungen',
    'ev_permissions'        => 'Standard-Berechtigungen',
    'ev_rsvp'               => 'Tickets und Reservierung',
    'ev_integ_meetup'       => 'Meetup.Com',
);
$LANG_configselects['evlist'] = array(
    0 => array('Ja' => 1, 'Nein' => 0),
    1 => array('Ja' => TRUE, 'Nein' => FALSE),
    2 => array('Keine' => 0, 'Veranstaltung hinzuf�gen' => 1, 'Veranstaltungs-Liste' => 2),
    3 => array('Sonntag' => 1, 'Montag' => 2),
    4 => array(
            'Don Nov 20, 2008'      => '%a %b %d, %Y',
            'Don Nov 20'            => '%a %b %d',
            'Donnerstag Nov 20, 2008' => '%A %b %d, %Y',
            'Donnerstag Nov 20'       => '%A %b %d',
            'Donnerstag November 20'  => '%A %B %d',
            'November 20, 2008'     => '%B %d, %Y',
            '11/20/08'              => '%m/%d/%y',
            '11-20-08'              => '%m-%d-%y',
            '2008 11 20'            => '%Y %m %d',
            'Nov 20 2008'           => '%b %d %Y',
            'Nov 20, 2008'          => '%b %d, %Y',
			'20 Nov. 2008'			=> '%d %b. %Y'
    ),
    5 => array('02:38 PM' => '%I:%M %p', '14:48' => '%H:%M',),
    6 => array(
            'sobald Uhrzeit-Beginn um ist (wenn vorhanden)' => 1,
            'sobald Datum-Beginn um ist (i.R. der n�chste Tag)' => 2,
            'sobald Uhrzeit-Ende um ist (wenn vorhanden)' => 3,
            'sobald Datum-Ende um ist' => 4,
        ),
    7 => array('Oben auf Seite'=>1,'Nach Hauptartikel'=>2,'Unten auf Seite'=>3,'Gesamte Seite'=>0),
    8 => array('Vergangen'=>1,'Bevorstehend'=>2,'Diese Woche'=>3,'Diesen Monat'=>4),
    9 => array('Deaktiviert' => 0, 'Tabelle' => 1, 'Artikel' => 2),
    12 => array('Kein Zugriff' => 0, 'Nur-Lesen' => 2, 'Lesen-Schreiben' => 3),
    13 => array('Linke Bl�cke' => 0, 'Rechte Bl�cke' => 1, 'Linke & Rechte Bl�cke' => 2, 'Keine' => 3),
    14 => array('Tages-Ansicht' => 'day', 'Wochen-Ansicht' => 'week', 'Monats-Ansicht' => 'month', 'Jahres-Ansicht' => 'year', 'Listen-Ansicht' => 'list'),
    15 => array('Nur Admins' => 0, 'Angemeldete Benutzer' => 1, 'Angemeldete Benutzer & G�ste' => 2),
    16 => array('HTML' => 'html', 'JSON' => 'json'),
    17 => array('Nein' => 0, 'Standart Nein' => 1, 'Standart Bezahlt' => 2, 'Standart Bezahlt & Unbezahlt' => 3),
);
?>
