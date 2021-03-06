<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att kunna radera organisationen.',
  'LBL_ACCEPT_LINK' => 'Acceptera Länk',
  'LBL_ACCEPT_STATUS' => 'Acceptera status',
  'LBL_ACCOUNT_NAME' => 'Konto',
  'LBL_ACTIVITIES_REPORTS' => 'Aktivitetsrapport',
  'LBL_ADD_BUTTON' => 'Lägg till',
  'LBL_ADD_INVITEE' => 'Lägg till inbjudna',
  'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare',
  'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
  'LBL_BLANK' => '-blank-',
  'LBL_CALL' => 'Telefonsamtal:',
  'LBL_CALL_INFORMATION' => 'Samtalsöversikt',
  'LBL_CANCEL_CREATE_INVITEE' => 'Avbryt',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Är du säker på att du vill radera alla upprepade protokoll?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CREATE_AND_ADD' => 'Skapa & Lägg Till',
  'LBL_CREATE_CONTACT' => 'Som Kontakt',
  'LBL_CREATE_INVITEE' => 'Skapa en Inbjudan',
  'LBL_CREATE_LEAD' => 'Som Lead',
  'LBL_CREATE_MODULE' => 'Logga samtal',
  'LBL_DATE' => 'Startdatum',
  'LBL_DATE_END' => 'Slutdatum',
  'LBL_DATE_END_ERROR' => 'Slutdatum är före startdatum',
  'LBL_DATE_TIME' => 'Startdatum & tid',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Telefonsamtal',
  'LBL_DEL' => 'Radera',
  'LBL_DESCRIPTION' => 'Beskrivning:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beskrivande information',
  'LBL_DIRECTION' => 'Riktning:',
  'LBL_DURATION' => 'Varaktighet:',
  'LBL_DURATION_HOURS' => 'Varaktighet timmar:',
  'LBL_DURATION_MINUTES' => 'Varaktighet minuter:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Redigera Alla Upprepningar',
  'LBL_EMAIL' => 'Epost',
  'LBL_EMAIL_REMINDER' => 'Epost påminnelse',
  'LBL_EMAIL_REMINDER_SENT' => 'Epost påminnelse skickad',
  'LBL_EMAIL_REMINDER_TIME' => 'Tid för Epost Påminnelse',
  'LBL_EMPTY_SEARCH_RESULT' => 'Tyvärr, inga resultat hittades. Var vänlig skapa en inbjudan nedanför.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tilldelad Användar ID',
  'LBL_EXPORT_CREATED_BY' => 'Skapad av ID',
  'LBL_EXPORT_DATE_START' => 'Startdatum och starttid',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Ändrad av ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Relaterad Till Modul',
  'LBL_EXPORT_REMINDER_TIME' => 'Påminnelsetid (i minuter)',
  'LBL_FIRST_NAME' => 'Förnamn',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Anteckningar',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(timmar/minuter)',
  'LBL_INVITEE' => 'Inbjudna',
  'LBL_LAST_NAME' => 'Efternamn',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
  'LBL_LIST_CLOSE' => 'Stäng',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE' => 'Startdatum',
  'LBL_LIST_DIRECTION' => 'Riktning',
  'LBL_LIST_DURATION' => 'Varaktighet',
  'LBL_LIST_FORM_TITLE' => 'Lista telefonsamtal',
  'LBL_LIST_MY_CALLS' => 'Mina telefonsamtal',
  'LBL_LIST_RELATED_TO' => 'Relaterad till',
  'LBL_LIST_RELATED_TO_ID' => 'Relaterad till ID',
  'LBL_LIST_SUBJECT' => 'Ämne',
  'LBL_LIST_TIME' => 'Start tid',
  'LBL_LOG_CALL' => 'Telefonsamtals logg',
  'LBL_MEMBER_OF' => 'Medlem av',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Telefonsamtal',
  'LBL_MODULE_NAME_SINGULAR' => 'Telefonsamtal',
  'LBL_MODULE_TITLE' => 'Telefonsamtal: Hem',
  'LBL_NAME' => 'Namn',
  'LBL_NEW_FORM_TITLE' => 'Skapa aktivitet',
  'LBL_NO_ACCESS' => 'Du har inte behörighet att skapa $module.',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Föräldra ID',
  'LBL_PHONE' => 'Telefon',
  'LBL_RECURRENCE' => 'Upprepning',
  'LBL_RECURRING_LIMIT_ERROR' => 'Det här upprepade mötet kan inte schemaläggas för det överskrider maximalt antal tillåtna upprepningar av $limit.',
  'LBL_RECURRING_SOURCE' => 'Upprepa Source',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Samtal med {{{this}}}',
  'LBL_RELATED_TO' => 'Relaterad till:',
  'LBL_REMINDER' => 'Påminnelse:',
  'LBL_REMINDER_EMAIL' => 'Epost',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Maila alla inbjudna',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Påminnelse tid',
  'LBL_REMINDER_TITLE' => 'Samtal:',
  'LBL_REMOVE' => 'radera',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Radera Alla Upprepningar',
  'LBL_REPEAT_COUNT' => 'Antal upprepningar',
  'LBL_REPEAT_DOW' => 'På',
  'LBL_REPEAT_END' => 'Slut',
  'LBL_REPEAT_END_AFTER' => 'Efter',
  'LBL_REPEAT_END_BY' => 'Av',
  'LBL_REPEAT_INTERVAL' => 'Varje',
  'LBL_REPEAT_OCCURRENCES' => 'upprepning',
  'LBL_REPEAT_PARENT_ID' => 'Repetera Parent ID',
  'LBL_REPEAT_TYPE' => 'Repetera',
  'LBL_REPEAT_UNTIL' => 'Repetera Ända Till',
  'LBL_REVENUELINEITEMS' => 'Intäktsposter',
  'LBL_SCHEDULING_FORM_TITLE' => 'Schemaläggning',
  'LBL_SEARCH_BUTTON' => 'Sök',
  'LBL_SEARCH_FORM_TITLE' => 'Sök telefonsamtal',
  'LBL_SELECT_FROM_DROPDOWN' => 'Var god välj först från dropdownmenyn Relaterad till.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Skicka inbjudan',
  'LBL_SEND_BUTTON_TITLE' => 'Skicka inbjudan [Alt+I]',
  'LBL_SEND_INVITES' => 'Skicka inbjudningar',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Ämne:',
  'LBL_SYNCED_RECURRING_MSG' => 'Det här mötet skapades i ett annat system och synkroniserades till Sugar. För att göra ändringar, gå till originalet av mötet i det andra systemet. Ändringar gjorda i det andra systemet synkroniseras till det här protokollet.',
  'LBL_TIME' => 'Start tid:',
  'LBL_TIME_END' => 'Slut tid',
  'LBL_USERS_SUBPANEL_TITLE' => 'Användare',
  'LNK_CALL_LIST' => 'Telefonsamtal',
  'LNK_IMPORT_CALLS' => 'Importera telefonsamtal',
  'LNK_NEW_ACCOUNT' => 'Ny organisation',
  'LNK_NEW_APPOINTMENT' => 'Skapa aktivitet',
  'LNK_NEW_CALL' => 'Schemalägg telefonsamtal',
  'LNK_NEW_MEETING' => 'Schemalägg möte',
  'LNK_NEW_OPPORTUNITY' => 'Ny affärsmöjlighet',
  'LNK_SELECT_ACCOUNT' => 'Välj organisation',
  'NOTICE_DURATION_TIME' => 'Varaktighetstiden måste vara större än 0',
  'NTC_REMOVE_INVITEE' => 'Är du säker på att du vill ta bort den inbjudna från detta telefonsamtal?',
  'TPL_CALL_STATUS_CHANGED' => 'Samtal markerad som {{status}}.',
);

