<?php
// +--------------------------------------------------------------------------+
// | evList A calendar solution for glFusion                                  |
// +--------------------------------------------------------------------------+
// | english_utf-8.php                                                        |
// |                                                                          |
// | English language file for evList                                         |
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
*   English language file for the evList plugin
*   @package    evlist
*/
// this file can't be used on its own
if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

$LANG_EVLIST = array(
'pi_title'          => 'Event Calendar',
'moderation_title'  => 'Event Submissions',
'del_future'        => 'Delete this and future instances',
'conf_del_future'   => 'Are you sure you want to delete all future instances of this event?',
'edit_future'       => 'Edit this and future instances',
'del_all'           => 'Delete this event',
'conf_del_all'      => 'Are you sure you want to delete all occurences of this event?',
'del_repeat'        => 'Delete this occurence',
'conf_del_repeat'   => 'Are you sure you want to delete this occurence?',
'conf_del_event'    => 'Are you sure you want to delete this event?',
'conf_del_item'     => 'Are you sure you want to delete this item?',
'edit_repeat'       => 'Edit this instance',
'edit_event'        => 'Edit Event',
'add_event'         => 'Add Event',
'err_missing_title' => 'A title is required.',
'err_missing_weekdays' => 'You must specify at least one day for a day-of-week recurrence.',
'err_times'         => 'The ending time cannot be before the starting time.',
'err_db_saving'     => 'A database error occurred while saving your record.',
'err_cal_import'    => 'There were %d errors importing from the calendar. Check your error log for details',
'err_import_event'  => 'Error importing event %s',
'err_cal_notavail' => 'The calendar plugin data is not available.',
'info'              => 'Information',
'warning'           => 'Warning',
'alert'             => 'Alert',
'editing_instance'  => 'You are editing a single instance of this event.',
'editing_future'    => 'Your are editing all future instances of this event.',
'editing_series'    => 'You are editing the event series.  Any customizations made to specific instances will be lost!',
'allday'            => 'All Day',
'recur_cust_format' => '(Format: YYYY-MM-DD, YYYY-MM-DD, etc.).',
'recur_cust_ignoredates' => '(Ignores the start and end dates given above.)',
'click_to_select'   => 'Click to select',
'access_denied'     => 'Access Denied',
'skip_weekends'     => 'Skip weekends?',
'yes'               => 'Yes',
'no'                => 'No',
'next_bus_day'      => 'Next business day',
'edit'              => 'Edit',
'event_title'       => 'Event Title',
'event_summary'     => 'Event Summary',
'start_date'        => 'Start Date',
'start_time'        => 'Start Time',
'end_time'          => 'End Time',
'end_date'          => 'End Date',
'copy'              => 'Copy',
'id'                => 'ID',
'enabled'           => 'Enabled',
'enabled_q'         => 'Enabled?',
'ical_enabled'      => 'ICal Enabled',
'calendar'          => 'Calendar',
'calendars'         => 'Calendars',
'select_cals'       => 'Select which calendars will be displayed',
'new_calendar'      => 'New Calendar',
'events'            => 'Events',
'new_event'         => 'New Event',
'categories'        => 'Categories',
'category'          => 'Category',
'new_category'      => 'New Category',
'ticket_types'      => 'Ticket Types',
'type'              => 'Type',
'fee'               => 'Fee',
'new_ticket_type'   => 'New Ticket Type',
'print_tickets'     => 'Print Tickets',
'import_calendar'   => 'Import from Calendar',
'import_from_csv'   => 'Import from CSV',
'title'             => 'Title',
'ev_info'           => 'Event Information',
'ev_schedule'       => 'Schedule',
'ev_perms'          => 'Permissions',
'ev_contact'        => 'Contact',
'ev_location'       => 'Location',
'show_upcoming'     => 'Show in Upcoming Events',
'misc'              => 'Miscellaneous',
'foreground'        => 'Foreground',
'background'        => 'Background',
'colors'            => 'Colors',
'cal_name'          => 'Calendar Name',
'cat_name'          => 'Category Name',
'reset'             => 'Reset Form',
'del_cal_msg1'      => 'You are about to delete a calendar.  This is a permanent deletion and cannot be reversed.  Be sure that this is what you want to do before you click "Submit" below!
You may either move existing events to a new calendar, or delete those events.',
'del_cal_events'    => 'This calendar has %d events associated with it.  You may move these events to another calendar by selecting one below.  If you do not select a new calendar for the events, they will ALL be permanently deleted from the database.',
'confirm_del'       => 'Confirm that you want to delete the item',
'none_delete'       => 'None- delete the events',
'deleting_cal'      => 'Deleting Calendar',

'rec_formats'       => array (
    1   => 'Daily by date, e.g., April 4 thru April 7 (sequential)',
    2   => 'Monthly by date (the same dates each month)',
    3   => 'Yearly by date, e.g., December 25th year after year',
    4   => 'Weekly by day, e.g., Mon, Wed, and Fri',
    5   => 'Monthly by day, e.g., the 3rd Friday of each month',
    6   => 'Custom dates: a comma-delimited list of calendar dates',
    ),

'rec_periods'       => array(
    1 => 'day',
    2 => 'month',
    3 => 'year',
    4 => 'week',
    5 => 'month',
    6 => '',
    ),

'postmodes' => array (
    'plaintext' => 'plaintext',
    'html'      => 'html',
    ),

'rec_intervals'     => array (
    1   => 'First',
    2   => 'Second',
    3   => 'Third',
    4   => 'Fourth',
    5   => 'Last',
    ),

'ranges'            => array (
    1   => 'Past',
    2   => 'Upcoming',
    3   => 'This Week',
    4   => 'This Month',
    ),

'periods'           => array(
    'day'   => 'Day',
    'week'  => 'Week',
    'month' => 'Month',
    'year'  => 'Year',
    ),

'filter'            => 'Filter',
'when'              => 'When',
'where'             => 'Where',
'what'              => 'What',
'click_here'        => '<a href="%s">Click Here</a> for more information',
'clk_help'         => 'Click for help',
'more_info'         => 'More Information',
'contact_us'        => 'Please <a href="%s">contact us</a> for more information.',
'rem_subject' => "An event reminder from {$_CONF['site_name']}",
'rem_msg1'  => "You are receiving this event reminder because your address was submitted to {$_CONF['site_name']}.",
'rem_url'   => 'For more information please visit %s',
'you_are_subscribed' => 'You are subscribed to this event.',
'topic_all'         => 'All',
'topic_home'        => 'Homepage only',
'recur_desc'        => array(
    1   => 'Occurs every day',
    2   => 'Occurs on the same date each month',
    3   => 'Occurs on the same date each year',
    4   => 'Occurs every %interval% week on %day%',
    5   => 'Occurs %interval% month on the %daynum% %day%',
    6   => '',      // custom dates
    ),
'on_days'   => 'on %s',
'on_the_days' => 'on the %s',
'each'      => 'each',
'every_num'  => 'every %d',
'recur_stop_desc' => ' until %s',
'recur_freq_txt' => 'Occurs every',
'interval_label' => 'Specify the interval and day on which this event will recur',
'interval_note' => 'The first occurance will be on the date specified above.',
'all_calendars' => 'All Calendars',
'all_categories' => 'All Categories',
'update_cats'   => 'Update Categories',
'notify_submission' => "A new event has been submitted to {$_CONF['site_name']}.  It can be approved or deleted at {$_CONF['site_admin_url']}/moderation.php.",
'submitted_by' => 'Submitted By',
'notify_subject' => 'Event Notification from ' . $_CONF['site_name'],
'show_contactlink' => 'Show link to contact email',
'no_match'  => 'There are no events that match your criteria.',
'event_begins' => 'This event begins: %s',
'read_more' => 'Read More',
'quick_del' => 'Quick Delete',
'gen_evt_info' => 'General Event Information',
'full_desc' => 'Full Description',
'postmode' => 'Postmode',
'post_html_note1' => 'NOTE: The <i>Event Location</i> field below also accepts html.',
'enable_reminders_q' => 'Email reminders?',
'disable_reminders_note' => 'NOTE: Disabling reminders will delete all stored reminders.',
'submit_email_note' => 'Submit your email address in order to be reminded of this event prior to its occurrence.',
'add_to_cats' => 'Add your event to a single or to multiple categories',
'cats_not_req' => 'Adding your event to a category is not required.',
'cat_note1' => 'Create a new category for your event instead of, or in addition to any existing categories.',
'url' => 'URL',
'street_address' => 'Street Address',
'city' => 'City',
'state' => 'Province/State',
'country' => 'Country',
'zip' => 'Postal/Zip Code',
'for_more_info' => 'For more information contact',
'email' => 'E-mail',
'phone' => 'Phone #',
'perms_desc' => 'Permissions: (R = read, E = edit, edit rights assume read rights)',
'date_time_info' => 'Date and Time Information',
'split_q' => 'Split?',
'rec_event_info' => 'Recurring Event Information',
'rec_event_q' => 'Is this a recurring event?',
'event_recurs' => 'Event recurs',
'select_format' => 'Select Format',
'jump_today' => 'Jump to Today',
'day_view' => 'Daily View',
'week_view' => 'Weekly View',
'month_view' => 'Monthly View',
'year_view' => 'Yearly View',
'list_view' => 'List View',
'select_range' => 'Select an event range to display',
'or_choose_cat' => 'and/or choose a category',
'go' => 'Go',
'days_prior' => 'days prior to this event.',
'email_private' => 'Your email will remain private and will only be used to remind you of this event.',
'messages' => array(
    1   => 'Success!  Event has been deleted.',
    2   => 'Success!  Your event has been saved.',
    3   => 'Event has been copied.  You may now edit your new event.',
    4   => 'Success!  Event has been updated.',
    5   => 'Required fields are empty.  Please recheck your submission.',
    6   => 'Alert!',
    7   => 'evList default settings have been applied.',
    8   => 'evList configuration settings have been updated.',
    9   => "Thank-you for submitting your event to {$_CONF['site_name']}. It has been submitted to our staff for approval. If approved, your event will be available for others to read on our site.",
    10  => 'Supplied dates are not valid.  Please recheck your submission.',
    11  => 'Categories have been updated.',
    12  => 'Reminder saved.  You should receive an email reminder prior to this event.',
    13  => 'You have supplied an invalid or improperly formatted email address.  Please try again.',
    14  => 'You must specify the number of days prior to this event that you wish to be notified.',
    15  => "This site requires at least {$_EV_CONF['reminder_speedlimit']} seconds between reminder requests.",
    16  => "This site requires at least {$_EV_CONF['post_speedlimit']} seconds between event submissions.",
    17  => 'The glFusion calendar events have been imported',
    18  => 'Successfully removed reminder notification',
    19  => 'One or more errors occured during the calendar import.  Check the error log for details.',
    20  => 'This event doesn\'t allow registrations, or you do not have access to it.',
    21  => 'You\'re already signed up for this event.',
    22  => 'This event is full.',
    23  => 'There was an error processing your request.',
    24  => 'You have been registered for this event.',
    25  => 'Your registration has been cancelled.',
    26  => 'Payment is required, click <a href="%s">here</a> to check out',
    50  => 'Not Paid',
    51  => 'Already Used',
),
'admin_instr' => array(
    'categories' => 'Deleting categories <strong>will not</strong> delete events belonging to those categories.<br />Disabling a category <strong>will not</strong> disable its events.  Those events will continue to appear in the event list.',
    'calendars' => 'All events must be associated with a calendar.<br />Disabling a calendar prevents its events from being displayed. Deleting a calendar requires that events belonging to it be moved to another calendar.<br />Calendar number 1 cannot be deleted, but may be disabled.',
    'events' => 'To create a new event, click on "New Event" above.<br />To modify or delete an event, click on that event\'s edit icon below. To enable/disable an event, check the appropriate box below.',
    'tickettypes' => 'Tickets can be created for free or paid admission, and to cover one event occurrence or all occurrences (event pass). Tickets are only used if the global &quot;Enable RSVP&quot; setting is enabled.<br />Ticket Types can only be deleted if they haven&apos; been used for any events.',
),

'current_events'  => 'Current Events',
'past_events' => 'Past Events',
'upcoming_events' => 'Upcoming Events',
'this_week_events' => 'This Week\'s Events',
'this_month_events' => 'This Month\'s Events',
'hits'          => 'Hits',
'top_ten'       => 'Top Ten evList Events',
'no_events_viewable' => 'No events in the system are currently viewable.',
'date'          => 'Date',
'all_upcoming'  => 'All Upcoming Events',
'subscribe_to'  => 'Subscribe to',
'event_editor'  => 'Event Editor',
'datestart_note' => "* Starting year and month are required fields.",
'custom_label'  => 'Specify the %s on which this event will recur%s',
'stop_label'    => 'Specify the %s beyond which this event will not recur%s',
'day_by_date'   => 'day, by date,',
'year_and_month' => 'year and month',
'year'          => 'year',
'days_of_week'  => 'days of the week',
'date_l'        => 'date',
'all_day_event' => 'This is an all day event.',
'more_from_cat' => 'More events from:',
'access_denied_msg' => 'Only Authorized Users have Access to this Page.  Your user name and IP have been recorded.',
'coordinates'   => 'Coordinates',
'latitude'      => 'Latitude',
'longitude'     => 'Longitude',
'instr_coords'  => 'If zero or empty, the coordinates will be filled in automatically from the address information, if possible.',
'select_location' => 'Select Location',
'instr_sel_loc' => 'Select a location from the list, or fill in the details.',
'use_rsvp'       => 'Enable signups?',
'max_rsvp'       => 'Max. Attendees',
'max_user_rsvp' => 'Max. Registrations per User',
'signup'        => 'Register for this event',
'cancelreg'     => 'Cancel your registration',
'rsvp_none'     => 'Signups Disabled',
'rsvp_event'    => 'Allow signups for the event',
'rsvp_repeat'   => 'Allow signups for each occurrence',
'rsvp_mindays'  => 'Min. days to RSVP',
'admin_rsvp'    => 'Manage RSVP\'s',
'rsvp_date'      => 'Registration Date',
'registration'  => 'Registration',
'rsvp_waitlist' => 'Accept waitlisted reservations?',
'rsvp_cutoff'   => 'RSVP Cutoff (days)',
'sel_monthdays' => 'Select the days each month when the event will occur',
'sub_this_instance' => 'This Instance',
'sub_all_instances' => 'All occurrences',
'description'   => 'Description',
'event_pass'    => 'Event Pass',
'cancel_free'   => 'Free registrations can be cancelled here if you will not be attending.',
'free_rsvp'     => 'Free Registrations',
'ticket_num'    => 'Ticket Number',
'date_used'     => 'Date Used',
'paid'          => 'Paid',
'login_to_register' => 'You need to log into the site to register for this event',
'conf_reset'    => 'Are your sure you want to reset this item?',
'reset_usage'   => 'Reset Usage',
'export_list'   => 'Export List',
'waitlisted'    => 'Waitlisted',
'name'          => 'Name',
'quantity'      => 'Quantity',
);

$PLG_evlist_MESSAGE1 = 'This event doesn\'t allow registrations, or you do not have access to it.';
$PLG_evlist_MESSAGE2 = 'You\'re already signed up for this event.';
$PLG_evlist_MESSAGE3 = 'This event is full.';
$PLG_evlist_MESSAGE4 = 'There was an error processing your request.';

/* glFusion integrations:  links, stats, search, etc. */
$X_LANG_EVLIST00 = array (
    1   => 'evList',
    2   => 'Event List',
    3   => 'Add Event',
    4   => 'Access Denied',
    5   => 'Only Authorized Users have Access to this Page.  Your user name and IP have been recorded.',
    6   => 'Events',
    7   => 'evList Events Listing',
    8   => 'evList Search Results',
    9   => 'Title',
    10  => 'Start Date',
    11  => 'Hits',
    12  => 'evList Events',
    13  => 'Event Title',
    14  => 'Top Ten evList Events',
    15  => 'No events in the system are currently viewable.',
    16  => 'evList Event Submissions',
    17  => 'Title',
    18  => 'Start Date',
    19  => 'Title',
    20  => 'Date',
    21  => 'Submissions',
    22  => 'evList Submissions',
    23  => 'End of message',
    24  => 'All Categories',
    25  => 'Jump to Today',
    26  => 'Daily View',
    27  => 'Weekly View',
    28  => 'Monthly View',
    29  => 'Yearly View',
    30  => 'List View',
);

/* admin */
$X_LANG_EVLIST01 = array (
    1   => '',
    2   => 'Allow anonymous users to view events?',
    3   => 'Allow anonymous submissions?',
    4   => 'Allow logged in user submissions?',
    5   => 'Allow html when posting?',
    6   => 'NOTE: Only logged in users may post in html.',
    7   => 'User menu link option',
    8   => 'Enable the menu item?',
    9   => 'Week begins on',
    10  => 'Enable centerblock?',
    11  => 'Centerblock position',
    12  => 'Topic',
    13  => 'Date format',
    14  => 'Time format',
    15  => 'Save',
    16  => 'Reset',
    17  => 'Apply Defaults',
    18  => 'Cancel',
    19  => 'Access Config',
    20  => 'GUI Config',
    21  => 'Centerblock Config',
    22  => 'NOTE: Applies to header.thtml and the menu_elements var only.',
    23  => 'Add Event',
    24  => 'List Events',
    25  => 'Sunday',
    26  => 'Monday',
    27  => 'evList Configuration Editor',
    28  => 'All',
    29  => 'Homepage only',
    30  => 'Top of page',
    31  => 'After featured story',
    32  => 'Bottom of page',
    33  => 'Entire page',
    34  => 'NOTE: When checked, an event list will be displayed as a center block on the index page.',
    35  => 'Enter the number of events to display',
    36  => 'Select an event range to display',
    37  => 'NOTE: All submissions are queued pending approval.',
    38  => 'Edit',
    39  => 'Event Title',
    40  => 'Start Date',
    41  => 'Copy',
    42  => 'ID',
    43  => 'Create New',
    44  => 'evList Config',
    45  => 'evList Event Manager',
    46  => 'To create a new event, click on "Create New" above.<br />To manage global options, click on "evList Config" above.<br />To manage categories, click on "Categories" above.<br />To modify or delete an event, click on that event\'s edit icon below. To view an event, click on the event\'s title you wish to view. To enable/disable an event, check the appropriate box below.',
    47  => 'Enable',
    48  => 'Display Event',
    49  => 'Edit Event',
    50  => 'Clone event to editor',
    51  => 'evList Categories',
    52  => 'evList Events',
    53  => 'ID',
    54  => 'Name',
    55  => 'Enabled',
    56  => 'Delete?',
    57  => 'Create new categories below',
    58  => 'To manage events, click on "evList Events" above.<br />To manage global options, click on "evList Config" above.<br />To edit category names, delete or enable/disable categories, edit or check the apporpriate box below.  You may also create new categories in the empty fields at the bottom of the table.',
    59  => 'To manage events, click on "evList Events" above.<br />To manage categories, click on "evList Categories" above.<br />To manage evList glogal options, edit the fields below where necessary.',
    60  => 'Update Categories',
    61  => 'Deleting categories <strong>will not</strong> delete events belonging to those categories.',
    62  => 'Upcoming events block: number of events to display',
    63  => 'Main list: number of events to display per page',
    64  => 'Number of characters to display in event summary',
    65  => 'Disabling a category <strong>will not</strong> disable its events.  Those events will continue to appear in the event list if it belongs to another category or if no category is selected.',
    66  => 'Enable email reminders?',
    67  => 'NOTE: Disabling reminders will delete all stored reminders.',
    68  => 'An event ceases to be <i>upcoming</i>',
    69  => 'Import',
);

/* list */
$X_LANG_EVLIST02 = array (
    1   => 'There are no events that match your criteria.',
    2   => 'Event List',
    3   => 'This event begins: %s',
    4   => 'Read More',
    5   => 'Contact',
    6   => 'This event ends: %s',
    7   => 'Current Events',
    8   => 'Past Events',
    9   => 'Upcoming Events',
    10  => 'Select an event range to display',
    11  => 'This Week\'s Events',
    12  => 'This Month\'s Events',
    13  => 'Previous',
    14  => 'Next',
    15  => 'Category',
    16  => 'Go',
    17  => 'Add Event',
);

/* event */
$X_LANG_EVLIST03 = array (
    1   => 'Upcoming Event',
    2   => 'Event ID# %s does not exist.  Please check your link and try again.',
    3   => '<strong>Begins:</strong> ',
    4   => '<strong>Ends:</strong> ',
    5   => 'Please %s for more information.',
    6   => 'Contact %s',
    7   => 'contact us',
    8   => 'Edit',
    9   => 'Quick Delete',
    10  => 'Back to event list',
    11  => 'This event takes place at: %s',
    12  => 'Location',
    13  => 'Click Here',
    14  => 'This is an all day event.',
    15  => 'This event recurs %s.',
    16  => 'Contact',
    17  => 'daily',
    18  => 'monthly',
    19  => 'yearly',
    20  => 'weekly: %s',
    21  => 'and ',
    22  => 'and/or choose a category',
    23  => 'More events from:&nbsp;',
    24  => 'Email me at',
    25  => 'Submit your email address in order to be reminded of this event prior to its occurrence.',
    26  => 'Your email will remain private and will only be used to remind you of this event.',
    27  => 'Submit',
    28  => 'days prior to this event.',
    29  => "An event reminder from {$_CONF['site_name']}",
    30  => "You are receiving this event reminder because your address was submitted to {$_CONF['site_name']}.",
    31  => 'Please be reminded that the event, %s, will occur on or about %s.',
    32  => 'Event Summary: %s',
    33  => 'For more information please visit %s',
    34  => "Thanks from {$_CONF['site_name']}",
    35  => "every",
    36  => 'Are you sure you want to delete this event?',
    37  => 'All Day',
    38  => 'Past Event',
    39  => 'Event Detail',
);

/* editor */
$X_LANG_EVLIST04 = array (
    1   => 'Event Editor',
    2   => 'General Event Information',
    3   => 'Date and Time Information',
    4   => 'Location Information',
    5   => 'Contact Information',
    6   => 'Access Information',
    7   => 'Save',
    8   => 'Reset',
    9   => 'Delete',
    10  => 'Cancel',
    11  => 'Event Title',
    12  => 'Event Summary',
    13  => 'Full Description',
    14  => 'Start',
    15  => 'End',
    16  => 'day',
    17  => 'month',
    18  => 'year',
    19  => 'hour',
    20  => 'minute',
    21  => 'Event Location',
    22  => 'Street Address',
    23  => 'City',
    24  => 'Province/State',
    25  => 'Postal/Zip Code',
    26  => 'URL',
    27  => 'Contact Information',
    28  => '* <i>Event Title</i> is a required field.',
    29  => 'Is this a recurring event?',
    30  => 'Event recurs',
    31  => 'Split?',
    32  => 'All Day?',
    33  => 'Start Date',
    34  => 'Start Time',
    35  => 'End Date',
    36  => 'End Time',
    37  => 'E-mail',
    38  => 'Phone #',
    39  => 'For more information contact',
    40  => 'Country',
    41  => 'Permissions: (R = read, E = edit, edit rights assume read rights)',
    42  => 'NOTE: "Members" is all logged in members of the site and "anonymous" is all users browsing the site that are not logged in.',
    43  => 'Owner',
    44  => 'Group',
    45  => 'The <i>Every</i> field is not required depending upon your choice of recurring period.',
    46  => 'Postmode',
    47  => 'NOTE: The Event Location field below also accepts html.',
    48  => 'Enable Event?',
    49  => 'Recurring Event Information',
    50  => 'Specify the %s on which this event will recur%s',
    51  => ', if any',
    52  => 'day, by date,',
    53  => '(Format: YYYY-MM-DD)',
    54  => 'date',
    55  => 'year and month',
    56  => '(Format: YYYY-MM)',
    57  => 'year',
    58  => '(Format: YYYY)',
    59  => 'days of the week',
    60  => '(e.g.: 1,3,4,etc. (where 1 = Sunday))',
    61  => 'interval and day',
    62  => 'dates',
    63  => '(Format: YYYY-MM-DD, YYYY-MM-DD, etc.)',
    64  => 'Select Format',
    65  => ' every month',
    66  => 'Specify the %s beyond which this event will not recur%s',
    67  => '* <i>Start Date</i> year and month are required fields.',
    68  => 'Category Information',
    69  => 'New category',
    70  => 'Create a new category for your event instead of, or in addition to any existing categories.',
    71  => 'Add your event to a single or to multiple categories',
    72  => 'Adding your event to a category is not required.',
    73  => 'Skip weekends?',
    74  => 'Next business day?',
    75  => 'A recurring event landing on a weekend may either be skipped or rescheduled to the next business day.',
    76  => 'Enable email reminders?',
    77  => 'Disabling reminders will delete any relevant reminders.'
);

/* column block and centerblock */
$X_LANG_EVLIST05 = array (
    1   => 'Past Events',
    2   => 'Upcoming Events',
    3   => 'This Coming Week',
    4   => 'This Coming Month',
    5   => 'Event Title',
    6   => 'Start Date',
    7   => 'Event List'
);

/* recurring periods */
$X_LANG_EVLIST06 = array (
    1   => 'Daily by date, e.g. April 4 thru April 7 (sequential)',
    2   => 'Monthly by date (the same dates each month)',
    3   => 'Yearly by date, e.g. December 25th year after year',
    4   => 'Weekly by day, e.g. Mon, Wed, and Fri',
    5   => 'Monthly by day, e.g. the 3rd Friday of each month',
    6   => 'Custom dates: a comma-delimited list of calendar dates',
);

/* messages */
$X_LANG_EVLIST07 = array (
    1   => 'Success!  Event has been deleted.',
    2   => 'Success!  Your new event has been saved.',
    3   => 'Event has been copied.  You may now edit your new event.',
    4   => 'Success!  Event has been updated.',
    5   => 'Required fields are empty.  Please recheck your submission.',
    6   => 'Alert!',
    7   => 'evList default settings have been applied.',
    8   => 'evList configuration settings have been updated.',
    9   => "Thank-you for submitting your event to {$_CONF['site_name']}. It has been submitted to our staff for approval. If approved, your event will be available for others to read on our site.",
    10  => 'Supplied dates are not valid.  Please recheck your submission.',
    11  => 'Categories have been updated.',
    12  => 'Reminder saved.  You should receive an email reminder prior to this event.',
    13  => 'You have supplied an invalid or improperly formatted email address.  Please try again.',
    14  => 'You must specify the number of days prior to this event that you wish to be notified.',
    15  => "This site requires at least {$_EV_CONF['reminder_speedlimit']} seconds between reminder requests.",
    16  => "This site requires at least {$_EV_CONF['post_speedlimit']} seconds between event submissions.",
    17  => 'The glFusion calendar events have been imported',
    18  => 'Successfully removed reminder notification',
);

/* postmodes */
$X_LANG_EVLIST08 = array (
    1   => 'plaintext',
    2   => 'html'
);

/* range option */
$X_LANG_EVLIST09 = array (
    1   => 'Past',
    2   => 'Upcoming',
    3   => 'This Week',
    4   => 'This Month'
);

/* weekday option */
/*$LANG_EVLIST10 = array (
    1   => 'Sunday',
    2   => 'Monday',
    3   => 'Tuesday',
    4   => 'Wednesday',
    5   => 'Thursday',
    6   => 'Friday',
    7   => 'Saturday'
);*/

/* interval option */
/*$LANG_EVLIST11 = array (
    1   => 'First',
    2   => 'Second',
    3   => 'Third',
    4   => 'Fourth',
    5   => 'Last'
);*/

/* weekday abreviations */
/*$LANG_EVLIST12 = array (
    1   => 'Sun',
    2   => 'Mon',
    3   => 'Tue',
    4   => 'Wed',
    5   => 'Thu',
    6   => 'Fri',
    7   => 'Sat'
);*/

/* event passing options */
/*$LANG_EVLIST13 = array (
    1   => 'as soon as the start time has passed (if exists).',
    2   => 'as soon as the start date has passed, ie, the next day.',
    3   => 'as soon as the end time has passed (if exists).',
    4   => 'as soon as the end date has passed.',
);*/

/* Periods */
/*$LANG_EVLIST14 = array(
    'day'   => 'Day',
    'week'  => 'Week',
    'month' => 'Month',
    'year'  => 'Year',
);*/

// Localization of the Admin Configuration UI
$LANG_configsections['evlist'] = array(
    'label'                 => 'evList',
    'title'                 => 'evList Configuration'
);
$LANG_confignames['evlist'] = array(
    'allow_anon_view'       => 'Allow anonymous users to view events?',
    'allow_anon_add'        => 'Allow anonymous submissions?',
    'allow_user_add'        => 'Allow logged in user submissions?',
    'allow_html'            => 'Allow html when posting?',
    'can_add'               => 'Users allowed to add events',
    'usermenu_option'       => 'User menu link option',
    'enable_menuitem'       => 'Enable the menu item?',
    'week_begins'           => 'Week begins on',
    'date_format'           => 'Date format',
    'time_format'           => 'Time format',
    'enable_categories'     => 'Enable Categories',
    'enable_centerblock'    => 'Centerblock Type',
    'pos_centerblock'       => 'Centerblock position',
    'topic_centerblock'     => 'Topic',
    'range_centerblock'     => 'Select an event range to display',
    'limit_centerblock'     => 'Enter the number of events to display',
    'limit_list'            => 'Main list: number of events to display per page',
    'limit_block'           => 'Upcoming events block: number of events to display',
    'limit_summary'         => 'Number of characters to display in event summary',
    'enable_reminders'      => 'Enable email reminders?',
    'event_passing'         => 'An event ceases to be <i>upcoming</i>',
    'default_permissions'   => 'Default Permissions (owner,group,members,anon)',
    'reminder_speedlimit'   => 'Reminder speedlimit',
    'post_speedlimit'       => 'Posting Speedlimit',
    'reminder_days'         => 'Number of days prior to an event to allow reminders',
    'displayblocks'         => 'Display glFusion Blocks',
    'default_view'          => 'Default View',
    'max_upcoming_days'     => 'Max. Upcoming days to show in list',
    'use_locator'           => 'Integrate with the Locator plugin?',
    'use_weather'           => 'Integrate with the Weather plugin?',
    'cal_tmpl'              => 'Use HTML or JSON templates',
    'enable_rsvp'           => 'Enable Registration/Ticketing?',
    'rsvp_print'            => 'Enable Ticket Printing?',
);
$LANG_configsubgroups['evlist'] = array(
    'sg_main'               => 'Main Settings',
    'sg_rsvp'               => 'RSVP/Ticketing',
);
$LANG_fs['evlist'] = array(
    'ev_access'             => 'Access Control',
    'ev_gui'                => 'GUI Settings',
    'ev_centerblock'        => 'Centerblock Settings',
    'ev_permissions'        => 'Default Permissions',
    'ev_rsvp'               => 'Registration and Ticketing',
);
$LANG_configselects['evlist'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => TRUE, 'False' => FALSE),
    2 => array('None' => 0, 'Add Event' => 1, 'List Events' => 2),
    3 => array('Sunday' => 1, 'Monday' => 2),
    4 => array(
            'Thu Nov 20, 2008'      => '%a %b %d, %Y',
            'Thu Nov 20'            => '%a %b %d',
            'Thursday Nov 20, 2008' => '%A %b %d, %Y',
            'Thursday Nov 20'       => '%A %b %d',
            'Thursday November 20'  => '%A %B %d',
            'November 20, 2008'     => '%B %d, %Y',
            '11/20/08'              => '%m/%d/%y',
            '11-20-08'              => '%m-%d-%y',
            '2008 11 20'            => '%Y %m %d',
            'Nov 20 2008'           => '%b %d %Y',
            'Nov 20, 2008'          => '%b %d, %Y',
    ),
    5 => array('02:38 PM' => '%I:%M %p', '14:48' => '%H:%M',),
    //4 => array('Thu Nov 20, 2008' => 1,'Thu Nov 20' => 2, 'Thursday Nov 20, 2008' => 3,'Thursday Nov 20' => 4, 'Thursday November 20' => 5, 'November 20, 2008' => 6,'11/20/08' => 7, '11-20-08' => 8,'2008 11 20'=>9,'Nov 20 2008' => 10,'Nov 20, 2008' => 11),
    //5 => array('02:38 PM' => 1,'14:48' => 2),
    6 => array(
            'as soon as the start time has passed (if exists)' => 1,
            'as soon as the start date has passed, ie, the next day.' => 2,
            'as soon as the end time has passed (if exists).' => 3,
            'as soon as the end date has passed.' => 4,
        ),
    7 => array('Top of page'=>1,'After featured story'=>2,'Bottom of page'=>3,'Entire page'=>0),
    8 => array('past'=>1,'upcoming'=>2,'this week'=>3,'this month'=>4),
    9 => array('disabled' => 0, 'table' => 1, 'story' => 2),
    12 => array('No access' => 0, 'Read-Only' => 2, 'Read-Write' => 3),
    13 => array('Left Blocks' => 0, 'Right Blocks' => 1, 'Left & Right Blocks' => 2, 'None' => 3),
    14 => array('Day' => 'day', 'Week' => 'week', 'Month' => 'month', 'Year' => 'year', 'List' => 'list'),
    15 => array('Admins Only' => 0, 'Logged-In Users' => 1, 'Logged-In+Anon Users' => 2),
    16 => array('HTML' => 'html', 'JSON' => 'json'),
    17 => array('No' => 0, 'Default No' => 1, 'Default Paid Only' => 2,
                'Default Paid or Unpaid' => 3),
);

?>
