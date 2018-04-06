<?php
// +--------------------------------------------------------------------------+
// | evList A calendar solution for glFusion                                  |
// +--------------------------------------------------------------------------+
// | german_formal_utf-8.php                                                  |
// |                                                                          |
// | German language file, addressing the user as "Sie"                       |
// | Modifiziert: August 09 Tony Kluever                                      |
// | Siegfried Gutschi (Mai 2017) <sigi AT modellbaukalender DOT info>        |
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
global $_EV_CONF;
global $_CONF;

$LANG_EVLIST = array(
'pi_title'          => 'Veranstaltungen',
'moderation_title'  => 'Veranstaltungs-Einsendungen',
'del_future'        => 'Diese und Zukünftige',
'conf_del_future'   => 'Sind Sie sicher, dass Sie diese und alle zukünftigen Wiederholungen dieser Veranstaltungs-Reihe löschen möchten?',
'del_all'           => 'Veranstaltungs-Reihe',
'conf_del_all'      => 'Sind Sie sicher, dass Sie diese Veranstaltungs-Reihe löschen möchten?',
'del_repeat'        => 'Diese Wiederholung',
'conf_del_repeat'   => 'Sind Sie sicher, dass Sie diese Wiederholungen löschen möchten?',
'conf_del_event'    => 'Sind Sie sicher, dass Sie diese Veranstaltungs-Reihe löschen möchten?',
'conf_del_item'     => 'Sind Sie sicher, dass Sie diesen Eintrag löschen möchten?',
'edit_repeat'       => 'Diese Wiederholung',
'edit_event'        => 'Veranstaltungs-Reihe',
'add_event'         => 'Veranstaltung hinzufügen',
'edit_calendar'     => 'Edit Calendar',
'err_missing_title' => '* <i>Veranstaltungs-Titel</i> ist ein benötigtes Feld.',
'err_missing_weekdays' => 'Sie müssen mindestens einen Tag für eine Wiederholung des Wochentags angeben.',
'err_times'         => 'Uhrzeit-Ende kann nicht vor Uhrzeit-Beginn sein.',
'err_db_saving'     => 'Beim Speichern des Datensatzes ist ein Datenbankfehler aufgetreten.',
'err_cal_import'    => 'Beim importieren aus dem Kalender gab es %d Fehler. Überprüfe die Datei "error.log" für weitere Informationen',
'err_import_event'  => 'Fehler beim importieren des Ereignisses %s',
'err_cal_notavail'  => 'Die Kalender-Daten stehen nicht zur Verfügung.',
'err_upd_repeats'   => 'Fehler beim Aktualisieren der Wiederholungen',
'info'              => 'Information',
'warning'           => 'Warnung',
'alert'             => 'Warnhinweis',
'editing_instance'  => 'Sie bearbeiten nur die aktuelle Wiederholung dieser Veranstaltungs-Reihe.',
'editing_series'    => 'Sie bearbeiten die gesamte Veranstaltungs-Reihe. Anpassungen an einzelnen Wiederholungen gehen verloren!',
'allday'            => 'Ganztägige Veranstaltung',
'recur_cust_format' => '(Format: JJJJ-MM-TT, JJJJ-MM-TT, etc.)',
'recur_cust_ignoredates' => '(Ignoriert das angegebene Datum Für Beginn und Ende)',
'click_to_select'   => 'Zum Auswählen klicken',
'access_denied'     => 'Zugriff verweigert',
'skip_weekends'     => 'Wochenenden überspringen?',
'yes'               => 'Ja',
'no'                => 'Nein',
'next_bus_day'      => 'Nächster Werktag?',
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
'select_cals'       => 'Wählen Sie, welche Kalender angezeigt werden sollen',
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
'required'          => 'Required',
'import'            => 'Import',
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
'reset'             => 'Zurücksetzen',
'del_cal_msg1'      => 'Sind Sie sicher, dass Sie diesen Kalender und alle dazugehörigen Veranstaltungen löschen möchten? Dies ist eine permanente Löschung und kann nicht rückgängig gemacht werden. Sie können aber zuvor noch vorhandene Veranstaltungen entweder in einen neuen Kalender verschieben oder diese Veranstaltungen löschen.',
'del_cal_events'    => 'In diesem Kalender sind %d Veranstaltungen eingetragen. Sie können diese Veranstaltungen verschieben, indem Sie unten einen neuen Kalender auswählen. Wenn Sie keinen neuen Kalender auswählen, werden ALLE Veranstaltungen dauerhaft aus der Datenbank gelöscht.',
'confirm_del'       => 'Bestätigen Sie, dass Sie diesen Eintrag löschen möchten',
'none_delete'       => 'Keiner - Veranstaltungen löschen',
'deleting_cal'      => 'Kalender löschen',
'filter'            => 'Filter',
'when'              => 'Wann',
'where'             => 'Wo',
'what'              => 'Was',
'more_info'         => 'Mehr Informationen',
'click_here'        => '<a href="%s" %s>Klicken Sie hier</a> für weitere Informationen',
'contact_us'        => 'Bitte <a href="%s">kontaktieren Sie uns</a> für weitere Informationen',
'rem_subject'       => "Eine Veranstaltungs-Erinnerung von {$_CONF['site_name']}",
'rem_msg1'          => "Sie erhalten diese Erinnerung, weil Sie Ihre E-Mail Adresse auf {$_CONF['site_name']} eingetragen haben.",
'rem_msg2'            => 'Dies ist eine einmalige Nachricht. Sie erhalten keine weitere Nachricht mehr sofern Sie sich für keine weiteren Veranstaltungen eingetragen haben.',
'rem_url'           => 'Für mehr Informationen besuche bitte %s',
'you_are_subscribed' => 'Sie sind bereits eingetragen',
'topic_all'         => 'Alle',
'topic_home'        => 'Nur auf der Startseite',
'recur_stop_desc'   => ' bis %s',
'recur_freq_txt'    => 'Intervall: Wiederholen nach',
'interval_label'    => 'Wähle Sie einen bestimmten Wochentag und den Intervall für die Wiederholungen',
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
'quick_del'         => 'Schnelllöschen',
'gen_evt_info'      => 'Allgemeine Veranstaltungs-Information',
'full_desc'         => 'Volle Beschreibung',
'postmode'          => 'Beitragsmodus',
'post_html_note1'   => 'HINWEIS: Das <i>Veranstaltungs-Ort</i> Feld akzeptiert auch HTML.',
'enable_reminders_q' => 'E-Mail Erinnerungen:',
'disable_reminders_note' => 'HINWEIS: Wenn Sie Erinnerungen deaktivieren, werden alle gespeicherten Erinnerungen gelöscht.',
'submit_email_note' => 'Geben Sie Ihre E-Mail-Adresse ein, um an diese Veranstaltung erinnert zu werden.',
'add_to_cats'       => 'Fügen Sie Ihre Veranstaltung einer einzelnen oder mehreren Kategorien hinzu',
'cats_not_req'      => 'Das Hinzufügen Ihrer Veranstaltung zu einer Kategorie, ist nicht zwingend notwendig.',
'cat_note1'         => 'Wählen Sie vorhandene Kategorien aus und/oder erstellen Sie eine neue Kategorie für Ihre Veranstaltung.',
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
'event_recurs'      => 'Art der Wiederholung',
'select_format'     => 'Format wählen',
'jump_today'        => 'Gehe zu Heute',
'day_view'          => 'Tages-Ansicht',
'week_view'         => 'Wochen-Ansicht',
'month_view'        => 'Monts-Ansicht',
'year_view'         => 'Jahres-Ansicht',
'list_view'         => 'Listen-Ansicht',
'select_range'      => 'Wähle einen Zeitraum zum Anzeigen',
'or_choose_cat'     => 'und/oder wähle eine Kategorie',
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
'time'                => 'Zeit',
'all_upcoming'      => 'Alle bevorstehenden Veranstaltungen',
'subscribe_to'      => 'Anmelden für',
'subscribe'     => 'Anmelden',
'messages'          => array(
                1   => 'Erfolg! Ihre Veranstaltung wurde gelöscht.',
                2   => 'Erfolg! Ihre Veranstaltung wurde gespeichert.',
                3   => 'Ihre Veranstaltung wurde kopiert. Sie können nun Ihre neue Veranstaltung bearbeiten.',
                4   => 'Erfolg! Ihre Veranstaltung wurde aktualisiert.',
                5   => 'Benötigte Felder sind leer. Bitte überprüfe Sie Ihre Einsendung.',
                6   => 'Alarm!',
                7   => 'evList-Standard-Einstellungen wurden gesetzt.',
                8   => 'evList-Konfigurations-Einstellungen wurden aktualisiert.',
                9   => "{$_CONF['site_name']} bedankt sich für Ihre Einsendung. Unser Team wurde benachrichtigt und wird demnächst Ihre Einsendung überprüfen. Wenn Ihre Einsendung bestätigt wurde, wird Ihre Veranstaltung anderen zugänglich sein.",
                10  => 'Eingegebene Daten sind ungültig. Bitte überprüfen Sie Ihre Einsendung und versuchen Sie es nochmal.',
                11  => 'Kategorien wurde aktualisiert.',
                12  => 'Veranstaltungs-Erinnerung wurde gespeichert. Sie werden vor dieser Veranstaltung eine E-Mail erhalten.',
                13  => 'Sie haben eine ungültige oder falsch formatierte E-Mail Adresse angegeben. Bitte versuchen Sie es erneut.',
                14  => 'Sie müssen angeben, wieviele Tage vor der Veranstaltung Sie erinnert werden möchten',
                15  => "Sie müssen {$_EV_CONF['reminder_speedlimit']} Sekunden warten zwischen dem Anfordern von Erinnerungen.",
                16  => "Sie müssen {$_EV_CONF['post_speedlimit']} Sekunden warten zwischen dem Einsenden von Veranstaltungen.",
                17  => 'Die Veranstaltungen des glFusion Kalenders wurden importiert',
                18  => 'Veranstaltungs-Erinnerung wurde erfolgreich gelöscht',
                19  => 'Ein oder mehrere Fehler traten während des Kalender-Imports auf. Überprüfen Sie die Datei "error.log" für weitere Details.',
                20  => 'Diese Veranstaltung erlaubt keine Registrierung, oder Sie haben keinen Berechtigung dazu.',
                21  => 'Sie sind bereits für diese Veranstaltung angemeldet.',
                22  => 'Diese Veranstaltung ist voll.',
                23  => 'Während ihrer Anfrage ist ein Fehler aufgetreten.',
                24  => 'Sie wurden für diese Veranstaltung registriert.',
                25  => 'Ihre Reservierung wurde storniert.',
                26  => 'Eine Zahlung ist erforderlich, klicken Sie <a href="%s">hier</a> für weiter Details.',
                27  => 'Diese Veranstaltung ist voll, Sie wurden zur Warteliste hinzugefügt',
                28  => 'Sie haben noch %d Tickets übrig.',
                50  => 'Nicht bezahlt',
                51  => 'Bereits benutzt',
    ),
'admin_instr'            => array(
        'categories'    => '<ul><li>Beim Löschen von Kategorien werden Veranstaltungen, die zu diesen Kategorien gehören, nicht gelöscht.</li><li>Durch deaktivieren einer Kategorie werden ihre Veranstaltungen nicht deaktiviert.</li><li>Veranstaltung ohne Kategorie erscheinen weiterhin in der Veranstaltungs-Liste.</li></ul>',
            'calendars'    => '<ul><li>Alle Ereignisse müssen mit einem Kalender verknüpft sein.</li><li>Wird ein Kalender deaktiviert, werden seine Veranstaltungen nicht mehr angezeigt.</li><li>Beim löschen eines Kalenders müssen die zugehörigen Veranstaltungen in einen anderen Kalender verschoben werden.</li><li>Kalendernummer 1 kann nicht gelöscht werden, kann aber deaktiviert werden.</li></ul>',
            'events'    => '<ul><li>Um eine neue Veranstaltung zu erstellen, klicken Sie oben auf "Neue Veranstaltung".</li><li>Um eine Veranstaltung zu ändern oder zu löschen, klicken Sie unten auf das entsprechende Bearbeitungssymbol der Veranstaltung.</li><li>Um eine Veranstaltung zu aktivieren oder zu deaktivieren, markieren Sie das entsprechende Kästchen unten.</li></ul>',
        'tickettypes'    => '<ul><li>Eintrittskarten können für kostenlose oder kostenpflichtige Eintritte erstellt werden und entweder für eine Veranstaltung oder für all seine Wiederholungen (Saisonkarte) vergeben werden.</li><li>Tickets werden nur verwendet, wenn die globale Einstellung "Tickets und Reservierung" aktiviert ist.</li><li>Ticket-Kategorien können nur gelöscht werden, wenn sie nicht für Veranstaltungen verwendet wurden.</li></ul>',
    ),
'rec_formats'       => array(
                    1   => 'Täglich NEU von - bis          (z.B. von 4. Mai bis 7. Mai jeden Tag NEU)',
                    2   => 'Bestimmte Tage im Monat        (z.B. der 1. und 15. Tag jedes Monats)',
                    3   => 'Bestimmter Tag im Jahr         (z.B. der 25. Dezember jedes Jahres)',
                    4   => 'Bestimmte Wochentage pro Woche (z.B. Montags und Freitags jeder Woche)',
                    5   => 'Bestimmter Wochentag pro Monat (z.B. der 3. Freitag jedes Monats)',
                    6   => 'Eine Liste mit Kalenderdaten   (z.B. 2017-11-23,2018-05-01,......)',
    ),
'rec_periods'       => array(
                    1    => 'Tag(e)',
                    2    => 'Monat(e)',
                    3    => 'Jahr(e)',
                    4    => 'Woche(n)',
                    5    => 'Monat(e)',
                    6    => '',
    ),

'postmodes'         => array(
            'plaintext'    => 'Text',
            'text'        => 'HTML',
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
                    1   => 'Täglich',
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
    'list'  => 'List',
    ),
'on_days'                => 'am %s',
'on_the_days'            => 'an dem %s',
'each'                    => 'jeden',
'every_num'                => 'jeden %d',
'event_editor'            => 'Veranstaltungs-Editor',
'datestart_note'        => '* Tag, Jahr und Monat sind benötige Felder.',
'custom_label'            => 'Wähle %s der %s Wiederholungen',
'stop_label'            => '%s nach dem es keine %s Wiederholungen mehr gibt',
'day_by_date'            => 'Datum',
'dates'                    => 'die Daten',
'year_and_month'        => 'Jahr und Monat',
'year'                    => 'Jahr',
'days_of_week'            => 'die Wochen-Tage und den Intervall',
'date_l'                => 'Datum',
'if_any'                => ', wenn überhaupt,',
'all_day_event'            => 'Dies ist eine Ganztages-Veranstaltung',
'more_from_cat'            => 'Mehr Ereignisse von:&nbsp;',
'access_denied_msg'        => 'Nur authorisierte Benutzer haben Zugriff auf diese Seite. Ihr Benutzername und Ihre IP wurden aufgezeichnet.',
'coordinates'            => 'Koordinaten',
'latitude'                => 'Breitengrad',
'longitude'                => 'Längengrad',
'instr_coords'            => 'Wenn Null oder leer, werden die Koordinaten, wenn möglich, automatisch aus den Adressinformationen generiert.',
'select_location'        => 'Veranstaltungs-Ort:',
'instr_sel_loc'            => 'Wählen Sie einen Standort aus der Liste aus oder geben Sie unten die Daten ein.',
'use_rsvp'                => 'Erlaube Reservierungen',
'max_rsvp'                => 'Max. Teilnehmer',
'max_user_rsvp'            => 'Max. Reservierungen pro Benutzer',
'signup'                => 'Ticket für diese Veranstaltung reservieren',
'cancelreg'                => 'Reservierung stornieren',
'rsvp_none'                => 'Reservierungen Deaktivieren',
'rsvp_event'            => 'Reservierungen Ativieren',
'rsvp_repeat'            => 'Reservierungen für Wiederholungen',
'rsvp_mindays'            => 'Min. Tage für Teilnahme-Bestätigung',
'admin_rsvp'            => 'Reservierungen verwalten',
'rsvp_date'                => 'Reservierungs-Datum',
'registration'            => 'Reservierung',
'rsvp_waitlist'            => 'Wartelisten für Reservierungen aktivieren?',
'rsvp_cutoff'            => 'Reservierung möglich bis (Tage) vor Veranstaltung',
'sel_monthdays'            => 'Wählen Sie die Tage im Monat und den Intervall der Wiederholungen.',
'sub_this_instance'        => 'Diese Wiederholung',
'sub_all_instances'        => 'Alle Wiederholungen',
'description'            => 'Beschreibung',
'event_pass'            => 'Saisonkarte',
'cancel_free'            => 'Kostenlose Reservierungen können hier storniert werden, wenn Sie nicht mehr dabei sein wollen.',
'free_rsvp'                => 'Kostenlose Reservierung',
'ticket_num'            => 'Ticket-Nummer',
'date_used'                => 'Eingelöst am',
'paid'                    => 'Bezahlt',
'balance_due'            => 'Offener Rechnungsbetrag',
'login_to_register'        => 'Sie müssen sich auf der Website anmelden, um sich für diese Veranstaltung anmelden zu können',
'conf_reset'            => 'Sind Sie sicher, dass Sie diesen Eintrag zurücksetzen möchten?',
'reset_usage'            => 'Verwendung zurücksetzen',
'export_list'            => 'List exportieren',
'waitlisted'            => 'Warteliste',
'name'                    => 'Name',
'quantity'                => 'Anzahl',
'edit_future'            => 'Diese und Zukünftige',
'editing_future'        => 'Sie bearbeiten diese und alle zukünftigen Wiederholungen dieser Veranstaltungs-Reihe.',
'clk_help'                => 'Für Hilfe hier klicken',
'all'                    => 'Alle',
'sel_category'            => 'Kategorie wählen',
'click_for_datepicker'    => 'Für Datums-Auswahl hier klicken',
'paid_only'                => 'Bezahlt',
'paid_or_unpaid'        => 'Bezahlt & Unbezahlt',
'register'                => 'Reservieren',
'allow_ticket_printing'    => 'Erlaube Ticket drucken',
'enable_comments'        => 'Kommentare erlauben?',
'closed'                => 'Geschlossen',
'event'                    => 'Veranstaltung',
'timezone'                => 'Zeitzone',
'tz_local'                => 'Benutzer-Zeitzone',
'tz_select'                => 'Wähle Zeitzone',
'msg_item_updated' => 'Eintrag wurde aktualisiert',
'msg_item_nochange' => 'Eintrag wurde nicht geändert',
'print'         => 'Print',
'instr_import_cal' => 'Import calendar events from the glFusion Calendar plugin into Evlist. This function should normally be used only once, but events with the same event ID are not imported to guard against duplicates.',
'sample'        => 'Sample',
'icon'          => 'Icon',
);

$LANG_EVLIST_HELP = array(
'calendar' => 'Select the calendar where this event will appear. Calendars can be included or excluded from views and feeds.',
'ev_title' => 'Enter the title for this event. This text will appear in most calendars as a hover link to the event summary.',
'ev_summary' => 'Enter a fairly short description of the event. This will appear on the event display, and also when a user hovers the mouse over the event title in calendar views.',
'ev_dscp' => 'Enter an optional detailed description of this event. This text appears only on the event detail page.',
'ev_url' => 'Enter an optional URL for the event, such as a link to a site article or an external web page.',
'ev_enabled' => 'Check this box to enable the event. Events can be temporarily hidden from view without deleting them.',
'ena_reminders' => 'If this box is checked, users can enter an email address to have a reminder sent to them a number of days before the event.',
'sel_categories' => 'Categories are optional and a way to relate events together. Select one or more existing categories by checking their checkboxes, or create a new category by entering some text in the provided field.',
'split' => 'Check this box if the event is split into two times each day, e.g. 9:00am - 11:00am and 1:00pm - 4:00pm. If this box is checked, additional fields will appear where you can enter the starting and ending times for the second session.',
'startdt' => 'Enter the start date either by entering the text as a SQL-formatted date (YYYY-MM-DD), or by clicking the calendar icon and browsing to the date. Select the starting time by using the dropdown selections.',
'enddt' => 'Enter the ending date either by entering the text as a SQL-formatted date (YYYY-MM-DD), or by clicking the calendar icon and browsing to the date. Select the ending time by using the dropdown selections.',
'timezone' => 'If the &quot;local timezone&quot; checkbox is unchecked, you can select a timezone for this event which will be displayed next to the date/time information. If the local timezone is checked then no timezone will be shown; this is the same as previous versions of evList.',
'cal_name' => 'Enter a name for this calendar. Names should be unique.',
'cal_colors' => 'Select the foreground and background colors used to display events for this calendar within calendar views',
'cal_icon' => 'Enter the name of a UIKit icon to be shown with events in this calendar. Enter only the icon name, e.g. &quot;circle&quot;',
'cal_enabled' => 'Check to enable this calendar. Disabled calendars will not show in views nor in the event submittion form.',
'cal_ical_ena' => 'Check to allow ICal subscriptions to this calendar.',
'owner' => 'Select the owner for this item.',
'group' => 'Select the group associated with this item',
'perms' => 'Set the permissions for this item.',
);

// Localization of the Admin Configuration UI
$LANG_configsections['evlist'] = array(
    'label'                 => 'evList',
    'title'                 => 'evList-Konfiguration'
);
$LANG_confignames['evlist'] = array(
    'allow_anon_view'       => 'Anzeige für Gästen erlauben',
    'allow_anon_add'        => 'Gast-Einsendungen erlauben',
    'allow_user_add'        => 'Benutzer-Einsendungen erlauben',
    'can_add'               => 'Einsendungen erlauben für',
    'allow_html'            => 'Erlaube HTML beim Schreiben',
    'usermenu_option'       => 'Benutzer-Menüeintrag',
    'enable_menuitem'       => 'Menü-Eintrag erstellen',
    'week_begins'           => 'Woche beginnt am',
    'date_format'           => 'Datumsformat',
    'time_format'           => 'Zeitformat',
    'enable_categories'     => 'Kategorien aktivieren',
    'enable_centerblock'    => 'Zentrumsblock aktivieren',
    'pos_centerblock'       => 'Zentrumsblock-Position',
    'topic_centerblock'     => 'Zentrumsblock-Kategorie',
    'range_centerblock'     => 'Zentrumsblock-Zeitraum',
    'limit_centerblock'     => 'Zentrumsblock-Einträge',
    'limit_list'            => 'Hauptliste-Einträge je Seite',
    'limit_block'           => 'Einträge Bevorstehend-Block',
    'limit_summary'         => 'Max. Zeichen für Zusammenfassung',
    'enable_reminders'      => 'E-Mail-Erinnerungen aktivieren',
    'event_passing'         => 'Nicht mehr "Bevorstehend"',
    'default_permissions'   => '(Eigentümer,Gruppe,Benutzer,Gast)',
    'reminder_speedlimit'   => 'Erinnerungen-Wartezeit',
    'post_speedlimit'       => 'Beiträge-Wartezeit',
    'reminder_days'         => 'Anzahl der Tage vor einem Ereignis, um Erinnerungen zu erlauben',
    'displayblocks'         => 'Blöcke anzeigen',
    'default_view'          => 'Standart-Ansicht',
    'max_upcoming_days'     => 'Max. Tage für Bevorstehend',
    'use_locator'           => 'Locator-Plugin integrieren',
    'use_weather'           => 'Wetter-Plugin integrieren',
    'enable_rsvp'           => 'Tickets und Reservierung aktivieren',
    'rsvp_print'            => 'Tickets drucken aktivieren',
    'meetup_key'            => 'Meetup API Key',
    'meetup_gid'            => 'Meetup Group ID(s)',
    'meetup_cache_minutes'  => 'Meetup aktualisieren (Minuten)',
    'meetup_enabled'        => 'Meetup.com integrieren',
    'commentsupport'        => 'Kommentare erlauben?',
    'ticket_format'         => 'Ticket Format String',
    'pi_cal_map'            => 'Plugin-Calendar Mapping',
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
    'ev_integ_other'        => 'Other',
);
$LANG_configselects['evlist'] = array(
    0 => array('Ja' => 1, 'Nein' => 0),
    1 => array('Ja' => TRUE, 'Nein' => FALSE),
    2 => array('Keine' => 0, 'Veranstaltung hinzufügen' => 1, 'Veranstaltungs-Liste' => 2),
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
            '20 Nov. 2008'            => '%d %b. %Y'
    ),
    5 => array('02:38 PM' => '%I:%M %p', '14:48' => '%H:%M',),
    6 => array(
            'sobald Uhrzeit-Beginn um ist (wenn vorhanden)' => 1,
            'sobald Datum-Beginn um ist (i.R. der nächste Tag)' => 2,
            'sobald Uhrzeit-Ende um ist (wenn vorhanden)' => 3,
            'sobald Datum-Ende um ist' => 4,
        ),
    7 => array('Oben auf Seite'=>1,'Nach Hauptartikel'=>2,'Unten auf Seite'=>3,'Gesamte Seite'=>0),
    8 => array('Vergangen'=>1,'Bevorstehend'=>2,'Diese Woche'=>3,'Diesen Monat'=>4),
    9 => array('Deaktiviert' => 0, 'Tabelle' => 1, 'Artikel' => 2, 'Kalender' => 3),
    12 => array('Kein Zugriff' => 0, 'Nur-Lesen' => 2, 'Lesen-Schreiben' => 3),
    13 => array('Linke Blöcke' => 0, 'Rechte Blöcke' => 1, 'Linke & Rechte Blöcke' => 2, 'Keine' => 3),
    14 => array('Tages-Ansicht' => 'day', 'Wochen-Ansicht' => 'week', 'Monats-Ansicht' => 'month', 'Jahres-Ansicht' => 'year', 'Listen-Ansicht' => 'list'),
    15 => array('Nur Admins' => 0, 'Angemeldete Benutzer' => 1, 'Angemeldete Benutzer & Gäste' => 2),
    16 => array('HTML' => 'html', 'JSON' => 'json'),
    17 => array('Nein' => 0, 'Standart Nein' => 1, 'Standart Bezahlt' => 2, 'Standart Bezahlt & Unbezahlt' => 3),
);
?>
