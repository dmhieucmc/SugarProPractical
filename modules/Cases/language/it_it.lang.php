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
  'ERR_DELETE_RECORD' => 'Per eliminare l´azienda deve essere specificato il numero del record.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
  'LBL_ACCOUNT_ID' => 'ID Azienda',
  'LBL_ACCOUNT_NAME' => 'Nome azienda:',
  'LBL_ACCOUNT_NAME_MOD' => 'Account Name Mod',
  'LBL_ACCOUNT_NAME_OWNER' => 'Account Name Owner',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
  'LBL_ASSIGNED_USER_NAME_MOD' => 'Assigned User Name Mod',
  'LBL_ASSIGNED_USER_NAME_OWNER' => 'Assigned User Name Owner',
  'LBL_ATTACH_NOTE' => 'Allega nota',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bug',
  'LBL_CASE' => 'Reclamo:',
  'LBL_CASE_FROM_TWITTER_TITLE' => 'Tweet',
  'LBL_CASE_INFORMATION' => 'Informazioni Reclamo',
  'LBL_CASE_NUMBER' => 'Numero Reclamo:',
  'LBL_CASE_SUBJECT' => 'Oggetto Reclamo:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
  'LBL_CONTACT_CASE_TITLE' => 'Contatto - Reclamo:',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Email Contatti Relazionati',
  'LBL_CONTACT_NAME' => 'Nome Contatto:',
  'LBL_CONTACT_ROLE' => 'Ruolo:',
  'LBL_CREATED_BY_NAME_MOD' => 'Created By Name Mod',
  'LBL_CREATED_BY_NAME_OWNER' => 'Created By Name Owner',
  'LBL_CREATED_USER' => 'Utente Creato',
  'LBL_CREATE_KB_DOCUMENT' => 'Crea Articolo',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reclami',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenti',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Utente Assegnato',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nome Utente Assegnato',
  'LBL_EXPORT_CREATED_BY' => 'Creato da ID',
  'LBL_EXPORT_CREATED_BY_NAME' => 'Creato da Nome Utente',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificato da ID',
  'LBL_EXPORT_TEAM_COUNT' => 'Totale Gruppo',
  'LBL_FILENANE_ATTACHMENT' => 'File Allegato',
  'LBL_HELP_CREATE' => 'Il modulo {{plural_module_name}} viene utilizzato per tracciare e gestire i problemi relativi al prodotto o servizio riportati dal cliente alla tua azienda. Per creare un {{module_name}}: 1. Fornire i valori desiderati per i campi. - I campi segnati come "Obbligatorio" devono essere compilati prima del salvataggio. - Cliccare "Mostra più" per visualizzare ulteriori campi se necessario. 2. Cliccare "Salva" per finalizzare il nuovo record e tornare alla pagina precedente. - Scegliere "Salva e Visualizza" per aprire la vista elenco del nuovo {{module_name}}. - Scegliere "Salva e crea nuovo" per creare immediatamente un altro nuovo {{module_name}}.',
  'LBL_HELP_RECORD' => 'Il modulo {{plural_module_name}} viene utilizzato per tracciare e gestire i problemi relativi al prodotto o servizio riportati dal cliente alla tua azienda. - Modificare i campi di questi records cliccando il singolo campo o il pulsante Modifica. - Visualizza o modifica i link agli altri records nei sottopannelli agendo sul pulsante "Visualizza Dati" in basso a sinistra. - Creare e visualizzare i commenti degli utenti e la cronologia delle modifiche dei records nel modulo {{activitystream_singular_module}} agendo sul pulsante "Activity Stream" in basso a sinistra. - Seguire o impostare come preferito questo record usando le icone alla destra del nome del record. - Azioni aggiuntive sono disponibili nel menù a tendina delle Azioni alla destra del pulsante Modifica.',
  'LBL_HELP_RECORDS' => 'Il modulo {{plural_module_name}} viene utilizzato per tracciare e gestire i problemi relativi al prodotto o servizio riportati dal cliente alla tua azienda. I {{plural_module_name}} sono tipicamente relazionati a record di {{accounts_singular_module}} e molteplici {{plural_module_name}} possono essere associate ad una singola {{accounts_singular_module}}. Esistono diversi modi per creare {{plural_module_name}} in Sugar come attraverso il modulo {{plural_module_name}}, importando {{plural_module_name}}, o convertendo da email. Una volta che {{module_name}} è creato, puoi visualizzare e modificare informazioni pertinenti il {{module_name}} attraverso la vista elenco delle {{module_name}}.  Ogni {{module_name}} potrebbe essere relazionata ad un record di Sugar come {{calls_module}}, {{contacts_module}}, {{bugs_module}} e molti altri.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
  'LBL_INVITEE' => 'Contatti',
  'LBL_KBDOCUMENTS_SUBPANEL_TITLE' => 'Knowledge Base',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
  'LBL_LIST_ASSIGNED' => 'Assegnato A',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assegnato a',
  'LBL_LIST_CLOSE' => 'Chiuso',
  'LBL_LIST_DATE_CREATED' => 'Data Creazione',
  'LBL_LIST_FORM_TITLE' => 'Elenco Reclami',
  'LBL_LIST_LAST_MODIFIED' => 'Ultima Modifica',
  'LBL_LIST_MY_CASES' => 'I miei Reclami Aperti',
  'LBL_LIST_NUMBER' => 'Num.',
  'LBL_LIST_PRIORITY' => 'Priorità',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_SUBJECT' => 'Oggetto',
  'LBL_MEMBER_OF' => 'Azienda',
  'LBL_MODIFIED_BY_NAME_MOD' => 'Modified By Name Mod',
  'LBL_MODIFIED_BY_NAME_OWNER' => 'Modified By Name Owner',
  'LBL_MODIFIED_USER' => 'Utente Modificato',
  'LBL_MODIFIED_USER_NAME' => 'Nome Utente Modificato',
  'LBL_MODIFIED_USER_NAME_MOD' => 'Modified User Name Mod',
  'LBL_MODIFIED_USER_NAME_OWNER' => 'Modified User Name Owner',
  'LBL_MODULE_NAME' => 'Reclami',
  'LBL_MODULE_NAME_SINGULAR' => 'Reclamo',
  'LBL_MODULE_TITLE' => 'Reclami: Home',
  'LBL_NEW_FORM_TITLE' => 'Nuovo Reclamo',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Note',
  'LBL_NUMBER' => 'Numero:',
  'LBL_PORTAL_TOUR_RECORDS_CREATE' => 'Se hai un nuovo reclamo che vuoi segnalare, puoi cliccare quì e segnalare un nuovo Reclamo.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER' => 'Puoi filtrare la lista dei Reclami fornendo delle condizioni di ricerca.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER_EXAMPLE' => 'Per esempio, potresti usarlo per trovare un compito che è stato creato in precedenza',
  'LBL_PORTAL_TOUR_RECORDS_INTRO' => 'Il modulo Reclami serve per gestire il supporto ai problemi che si verificano sul tuo Account. Usa le frecce sottostanti per effettuare un tour veloce.',
  'LBL_PORTAL_TOUR_RECORDS_PAGE' => 'Questa pagina mostra la lista dei Reclami esistenti associarti al tuo Account.',
  'LBL_PORTAL_TOUR_RECORDS_RETURN' => 'Cliccando quì verrai ricondotto a questa vista ogni volta.',
  'LBL_PORTAL_VIEWABLE' => 'Area di visualizzazione del portale',
  'LBL_PRIORITY' => 'Priorità:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
  'LBL_RESOLUTION' => 'Soluzione:',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Reclamo',
  'LBL_SHOW_IN_PORTAL' => 'Mostra nel Portale',
  'LBL_SHOW_MORE' => 'Mostra più Reclami',
  'LBL_SOURCE' => 'Fonte:',
  'LBL_STATUS' => 'Stato:',
  'LBL_SUBJECT' => 'Oggetto:',
  'LBL_SYSTEM_ID' => 'ID Sistema',
  'LBL_TEAM_COUNT_MOD' => 'Team Count Mod',
  'LBL_TEAM_COUNT_OWNER' => 'Team Count Owner',
  'LBL_TEAM_NAME_MOD' => 'Team Name Mod',
  'LBL_TEAM_NAME_OWNER' => 'Team Name Owner',
  'LBL_TYPE' => 'Tipo',
  'LBL_WORK_LOG' => 'Work Log',
  'LNK_CASE_LIST' => 'Visualizza Reclami',
  'LNK_CASE_REPORTS' => 'Visualizza Report dei Reclami',
  'LNK_CREATE' => 'Nuovo Reclamo',
  'LNK_CREATE_WHEN_EMPTY' => 'Crea un Reclamo adesso.',
  'LNK_IMPORT_CASES' => 'Importa Reclami',
  'LNK_NEW_CASE' => 'Nuovo Reclamo',
  'NTC_REMOVE_FROM_BUG_CONFIRMATION' => 'Sei sicuro di voler rimuovere il reclamo dal bug?',
  'NTC_REMOVE_INVITEE' => 'Sei sicuro di voler rimuovere questo contatto dal reclamo?',
);

